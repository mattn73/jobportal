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


    public function getTenJob()
    {

        $this->db->select('j.id,j.title,j.reference,j.close_date, j.description, c.name, c.address, c.email');
        $this->db->from("job j");
        $this->db->join('company c', 'j.company_id = c.id', 'left');
        $this->db->limit(10);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            // If there is a user, then create session data
            $results = $query->result();
            return $results;
        }
        return false;

    }

}
