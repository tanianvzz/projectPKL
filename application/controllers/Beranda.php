<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {


	public function index()
	{
		$this->load->view('user1/header');
		$this->load->view('user1/Beranda');
		$this->load->view('user1/footer');

	}
}
