<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome');
	}
	public function test()
	{
		$this->load->view('welcome');
	}

	public function registro() {
		$this->load->view('registro');
	}
	

}
