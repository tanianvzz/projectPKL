<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_company_profile() {
        $query = $this->db->get('company_profiles');
        return $query->row_array();
    }
}
