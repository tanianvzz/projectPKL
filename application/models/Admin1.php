<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin1 extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get("user");
    }
    public function tampil_perusahaan()
    {
        return $this->db->get("tb_tempatpkl");
    }

    public function tampil_profil()
    {
        return $this->db->get("data_member");
    }
    public function hapus_pt($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function hapus_ass($id)
    {
      $this->db->delete('user', ['id'=> $id]);
    }

    public function hapus_pr($where, $table)
    {
        echo $where; 
        echo $table;
        $this->db->where($where);
        $this->db->delete($table);
    }
}