<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin1 extends CI_Model {

    public function tampil_data(){
        return $this->db->get("user");
    }
    public function tampil_perusahaan(){
        return $this->db->get("tb_tempatpkl");
    }
}