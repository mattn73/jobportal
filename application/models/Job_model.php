<?php

class Job_model extends CI_Model
{

    /**
     * Model for users
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    function __construct()
    {
        parent::__construct();
    }


    public function get_last_Job()
    {

        $today = date('Y-m-d', strtotime('today'));

        $this->db->select('j.id,j.title,j.reference,j.close_date, j.description, c.name, c.address, c.email');
        $this->db->from("job j");
        $this->db->join('company c', 'j.company_id = c.id', 'left');
        $this->db->where('j.close_date >=', $today);
        $this->db->limit(10);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            // If there is a user, then create session data
            $results = $query->result();
            return $results;
        }
        return false;

    }

    public function get($id)
    {
        if ($id) {
            $this->db->select('j.id,j.title,j.reference,j.close_date, j.description, c.name, c.address, c.email');
            $this->db->from("job j");
            $this->db->join('company c', 'j.company_id = c.id', 'left');
            $this->db->where('j.id', $id);
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                $results = $query->result();
                return $results;
            }

        }
        return false;

    }

    public function apply($user_id, $job_id)
    {
        if ($user_id) {

            $data = array(
                'seeker' => $user_id,
                'job' => $job_id,

            );
            $this->db->insert('application', $data);
            return $this->db->insert_id();

        }
        return false;

    }

    public function getJob()
    {

        $today = date('Y-m-d', strtotime('today'));

        $this->db->select('j.id,j.title,j.reference,j.close_date, j.description, c.name, c.address, c.email');
        $this->db->from("job j");
        $this->db->join('company c', 'j.company_id = c.id', 'left');
        $this->db->where('j.close_date >=', $today);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            // If there is a user, then create session data
            $results = $query->result();
            return $results;
        }
        return false;

    }





}
