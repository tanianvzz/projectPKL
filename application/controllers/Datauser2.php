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
    $data['data'] = $this->M_user2->SemuaData();
    
    $cekkolom = array('image', 'jenis_kelamin', 'nama_sekolah', 'alamat_sekolah', 'nis', 'tgl_lahir', 'jurusan', 'no_pembimbing');
    $userData = $this->db->get_where('data_member', ['email' => $this->session->userdata('email')])->row_array();
    $isNull = false;

    foreach ($cekkolom as $kolom) {
        if (!array_key_exists($kolom, $userData) || $userData[$kolom] === null) {
            $isNull = true;
            break;
        }
    }

    if ($isNull) {

        $this->load->view('user2/header', $data);
        $this->load->view('user2/isi_Data', $data);
        $this->load->view('user2/footer');
    } else {
        redirect('datauser2/myprofile');
    }
}

	
public function isi_data(){
	$gambar= 'default.jpg';
	$data = array(
		// 'id_user' => $this->input->post('id_user'),
		// 'name' => $this->input->post('name'),
		// 'email' => $this->input->post('email'),
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
	public function Myprofile()
	{
		// if (!$this->session->userdata('logged_in')) {
		// 	redirect('auth');
		// }
		$data['title'] = ' U Find';
        $data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->M_user2->SemuaData();
			$this->load->view('user2/header',$data);
			$this->load->view('user2/navigasi',$data);
			$this->load->view('user2/user_profile2', $data);
			$this->load->view('user2/footer',$data);
		
	}
	public function find(){
		$data['title'] = ' U Find';
        $data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tempat'] = $this->M_user2->SemuaDataPost()->result_array();
		$this->load->view('user2/header',$data);
		$this->load->view('user2/navigasi',$data);
			$this->load->view('user2/find_post', $data);
			$this->load->view('user2/footer',$data);
	}
	public function detail($id_tempat)
	{
		$data['title'] = ' Detail Tempat';
		$data['tempat'] = $this->M_user2->tampil_data()->result_array();
		$data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
       $data['tempat'] = $this->M_user2->detail($id_tempat);
        $this->load->view('user2/header',$data);
        $this->load->view('user2/detail',$data);
   }

   public function ajukan()
{
	
	$combinedData = $this->M_user2->pengajuan();
	$isSubmitted = $this->session->userdata('pengajuan_submitted');

    if ($combinedData && !$isSubmitted) {
        $data = [
            'name' => $combinedData['name'],
            'email' => $combinedData['email'],
            'jurusan' => $combinedData['jurusan'],
            'nama_sekolah' => $combinedData['nama_sekolah'],
            'alamat_sekolah' => $combinedData['alamat_sekolah'],
            'nis' => $combinedData['nis'],
            'no_pembimbing' => $combinedData['no_pembimbing'],
        ];

        $this->db->insert('pengajuan', $data);
      // Set session bahwa pengguna telah mengajukan
	  $this->session->set_userdata('pengajuan_submitted', true);
	  $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> pengajuan berhasil dilakukan </div>');
	  redirect('Datauser2/find');
  } else {
	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda sudah melakukan pengajuan </div>');
	redirect('Datauser2/find');
  }
}
	
	public function logout(){
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message','<div class="alert aler-success" role="alert"> You have been logout</div>');
        redirect('auth');
    }   
} 		