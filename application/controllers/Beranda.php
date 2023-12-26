<?php
class Beranda extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
    $this->load->helper('fileupload');
    $this->load->model('M_user1');
    }

	public function index()
	{
		$data['title'] = "Beranda";
        $data['tempat'] = $this->M_user1->tampil_data()->result_array();
		$this->load->view('user1/navigasi',$data);
		$this->load->view('user1/header',$data);
		$this->load->view('user1/Beranda',$data);
		$this->load->view('user1/footer');
	}
	public function detail($id_tempat)
	{
		$data['title'] = ' Detail Tempat';
		$data['tempat'] = $this->M_user1->tampil_data()->result_array();
       $data['tempat'] = $this->M_user1->detail($id_tempat);
        $this->load->view('user1/header',$data);
        $this->load->view('user1/detail',$data);
   }

}
