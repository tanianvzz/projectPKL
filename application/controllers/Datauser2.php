<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datauser2 extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->model('M_user2');
		$this->load->helper('form');
		$this->load->helper('fileupload_helper');
		$this->load->library('form_validation');
	}
	
	public function index()
	{       
		$data['title'] = 'U Find';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['data'] = $this->M_user2->SemuaData()->result_array();
	
		// Set rules untuk form validation
		$this->form_validation->set_rules('name', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		// Tambahkan aturan validasi lainnya sesuai kebutuhan
	
		echo profilubah('upload_file', 'uploads');
	
		if ($this->form_validation->run() == false) {
			$this->load->view('user2/header', $data);
			$this->load->view('user2/isi_Data', $data);
			$this->load->view('user2/footer');
		} else {
			$gambar = '';
	
			if (!empty($_FILES['upload_file']['name'])) {
				if ($this->upload->do_upload('upload_file')) {
					$image = $this->upload->data();
					$gambar = $image['file_name'];
				} else {
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}
			}
	
			$data = array(
				'id' => $this->input->post('id'),
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'nama_sekolah' => $this->input->post('nama_sekolah'),
				'alamat_sekolah' => $this->input->post('alamat_sekolah'),
				'nis' => $this->input->post('nis'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'jurusan' => $this->input->post('jurusan'),
				'no_pembimbing' => $this->input->post('no_pembimbing'),
				'image' => $gambar,
			);
	
			$this->M_user2->data_member($data);
			redirect('Datauser2/myprofile');
		}
	}
	
	public function Myprofile()
	{
		// if (!$this->session->userdata('logged_in')) {
		// 	redirect('auth');
		// }
		$data['title'] = ' U Find';
        $data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->M_user2->SemuaData()->result_array();
			$this->load->view('user2/header',$data);
			$this->load->view('user2/navigasi',$data);
			$this->load->view('user2/user_profile2', $data);
			$this->load->view('user2/footer',$data);
		
	}
	public function update_profil2()
    {
		
    }

	public function find(){
		$data['title'] = ' U Find';
        $data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tempat'] = $this->M_user2->SemuaDataPost()->result_array();
		$this->load->view('user2/header',$data);
		$this->load->view('user2/navigasi',$data);
			$this->load->view('user2/user2_personal', $data);
			$this->load->view('user2/footer',$data);
	}
	
	public function logout(){
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message','<div class="alert aler-success" role="alert"> You have been logout</div>');
        redirect('auth');
    }   
} 		