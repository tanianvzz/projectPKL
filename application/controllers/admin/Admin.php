<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin1');
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->view('admin1/Awal');

    }
    public function ass()
    {
        $data['siswa'] = $this->Admin1->tampil_data()->result();
        $this->load->view('admin1/header');
        $this->load->view('admin1/D_siswa', $data);
        $this->load->view('admin1/footer');
    }
    public function pt()
    {
        $data['perusahaan'] = $this->Admin1->tampil_perusahaan()->result();
        // $data['perusahaan'] = $this->Admin1->tampil_perusahaan()->result();
        // var_dump($data['perusahaan']);
        // die();
        $this->load->view('admin1/header', $data);
        $this->load->view('admin1/D_perusahaan', $data);
        $this->load->view('admin1/footer', $data);
    }
    public function pr()
    {
        $data['profil'] = $this->Admin1->tampil_profil()->result();
        $this->load->view('admin1/header', $data);
        $this->load->view('admin1/D_profil', $data);
        $this->load->view('admin1/footer', $data);
    }
    public function hapus_pt($id_tempat)
    {
        $where = array('id_tempat' => $id_tempat);
        $this->Admin1->hapus_pt($where, 'tb_tempatpkl');
        redirect('admin/admin/pt');
    }
    public function hapus_ass($id)
    {
        $this->Admin1->hapus_ass($id);
        redirect('admin/admin/ass');
    } 
    public function hapus_pr($id)
    {   
        $where = array('id_user' => $id);
        $this->Admin1->hapus_pr($where, 'data_member');
        redirect('admin/admin/pr');
    }
    public function edit($id) {
        $data['user'] = $this->User_model->getUserById($id);
        $this->load->view('edit_user', $data);
    }
}