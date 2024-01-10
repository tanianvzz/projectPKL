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
        return $this->db->get('tb_tempatpkl');
    }
    public function tampil_data2()
    {
        return $this->db->get('company_profiles');
    }
    public function tampil_datauser()
    {
        return $this->db->get('user');
    }
    public function tampil_data1($where, $table)
    {
        return $this->db->get_where($where, $table);
    }
    public function tambah_profile($data)
    {
        $this->db->insert('company_profiles', $data);
        
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
        $this->db->insert('tb_tempatpkl',$data);
    }
    public function edit_barang($where,$table)
    {
       return $this->db->get_where($table,$where);
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
        $this->db->join('company_profiles', 'user.id = company_profiles.user_id', 'left');
        $this->db->where('user.email', $email); // Assuming $email is the email you want to match
  
        $query = $this->db->get();
        $result = $query->row_array(); // Use result_array() if you expect multiple rows

        return $result;
    }
    public function update($table, $data, $where)
    {
        $this->db->where($where)
                ->update($table, $data);
            return TRUE;
    }
    
}