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
        $data['company'] = $this->M_user1->tampil_data2()->result_array();
		$this->load->view('user1/header',$data);
		$this->load->view('user1/formawal',$data);
		$this->load->view('user1/footer');
    }
    public function tambah_data()
    {   
    
            $name = $this->input->post('name');
            $description = $this->input->post('description');
            $address = $this->input->post('address');
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');
            $major = $this->input->post('major');
            $logo_path = $this->input->post('logo_path');
            $gambar = $this->upload->data();
            $data = array(
                'name' => $name,
                'description' => $description,
                'address' => $address,
                'phone' => $phone,
                'email' => $email,
                'major' => $major,
                'logo_path' => $logo_path,
            );
            $this->M_user1->data_perusahaan($data,'company_profiles');
            redirect('profile');
        }
        public function edit()
        {
            $id = $this->uri->segment(4);
            $data['title'] = 'Edit Data';
            $where = array('id' => $id);
            $data['company'] = $this->M_user1->edit_barang($where,'company_profiles')->result_array();
            $this->load->view('user1/navigasi',$data);
            $this->load->view('user1/header',$data);
            $this->load->view('user1/profile',$data);
            $this->load->view('user1/footer');

        }
        public function update()
        {
            $id          = $this->input->post('id');
            $name        = $this->input->post('name');
            $description = $this->input->post('description');
            $address     = $this->input->post('address');
            $phone       = $this->input->post('phone');
            $email       = $this->input->post('email');
            $major       = $this->input->post('major');
    
            $data = array(
                'name'          =>$name,            
                'description'   =>$description,            
                'address'       =>$address,            
                'phone'         =>$phone,            
                'major'         =>$major            
            );
            $where = array(
                'id' => $id
            );
            $this->M_user1->update_data('company_profiles',$data,$where);
            redirect('profile');
        }
        public function hapus($id)
        {
        
            $where = array('id' => $id);
            $this->M_user1->hapus_data($where,'company_profiles');
            redirect('perusahaan');
        }
        
}