<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('curl','session'));
		$this->load->helper(array('url','camera'));
		$this->load->database();
	}
	public function index()
	{
		$data['title'] = "Login to Camera!";
		$this->load->view('login.php',$data);
	}
	public function login() {
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$result = $this->db->get_where('users', array(
			'username' => $user,
			'password' => $pass
			));
		$u = $result->row();
		if(sizeof($u) > 0) {
			$this->session->set_userdata('username',$u->uid);
			redirect('main/index','refresh');
			// var_dump($u);
		} else {
			echo "Invalid username and password";
			redirect('auth/index','refresh');
		}
	}
	public function logout() {
		$this->session->unset_userdata('username');
		redirect('auth/login','refresh');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */