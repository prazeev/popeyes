<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('curl','session'));
		$this->load->helper(array('url','camera'));
		$this->load->database();
		if(!$this->session->userdata('username')) {
			redirect('auth/index','refresh');
		}
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title'] = " Home";
		$data['total_camera'] = $this->db->get_where('camera_list',array('added_by' => $this->session->userdata('username')))->num_rows();
		$this->load->view('home',$data);
	}
	public function get_user($id = FALSE) {
		if(!$id) {
			$query = $this->db->get_where('users',array('uid' => $this->session->userdata('username')));
			$u = $query->row();
			return $u->username;
		} else {
			$query = $this->db->get_where('users',array('uid' => $id));
			$u = $query->row();
			return $u->username;
		}
	}
	public function add_camera() {
		$data['title'] = "Add Camera";
		$this->load->view('add_camera',$data);
	}

	public function audit_center_case_review() {
		$data['title'] = "Audit Center Case Review";
		$this->load->view('audit_center_case_review',$data);
	}
	function add_camera_form() {
		$monitor['Name'] = $this->input->post('name');
		$monitor['Function'] = $this->input->post('function');
		$monitor['Protocol'] = $this->input->post('protocol');
		$monitor['Method'] = "simple";
		$monitor['Port'] = $this->input->post('port');
		$monitor['Path'] = $this->input->post('path');
		$monitor['Width'] = $this->input->post('width');
		$monitor['Height'] = $this->input->post('height');
		$monitor['Colours'] = $this->input->post('colours');
		$monitor['Type'] = 'Ffmpeg';
		$data['allm'] = $this->curl->simple_post(SERVER."monitors.json", $monitor);
		$monitors = $this->curl->simple_get(SERVER."monitors.json");
		$monitors = json_decode($monitors);
		$data['allm'] = count($monitors->monitors) - 1;
		$data['allm'] = $monitors->monitors[$data['allm']]->Monitor->Id;

		$database['cname'] = $this->input->post('name');
		$database['zm'] = $data['allm'];
		$database['location'] = $this->input->post('location');
		$database['lng'] = $this->input->post('longitude');
		$database['lat'] = $this->input->post('latitude');
		$database['added_by'] = $this->get_user();
		if($this->db->insert('camera_list', $database)) {
			$last_id = $this->db->insert_id();
			$this->session->set_flashdata('message','swal("Done!", "New Camera Successfully Added!", "success")');
			redirect('main/camera_list/'.$data['allm'],'refresh');
		}
		else {
			$this->session->set_flashdata('message','swal("Error!", "Camera adding failed.", "error")');
			redirect('main/add_camera','refresh');
		}
	}
	function edit_camera_form() {
		$monitor['Name'] = $this->input->post('name');
		$monitor['Function'] = $this->input->post('function');
		$monitor['Protocol'] = $this->input->post('protocol');
		$monitor['Method'] = "simple";
		$monitor['Port'] = $this->input->post('port');
		$monitor['Path'] = $this->input->post('path');
		$monitor['Width'] = $this->input->post('width');
		$monitor['Height'] = $this->input->post('height');
		$monitor['Colours'] = $this->input->post('colours');
		$monitor['Id'] = $this->input->post('Id');
		$monitor['Type'] = 'Ffmpeg';
		$data['allm'] = $this->curl->simple_put(SERVER."monitors/".$monitor['Id'].".json", $monitor);
		$database['cname'] = $this->input->post('name');
		$database['location'] = $this->input->post('location');
		$database['lng'] = $this->input->post('longitude');
		$database['lat'] = $this->input->post('latitude');
		$this->db->where(array(
								'zm' => $monitor['Id'],
								'added_by' => $this->session->userdata('username')
								)
		);
		if($this->db->update('camera_list',$database)) {
			$this->session->set_flashdata('message','swal("Done!", "Edit Camera Successfully completed!", "success")');
			redirect('main/camera_list','refresh');
		}
		else {
			$this->session->set_flashdata('message','swal("Error!", "Camera editing failed.", "error")');
			redirect('main/camera_list','refresh');
		}
	}
	public function camera_edit($id = FALSE) {
		if(!$id)
			show_404();
		$data['camera'] = json_decode($this->curl->simple_get(SERVER."monitors/".$id.".json"));
		$data['title'] = " Edit Camera";
		$query = $this->db->select('location,cname,lng,lat')->get_where('camera_list',array('zm'=>$id));
		$map = $query->result();
		$data['location'] = '';
		$data['name'] = '';
		foreach ($map as $key => $value) {
			$data['location'] = $value->location;
			$data['name'] = $value->cname;
			$data['longitude'] = $value->lng;
			$data['latitude'] = $value->lat;
		}
		$this->load->view("edit_camera",$data);
	}
	public function camera_list_location() {
		$data['title'] = " All Camera Location";
		$query = $this->db->select('location,cname')->get_where('camera_list',array('added_by' => $this->session->userdata('username')));
		$map = $query->result();
		$data['location'] = '';
		$data['name'] = '';
		foreach ($map as $key => $value) {
			$data['location'] .= $value->location.";";
			$data['name'] .= $value->cname.";";
		}
		$this->load->view('camera_list_location',$data);
	}
	public function camera_list($id = FALSE) {
		$m = $this->db->select('zm')->get_where('camera_list',array('added_by' => $this->session->userdata('username')))->result();
		$data['zoneminder_id'] = array();
		foreach ($m as $key => $value) {
			array_push($data['zoneminder_id'], $value->zm);
		}
		if(!$id) {
			$data['title'] = " Camera List";
			$camera_list = json_decode($this->curl->simple_get(SERVER."monitors.json"));
			$data['camera_list'] = $camera_list->monitors;
			$this->load->view('camera_list', $data);
		} else {
			$data['title'] = " Camera View";
			$single_camera = json_decode($this->curl->simple_get(SERVER."monitors/".$id.".json"));
			$query = $this->db->get_where('camera_list', array('zm' => $id));
			foreach($query->result() as $row) {
				$data['location'] = $row->location;
				$data['name'] = $row->cname;
			}
			$data['monitor'] = $single_camera->monitor;
			$this->load->view('camera_single', $data);
		}
	}
	public function delete_camera($id = FALSE) {
		if(!$id) {
			show_404();
		} else {
			$e = json_decode($this->curl->simple_get(SERVER."events/index/MonitorId:".$id.".json"));
			$camera = json_decode($this->curl->simple_delete(SERVER."monitors/".$id.".json"));
			$query = $this->db->delete('camera_list', array('zm' => $id));
			if($query) {
				foreach ($e->events as $key => $value) {	
					$camera = json_decode($this->curl->simple_delete(SERVER."events/".$value->Event->Id.".json"));
				}
				$this->session->set_flashdata('message','swal("Done!", "Camera with id '.$id.' deleted Successfully!", "success")');
				redirect('main/camera_list/','refresh');
			} else {
				$this->session->set_flashdata('message','swal("Done!", "Problem on deletion!!", "error")');
				redirect('main/camera_list/','refresh');
			}
		}
	}
	public function event_list($id = FALSE)
	{
		$m = $this->db->select('zm')->get_where('camera_list',array('added_by' => $this->session->userdata('username')))->result();
		$data['zoneminder_id'] = array();
		foreach ($m as $key => $value) {
			array_push($data['zoneminder_id'], $value->zm);
		}
		if(!$id) {
			$e = json_decode($this->curl->simple_get(SERVER."events.json"));
			$data['events'] = $e->events;
			$data['title'] = "Record list";
			$this->load->view('event_list', $data);
		}
		else {
			$e = json_decode($this->curl->simple_get(SERVER."events/".$id.".json"));
			$data['title'] = "Record list";
			$data['event'] = $e->event->Event;
			$data['e_id'] = $id;
			$this->load->view('event_view', $data);
		}
	}
		public function search($id = FALSE) {
		$m = $this->db->select('zm')->get_where('camera_list',array('added_by' => $this->session->userdata('username')))->result();
		$data['zoneminder_id'] = array();
		foreach ($m as $key => $value) {
			array_push($data['zoneminder_id'], $value->zm);
		}
		if(!$id) {
			$data['title'] = "Record list";
			$start = $this->input->post('start');
			$end = $this->input->post('end');
			$camera = $this->input->post('monitor');
			if(isset($start) && isset($end) && $camera != '') {
				$start = str_replace(" ", "%20", date('Y-m-d H:i:s', strtotime($start)));
				$end = str_replace(" ", "%20", date('Y-m-d H:i:s', strtotime($end)));
				$e = json_decode($this->curl->simple_get(SERVER."events/index/MonitorId:".$camera."/StartTime%20>=:$start/EndTime%20<=:$end.json"));
				$data['events'] = $e->events;
				$this->load->view('event_search_camera',$data);
			} else {
				$start = str_replace(" ", "%20", date('Y-m-d H:i:s', strtotime($start)));
				$end = str_replace(" ", "%20", date('Y-m-d H:i:s', strtotime($end)));
				$e = json_decode($this->curl->simple_get(SERVER."events/index/StartTime%20>=:$start/EndTime%20<=:$end.json"));
				$data['events'] = $e->events;
				$this->load->view('event_search', $data);
			}
			// echo "<pre>";
			// print_r($e);
			// die;
		}
		else {
			$e = json_decode($this->curl->simple_get(SERVER."events/".$id.".json"));
			$data['title'] = "Record list";
			$data['event'] = $e->event->Event;
			$data['e_id'] = $id;
			$this->load->view('event_search', $data);
		}
	}
}
