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
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tempat'] = $this->M_user1->tampil_data1();
        $data['profiles'] = $this->M_user1->get_profiles_by_email();
    
        $cekkolom = array('description', 'address', 'phone', 'major');
        $userData = $this->db->get_where('company_profiles', ['email' => $this->session->userdata('email')])->row_array();
        $isNull = false;
    
        foreach ($cekkolom as $kolom) {
            if (!array_key_exists($kolom, $userData) || $userData[$kolom] === null) {
                $isNull = true;
                break;
            }
        }
    
        if ($isNull) {
            $this->load->view('user1/header',$data);
            $this->load->view('user1/formawal',$data);
        } else {
            redirect(base_url('profile/cProfile'));
        }
    }

    public function cProfile()
	{
        
        $data['title'] = "Profile";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tempat'] = $this->M_user1->tampil_data1(['id_user' => $this->session->userdata('id')])->result_array();
        $data['profiles'] = $this->M_user1->get_profiles_by_email();
        $this->load->view('user1/navigasi', $data);
        $this->load->view('user1/header', $data);
        $this->load->view('user1/profile', $data);
        $this->load->view('user1/footer', $data);		
	}
    public function tambah_aksi(){
        $name = $this->input->post('name');
        $address = $this->input->post('address');
        $phone = $this->input->post('phone');
        $major = $this->input->post('major');
        $description = $this->input->post('description');
        $data = array(
            'name' => $name,
            'address' => $address,
            'phone' => $phone,
            'major' => $major,
            'description' => $description,
        );
        $this->M_user1->tambah_profile($data);
        redirect('Profile');
    }
}