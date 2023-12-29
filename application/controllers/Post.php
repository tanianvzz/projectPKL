<?php
class Post extends CI_Controller
{
  public function __construct() {
        parent::__construct();
    $this->load->helper('fileupload_helper');
    $this->load->model('M_user1');
    }
    public function index()
    {
        $data['title'] = "Post";
        // $data['post'] = $this->M_user1->post()->result_array();
		$this->load->view('user1/navigasi');
		$this->load->view('user1/header',$data);
		$this->load->view('user1/post',$data);
		$this->load->view('user1/footer');
    }
    public function tambah_post()
    {   
        echo fileuploadCI('upload_file','uploads');
        if(!$this->upload->do_upload('gambar')){
            echo "Gagal";
        }else{
            $nama_tempat = $this->input->post('nama_tempat');
            $alamat_tempat = $this->input->post('alamat_tempat');
            $jurusan = $this->input->post('jurusan');
            $deskripsi = $this->input->post('deskripsi');
            $no_telp = $this->input->post('no_telp');
            $gambar = $this->upload->data['gambar']['nama'];
            $data = array(
                'nama_tempat' => $nama_tempat,
                'alamat_tempat' => $alamat_tempat,
                'Jurusan' => $jurusan,
                'deskripsi' => $deskripsi,
                'no_telp' => $no_telp,
                'gambar' => $gambar['file_name'],
            );
            }
            $this->M_user1->tambah_data($data,'tb_tempatpkl');
            redirect('Beranda/index');
        }

}