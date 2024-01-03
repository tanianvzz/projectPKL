<?php

Class Multiple extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_user1');
    }

    public function index()
    {
        $data['title'] ="Approve Peserta";
        $data['user'] = $this->M_user1->tampil_datauser()->result_array();
        $id = 63; // Sesuaikan dengan struktur URL Anda
        $data['kode_area'] = $this->db->get_where('kode_area', ['id_user'=>$id])->result();
        $data['get_id'] = $this->uri->segment(2);
        $this->load->view('user1/header',$data);
        $this->load->view('user1/navigasi',$data);
        $this->load->view('user1/approve_peserta',$data);
        $this->load->view('user1/footer',$data);
        
    }
    public function persetujuan()
    {
        // Mengambil nilai $id dari URL menggunakan CodeIgniter
        $id = $this->uri->segment(2); // Sesuaikan dengan struktur URL Anda
        $a = $this->input->post('kode[]');
        $b = $this->input->post('status[]');

        $i = 1;
        foreach($b as $status)
        {
            if(!empty($status))
            {
                $where = [
                    'id_user'=>$id,
                    'kode'=>$a[$i]
                ];
                $data = ['status'=>$status];
                $this->M_user1->update('kode_area', $data, $where);
                $i++;
            }
        }

        redirect('Multiple'); 
    }
} 

?>