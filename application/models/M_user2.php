<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user2 extends CI_Model {

    public function SemuaData(){
        $email = $this->session->userdata('email');
        $this->db->select('user.*, data_member.*');
            $this->db->from('user');
            $this->db->join('data_member', 'user.id = data_member.id', 'left'); // Sesuaikan kriteria join berdasarkan hubungan antara kedua tabel
            $this->db->where('user.email', $email);
        
            $query = $this->db->get();
            $result=$query->row_array();
            return $result;
    }
    public function SemuaDataUser() {
        return $this->db->get('data_member');
    }
    public function get_user($user_id){
        return $this->db->get_where('user', array('id'=> $user_id));
     }
     public function get_user_email_by_id($user_id) {
        $query = $this->db->get_where('user', array('id' => $user_id));
        $user = $query->row_array();
        return isset($user['email']) ? $user['email'] : null;
    }

    public function data_member($data){
        $this->db->insert('data_member', $data);
    }
    public function SemuaDataPost(){
        return $this->db->get('tb_tempatpkl');
    }
    public function tampil_data()
    {
        return $this->db->get('tb_tempatpkl');
    }
    public function detail($id_tempat)
    {
       $result = $this->db->where('id_tempat',$id_tempat)->get('tb_tempatpkl');
       if($result->num_rows() > 0){
           return $result->result();
       }else{
           return false;
       }
    }
        public function pengajuan()
        {
            $email = $this->session->userdata('email');

            // Query untuk mengambil data pengguna dari kedua tabel berdasarkan email
            $this->db->select('user.*, data_member.*');
            $this->db->from('user');
            $this->db->join('data_member', 'user.id = data_member.id', 'left'); // Sesuaikan kriteria join berdasarkan hubungan antara kedua tabel
            $this->db->where('user.email', $email);
        
            $query = $this->db->get();
            $result=$query->row_array();


          return $result;
    
    }
    
}