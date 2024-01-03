<?php
class Post extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->library('upload');
        $this->load->model('M_user1');
    }

    public function index() {
        $data['title'] = "Post";
        $this->load->view('user1/navigasi');
        $this->load->view('user1/header', $data);
        $this->load->view('user1/post', $data);
        $this->load->view('user1/footer');
    }

    public function tambah_post() {
        $config['upload_path']   = './uploads/'; // Sesuaikan dengan path penyimpanan gambar
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size']      = 2048; // Ukuran maksimum file (dalam kilobyte)
        $config['max_width']     = 0;    // Lebar maksimum gambar
        $config['max_height']    = 0;    // Tinggi maksimum gambar
    
        $this->load->library('upload', $config); // Inisialisasi library Upload
    
        if (!$this->upload->do_upload('gambar')) {
            echo $this->upload->display_errors();
        } else {
            // Memproses data jika upload berhasil
            $nama_tempat = $this->input->post('nama_tempat');
            $alamat_tempat = $this->input->post('alamat_tempat');
            $jurusan = $this->input->post('jurusan');
            $deskripsi = $this->input->post('deskripsi');
            $no_telp = $this->input->post('no_telp');
    
            // Inisialisasi library upload untuk mendapatkan informasi file
            $this->upload->initialize($config);
    
            // Menggunakan $this->upload->data() untuk mendapatkan informasi file
            $gambar = $this->upload->data();
            $data = array(
                'nama_tempat' => $nama_tempat,
                'alamat_tempat' => $alamat_tempat,
                'Jurusan' => $jurusan,
                'deskripsi' => $deskripsi,
                'no_telp' => $no_telp,
                'gambar' => $gambar['file_name'], // Menggunakan $gambar['file_name'] untuk mendapatkan nama file
            );
    
            // Menambahkan data ke database
            $this->M_user1->tambah_data($data, 'tb_tempatpkl');
            redirect('Beranda/index');
        }
    }
    
}