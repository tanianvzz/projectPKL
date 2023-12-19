<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user1 extends CI_Model {

    public function SemuaData(){
       return $this->db->get('user');
    }
    public function get_user($user_id){
        return $this->db->get_where('user', array('id'=> $user_id));
     }

    
}