<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_company_profile() {
        $this->db->select('user.*, company_profiles.*');
        $this->db->from('user');
        $this->db->join('company_profiles', 'user.id = company_profiles.id_user', 'left');
        $this->db->where('user.id', 'company_profiles.id_user');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function save_additional_data($data) {
        $this->db->insert('company_profiles', $data);
    }
    public function check_additional_data_exist($user_id) {
        $this->db->where('id_user', $user_id);
        $query = $this->db->get('company_profiles');
        return $query->num_rows() > 0;
    }
 }