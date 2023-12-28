<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    

    public function index()
    {
        $this->load->view('admin1/Header');
        $this->load->view('admin1/Awal');
		$this->load->view('admin1/footer');

    }
}