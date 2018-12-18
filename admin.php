<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
		$cek = $this->session->userdata('username');
		$periode = $this->session->userdata('periode');
		$data = [
			'periode' => $periode,
		];
		if ($cek == 'admin') 
			$this->load->view('p_admin', $data);
		else
			header('location:'.base_url());
		
	}
}
