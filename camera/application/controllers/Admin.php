<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','camera'));
		$this->load->database();
		$this->load->library(array('session'));	
		$user = $this->db->get_where('users',array('uid' => $this->session->userdata('username')))->row();
		// print_r($user);
		if($user->type <> 1) {
			show_404();
		}
	}
	public function index() {
		$data['user'] = $this->db->get_where('users',array('uid' => $this->session->userdata('username')))->row();
		$data['title'] = "Admin Dashboard";
		$this->load->view('admin/index',$data);
	}
	public function add_user() {
		$data['user'] = $this->db->get_where('users',array('uid' => $this->session->userdata('username')))->row();
		$data['title'] = "Add User";
		$data['lhead'] = "Rule* ";
		// rule for creating user
		$data['rule'] = $this->db->get_where('admin', array('type' => 'rule_add_user'))->result();
		$this->load->view('admin/add_user',$data);
	}
	public function  view_user() {
		
	}
	public function add_user_form() {
		$data['username'] = $this->input->post('username');
		$data['fullname'] = $this->input->post('fullname');
		$data['location'] = $this->input->post('location');
		$data['password'] = $this->input->post('password');
		$data['type'] = $this->input->post('type');
		// Double user
		$check_user = $this->db->get_where('users',array('username' => $data['username']))->num_rows();
		if($check_user) {
			echo "Sorry, duplicated user";
			$this->session->set_flashdata('message','swal("Error!", "Duplicate user!", "error")');
			redirect('admin/add_user','refresh');
			die;
		} else {
			$this->db->insert('users',$data);
			$this->session->set_flashdata('message','swal("Success!", "User created successfully!", "success")');
			redirect('admin/index','refresh');
		}
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */