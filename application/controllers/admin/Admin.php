<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    

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
        $this->load->view('admin1/header');
        $this->load->view('admin1/D_perusahaan', $data);
        // $this->load->view('admin1/D_perusahaan');
        $this->load->view('admin1/footer');
    }
    public function pr()
    {
        $data['profil'] = $this->Admin1->tampil_profil()->result();
        $this->load->view('admin1/header');
        $this->load->view('admin1/D_profil', $data);
        $this->load->view('admin1/footer');
    }
}