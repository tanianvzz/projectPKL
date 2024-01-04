<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user2 extends CI_Model
{

    public function SemuaData()
    {
        $email = $this->session->userdata('email');
        $this->db->select('user.*, data_member.*');
        $this->db->from('user');
        $this->db->join('data_member', 'user.id = data_member.id_user', 'left'); // Sesuaikan kriteria join berdasarkan hubungan antara kedua tabel
        $this->db->where('user.email', $email);

        $query = $this->db->get();
        $result = $query->row_array();
        return $result;
    }
    public function SemuaDataUser()
    {
        $email = $this->session->userdata('email');
        $this->db->select('user.*, data_member.*');
        $this->db->from('user');
        $this->db->join('data_member', 'user.id = data_member.id_user', 'left'); // Sesuaikan kriteria join berdasarkan hubungan antara kedua tabel
        $this->db->where('user.email', $email);

        $query = $this->db->get();
        $result = $query->row_array();
        return $result;
    }

    public function data_member($data)
    {
         // Ambil id pengguna dari sesi
         $userId = $this->db->get_where('data_member', ['email' => $this->session->userdata('email')])->row_array()['id'];

         // Update data pengguna pada tabel 'user'
         $this->db->where('id', $userId);
         $this->db->update('data_member', $data);
 
         // Jika update berhasil, kembalikan true
         return $this->db->affected_rows() > 0;
    }
    public function tambahDataMember($data)
    {
        // Melakukan operasi insert ke dalam tabel data_member
        $this->db->insert('data_member', $data);

        // Mengembalikan ID terakhir yang dimasukkan
        return $this->db->insert_id();
    }
    public function tambahDataCompany($data)
    {
        // Melakukan operasi insert ke dalam tabel data_member
        $this->db->insert('company_profiles', $data);

        // Mengembalikan ID terakhir yang dimasukkan
        return $this->db->insert_id();
    }
    public function SemuaDataPost()
    {
        return $this->db->get('tb_tempatpkl');
    }
    public function tampil_data()
    {
        return $this->db->get('tb_tempatpkl');
    }
    public function detail($id_tempat)
    {
        $result = $this->db->where('id_tempat', $id_tempat)->get('tb_tempatpkl');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function pengajuan()
    {
        $email = $this->session->userdata('email');

        // Query untuk mengambil data pengguna dari kedua tabel berdasarkan email
        $this->db->select('user.*, data_member.*');
        $this->db->from('user');
        $this->db->join('data_member', 'user.id = data_member.id_user', 'left'); // Sesuaikan kriteria join berdasarkan hubungan antara kedua tabel
        $this->db->where('user.email', $email);

        $query = $this->db->get();
        $result = $query->row_array();


        return $result;

    }
    public function CekData()
    {
         $userData = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
         if ($userData) {
             $additionalData = $this->db->get_where('data_member', ['id_user' => $userData['id']])->row_array();
             return $additionalData;
         }
     }

     public function cekKolom()
     {

         $kolomYangDiperiksa = array( 'image', 'jenis_kelamin', 'nama_sekolah', 'alamat_sekolah', 'nis', 'tgl_lahir', 'jurusan', 'no_pembimbing');
         $userData = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
 
             if ($userData[$kolomYangDiperiksa]== null) {
                 
             }
        }
        
    }
