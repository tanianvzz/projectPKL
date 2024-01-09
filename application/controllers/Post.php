<?php
class Post extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->library('upload');
        $this->load->helper('fileupload_helper');
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
    $nama_tempat = $this->input->post('nama_tempat');
    $alamat_tempat = $this->input->post('alamat_tempat');
    $jurusan = $this->input->post('jurusan');
    $deskripsi = $this->input->post('deskripsi');
    $no_telp = $this->input->post('no_telp');

    // Memeriksa apakah ada file gambar yang diunggah
    if (!empty($_FILES['gambar']['name'])) {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $_FILES['gambar']['name']; // Menggunakan nama asli file

        // Memanggil helper upload dan mengatur konfigurasi
        $this->upload->initialize($config);

        // Memeriksa apakah proses unggahan berhasil
        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data('file_name');
        } else {
            // Menampilkan pesan kesalahan jika unggahan gagal
            echo 'gambar gagal diupload!!!!';
            return;
        }
    } else {
        // Jika tidak ada file gambar diunggah
        $gambar = ''; // Atau sesuaikan dengan kebutuhan Anda
    }

    $data = array(
        'id_user' => $this->session->userdata('id'),
        'nama_tempat' => $nama_tempat,
        'alamat_tempat' => $alamat_tempat,
        'Jurusan' => $jurusan,
        'deskripsi' => $deskripsi,
        'no_telp' => $no_telp,
        'gambar' => $gambar,
    );

    // Memanggil model untuk menambahkan data
    $this->M_user1->tambah_data($data, 'tb_tempatpkl');
    // var_dump($data);
    // die();

    // Mengarahkan kembali ke halaman beranda
    redirect('Beranda/index');
}
    
}