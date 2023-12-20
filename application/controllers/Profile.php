<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('company_model');

    }

    public function index() {
		$data['title'] = "Profile";
        $data['company'] = $this->company_model->get_company_profile();
        $this->load->view('user1/navigasi',$data);
		$this->load->view('user1/header',$data);
        $this->load->view('user1/profile', $data);
    }
}
