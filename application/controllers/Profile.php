<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('M_user1');
        

    }

    public function index() {
        $email = $this->session->userdata('email');
        $data['title'] = "Profile";
        $data['company']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tempat'] = $this->M_user1->tampil_data()->result_array();
        $data['profiles'] = $this->M_user1->get_profiles_by_email($email);
        $data['company1'] = $this->M_user1->tampil_datauser()->result_array();
        $data['company2'] = $this->M_user1->tampil_data2()->row_array();
        $this->load->view('user1/navigasi',$data);
		$this->load->view('user1/header',$data);
        $this->load->view('user1/profile', $data);
        $this->load->view('user1/footer', $data);

    }
}