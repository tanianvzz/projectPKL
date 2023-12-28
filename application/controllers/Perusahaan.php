<?php
class Perusahaan extends CI_Controller
{
    public function __construct() {
        parent::__construct();
    $this->load->model('M_user1');
    }
    public function index()
    {
        $data['title'] = "From";
        $data['company']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['company2'] = $this->M_user1->tampil_data2()->result_array();
		$this->load->view('user1/header',$data);
		$this->load->view('user1/profile',$data);
		$this->load->view('user1/footer', $data);
        
    }
    public function tambah_data()
    {   $data['title'] = "From";
        $data['company']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['company2'] = $this->M_user1->tampil_data2()->result_array();
        $name = $this->input->post('name');
        $description = $this->input->post('description');
        $address = $this->input->post('address');
        $phone = $this->input->post('phone');
        $major = $this->input->post('major');
        $email = $this->input->post('email');
                $data = array(
                    'name' => $name,
                    'description' => $description,
                    'address' => $address,
                    'phone' => $phone,
                    'major' => $major,
                    'email' => $email,
                );
                $this->M_user1->data_perusahaan($data, 'company_profiles');
                // var_dump('$data');
                // die();
                redirect('profile');
        }
       
        
}