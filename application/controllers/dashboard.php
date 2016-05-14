<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index() {

		$data['title'] = "Dashboard";

		$this->load->view('inc/v_header', $data);
		$this->load->view('v_dashboard', $data);
		$this->load->view('inc/v_footer', $data);
	}

}