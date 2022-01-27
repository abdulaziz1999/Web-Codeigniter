<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		//kirim ke view
		$this->load->view('layouts/header');
		$this->load->view('register');
		$this->load->view('layouts/footer');
	}
}
