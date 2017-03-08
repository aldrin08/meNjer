<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestController extends CI_Controller {


	public function index()
	{
		$data['title'] = ' this is tile';


		$this->load->view('test', $data);
	}


	public function test(){

		$data['title'] = ' this is tile';
		$data['test'] = ' this is test';

		$this->load->view('test', $data);
	}

	public function getUser($user){

		$data = array(
				'user' => $user
			);

		$this->load->view('test2', $data);

	}
}
