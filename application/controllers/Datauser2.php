<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datauser2 extends CI_Controller {


	public function __construct() {
        parent::__construct();
        $this->load->model('M_user1');
        $this->load->helper('form');
	}	
	public function index()
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('login');
		}
		$user_id = $this->session->userdata('user_id');
        $data['user'] = $this->user_model->get_user($user_id);
		$this->load->view('user2/header', $data);
		$this->load->view('user2/user2', $data);
		$this->load->view('user2/footer', $data);
	}
	public function Myprofile()
	{
		// if (!$this->session->userdata('logged_in')) {
		// 	redirect('login');
		// }
		$user_id = $this->session->userdata('user_id');
        $data['user'] = $this->user_model->get_user($user_id);
		$this->load->view('user2/header');
		$this->load->view('user2/user_profile2', $data);
		$this->load->view('user2/footer');
	}
	public function update_profil2(){

	}
} 		
