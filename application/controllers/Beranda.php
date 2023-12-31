<?php
class Beranda extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
    $this->load->helper('fileupload');
    $this->load->model('M_user1');
	$this->load->library('session');
	$this->email = $this->session->userdata('email');
    }
	public function index()
	{
		$data['title'] = "Beranda";
		$data['company'] = $this->db->get_where('user', ['email' => $this->email])->row_array();        
        $data['tempat'] = $this->M_user1->tampil_data()->result_array();
		$this->load->view('user1/navigasi', $data);
		$this->load->view('user1/header', $data);
		$this->load->view('user1/Beranda', $data);
		$this->load->view('user1/footer', $data);
	}
	
	public function detail($id_tempat)
	{
		$data['title'] = 'Detail Tempat';
		$data['company'] = $this->db->get_where('user', ['email' => $this->email])->row_array();
		$data['tempat'] = $this->M_user1->detail($id_tempat);
		$this->load->view('user1/header', $data);
		$this->load->view('user1/detail', $data);
	}
	
	public function edit()
{
    $id = $this->uri->segment(4);
    $data['title'] = 'Edit Data';
    $data['tempat'] = $this->M_user1->edit_barang($id)->row_array();
    $this->load->view('user1/navigasi', $data);
    $this->load->view('user1/header', $data);
    $this->load->view('user1/edit_post', $data);
    $this->load->view('user1/footer', $data);
}

public function update()
{
    $id_tempat = $this->input->post('id_tempat'); // Pastikan sesuai dengan nama input di form
    $nama_tempat = $this->input->post('nama_tempat');
    $alamat_tempat = $this->input->post('alamat_tempat');
    $Jurusan = $this->input->post('Jurusan');

    $data = array(
        'nama_tempat' => $nama_tempat,
        'alamat_tempat' => $alamat_tempat,
        'Jurusan' => $Jurusan,
    );

    $where = array(
        'id_tempat' => $id_tempat
    );

    $this->M_user1->update_data('tb_tempatpkl', $data, $where);
    redirect('beranda');
}
public function hapus($id_tempat)
{

	$where = array('id_tempat' => $id_tempat);
	$this->M_user1->hapus_data($where,'tb_tempatpkl');
	redirect('profile');
}
	
}