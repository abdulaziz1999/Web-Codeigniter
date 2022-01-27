<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function index()
	{
		//data yg akan dikirim
        $data['title'] = 'Nama - Nama Stundent';
		$datasiswa = [
			[
				'id'   => 1,
				'nama' => 'Aziz',
				'job'  => 'Manager Project',
				'year' => '2018',
				'kelas'=> 'TI04',
			],
			[
				'id'   => 2,
				'nama' => 'Nuzurwan',
				'job'  => 'Develop Backend',
				'year' => '2020',
				'kelas'=> 'TI05',
			],
			[
				'id'   => 3,
				'nama' => 'Ahmad Fauzi',
				'job'  => 'Develop Frontend',
				'year' => '2021',
				'kelas'=> 'TI05',
			],
			[
				'id'   => 4,
				'nama' => 'Muzakki',
				'job'  => 'Develop Devops',
				'year' => '2021',
				'kelas'=> 'TI05',
			],
			[
				'id'   => 5,
				'nama' => 'Ahmad Ihsan',
				'job'  => 'Develop Use Case',
				'year' => '2021',
				'kelas'=> 'TI05',
			],
		];
        $data['name_student'] = $datasiswa;

		$this->load->view('layouts/header');
		$this->load->view('student/v_student',$data);
		$this->load->view('layouts/footer');
		// echo "<pre>"; print_r($datasiswa); echo "</pre>";
	}
}
