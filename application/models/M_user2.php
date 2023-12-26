<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user2 extends CI_Model {

    public function SemuaData(){
        return $this->db->get('user');
    }
    public function SemuaDataPost(){
        return $this->db->get('tb_tempatpkl');
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
    
}