<?php

class Company_model extends CI_Model {

    /**
     * 
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    function __construct() {
        parent::__construct();
    }

    function get_profile() {
        $company_id = $this->session->userdata('company_id');
        $sql = "select * from company where id = ?";
        $query = $this->db->query($sql, $company_id);
        // Let's check if there are any results
        if ($query->num_rows() > 0) {
            // If there is a user, then create session data
            $row = $query->row();
            return $row;
        }
        return false;
    }

}
