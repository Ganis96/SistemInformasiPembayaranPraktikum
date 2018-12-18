<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_controller extends CI_Controller{
	public function _construct(){
		parent::__construct();
		session_start();
	}

	public function index(){
		// $this->load->model('db_login');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();

		$this->load->view('view_login');

	}
}