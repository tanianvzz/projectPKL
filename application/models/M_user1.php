<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user1 extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function tampil_data()
    {

        $query = $this->db->get('tb_tempatpkl');
        return $query;
    }
    public function SemuaData()
    {
<<<<<<< HEAD
        return $this->db->get('company_profiles');
    }
    public function tampil_datauser()
    {
        return $this->db->get('user');
    }
    public function tambah_profile($data,$where)
    {
        $this->db->insert('company_profiles', $data); 
=======
        $email = $this->session->userdata('email');
        $this->db->select('user.*, company_profiles.*');
        $this->db->from('user');
        $this->db->join('company_profiles', 'user.id = company_profiles.id_user', 'left'); // Sesuaikan kriteria join berdasarkan hubungan antara kedua tabel
        $this->db->where('user.email', $email);

        $query = $this->db->get();
        $result = $query->row_array();
        return $result;
    }
    public function tampil_datauser($email)
    {
        $this->db->where('email',$email);
        $query = $this->db->get('user');
        return $query;
    }
    public function tambah_profile($data,$where)
    {
         // Ambil id pengguna dari sesi
         $userId = $this->db->get_where('company_profiles', ['email' => $this->session->userdata('email')])->row_array()['id'];

         // Update data pengguna pada tabel 'user'
         $this->db->where('id', $userId);
         $this->db->update('company_profiles', $data);
 
         // Jika update berhasil, kembalikan true
         return $this->db->affected_rows() > 0;
>>>>>>> 7899efd084701b2f56d0fbfb4bec67a05d0fe447
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
    public function tambah_data($data)
    {
       return $this->db->insert('tb_tempatpkl',$data);
    }

    public function edit_barang($id)
    {
       return $this->db->get_where('tb_tempatpkl', ['id_tempat'=> $id]);
    }

    public function update_data($table,$data,$where)
    {
        
            $this->db->where($where);
            $this->db->update($table,$data);
    }
    public function hapus_data($where,$table)
    { 
        $this->db->where($where);
        $this->db->delete($table);  
    }
    public function get_profiles_by_email() {
        $email = $this->session->userdata('email');
    
        $this->db->select('user.*, company_profiles.*');
        $this->db->from('user');
        $this->db->join('company_profiles', 'user.id = company_profiles.id_user', 'left');
<<<<<<< HEAD
        $this->db->where('user.email', $email); // Assuming $email is the email you want to match
  
=======
        $this->db->where('user.email', $email);

>>>>>>> 7899efd084701b2f56d0fbfb4bec67a05d0fe447
        $query = $this->db->get();
        $result = $query->row_array();
    
        return $result;
    }
    public function update($table, $data, $where)
    {
        $this->db->where($where)
                ->update($table, $data);
            return TRUE;
    }
    public function getUserDataByEmail($email)
{
    return $this->db->get_where('data_member', ['email' => $email])->row_array();
}
}