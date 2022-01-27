<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		//kirim ke view
		$this->load->view('layouts/header');
		$this->load->view('login');
		$this->load->view('layouts/header');
	}
}
