<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		//kirim ke view
		$this->load->view('layouts/header');
		$this->load->view('profile');
		$this->load->view('layouts/footer');
	}
}
