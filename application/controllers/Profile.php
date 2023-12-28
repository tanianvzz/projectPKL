<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('M_user1');
        

    }

    public function index() {
        $data['title'] = "Profile";
        $data['company']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tempat'] = $this->M_user1->tampil_data()->result_array();
        $data['profiles'] = $this->M_user1->get_profiles_by_email();
        $data['user'] = $this->M_user1->tampil_datauser()->row_array();
        $this->load->view('user1/navigasi',$data);
		$this->load->view('user1/header',$data);
        $this->load->view('user1/profile', $data);
        $this->load->view('user1/footer', $data);

    }
    public function tambah_aksi(){
        
        $user_id = "59";
		// $where = array('user_id' => $user_id);
        $name = $this->input->post('name');
        $address = $this->input->post('address');
        $phone = $this->input->post('phone');
        $major = $this->input->post('major');
        $description = $this->input->post('description');
        $data = array(
            'user_id' => $user_id,
            'name' => $name,
            'address' => $address,
            'phone' => $phone,
            'major' => $major,
            'description' => $description,
        );
        $this->M_user1->tambah_profile($data, 'company_profiles');
        // var_dump($data);
        // die();
        redirect('Profile');
    }
}