<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
		//kirim ke view
		$this->load->view('layouts/header');
		$this->load->view('landing');
		$this->load->view('layouts/footer');
	}
	
}
