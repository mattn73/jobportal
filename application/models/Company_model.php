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

    public function update_profile($args) {
        $company_id = $this->session->userdata('company_id');
        extract($args);
        $data = array(
            'name' => $name,
            'email' => $email,
            'contact_name' => $contact_name,
            'address' => $address
        );
        $this->db->where('id', $company_id);
        return $this->db->update('company', $data);
    }

    function get_jobs() {
        $company_id = $this->session->userdata('company_id');
        $sql = "select * from job where company_id = ?";
        $query = $this->db->query($sql, $company_id);
        // Let's check if there are any results
        if ($query->num_rows() > 0) {
            // If there is a user, then create session data
            return $query->result();
        }
        return false;
    }

    function get_job($job_id) {
        $company_id = $this->session->userdata('company_id');
        $sql = "select * from job where company_id = ? and id = ?";
        $query = $this->db->query($sql, array($company_id, $job_id));
        // Let's check if there are any results
        if ($query->num_rows() > 0) {
            // If there is a user, then create session data
            return $query->result()[0];
        }
        return false;
    }

    public function add_job($args) {
        $company_id = $this->session->userdata('company_id');
        extract($args);
        $data = array(
            'title' => $title,
            'close_date' => $closing_date_s,
            'description' => $description,
            'company_id' => $company_id
        );
        $result = $this->db->insert('job', $data);
        $insert_id = $this->db->insert_id();
        return $result;
    }

    public function update_job($args) {
        $company_id = $this->session->userdata('company_id');
        extract($args);
        $data = array(
            'title' => $title,
            'close_date' => $closing_date_s,
            'description' => $description
        );
        $this->db->where('id', $job_id);
        $this->db->where('company_id', $company_id);
        return $this->db->update('job', $data);
    }

    public function delete_job($job_id) {
        $company_id = $this->session->userdata('company_id');
        $sql = "delete from job where company_id = ? and id = ?";
        $query = $this->db->query($sql, array($company_id, $job_id));
        return $query;
    }

}
