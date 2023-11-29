<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User1 extends CI_Controller {


	public function index()
	{
		$this->load->view('user1');
	}
}
