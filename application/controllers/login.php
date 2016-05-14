<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index() {

		$data['title'] 	= "MS Freya | Login Page";
		$this->load->view('v_login', $data);
	}

	public function checkLogin() {

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run()) {

			$username 	= $this->input->post('username');
			$password 	= $this->input->post('password');

			$result 	= $this->user_model->login($username, $password);

			if ($result) {
				$sess_array 	= array();
			    foreach($result as $row) {
			       	$sess_array 	= array(
			         	'id' 		=> $row->id,
			         	'username' 	=> $row->username
			       );
			       $this->session->set_userdata('logged_in', $sess_array);
			     }
				redirect('dashboard');
			}
			else {
				$this->session->set_flashdata('fail','Login Failed');
				redirect('login');
			}
		} 
		else {
			$this->session->set_flashdata('fail','Not Allow Null');
			redirect('login');
		}
	}

	public function logout() {

		$this->session->unset_userdata('logged_in');
   		session_destroy();
   		redirect('login');
	}

}