<?php

class Seeker_model extends CI_Model
{

    /**
     * Controller to sign up users
     * @author 404 <fortniter@gmail.com>
     */
    function __construct()
    {
        parent::__construct();
    }

    public function create_account($args)
    {
        extract($args);
        $data = array(
            'title' => $title,
            'email' => strtolower($email),
            'firstname' => $firstname,
            'lastname' => $lastname,
            'password' => md5(trim($password)),
            'address' => $address,
            'dob' => $dob,
            'postal_address' => $postal_address,
            'mobile' => $mobile,
            'hqa' => $hqa,
            'cv' => $cv,
        );
        $this->db->insert('seeker', $data);
        return $this->db->insert_id();
    }

    public function get($user_id = 0)
    {

        if ($user_id) {
            $sql = "select * "
                . "from seeker "
                . "where seeker.id = ?";
            // Run the query
            $query = $this->db->query($sql, $user_id);
       }
        // Let's check if there are any results
        if ($query->num_rows() > 0) {
            // If there is a user, then create session data
            $results = $query->result();
            return $results;
        }
        return false;
    }

    public function getSkill($user_id = 0)
    {

        if ($user_id) {
            $sql = "select s.name "
                . "from seeker j "
                ."left join skill_seeker sk on j.id = sk.seeker "
                ."left join skill s on s.id  = sk.skill "
                . "where j.id = ?";
            // Run the query
            $query = $this->db->query($sql, $user_id);
        }
        // Let's check if there are any results
        if ($query->num_rows() > 0) {
            // If there is a user, then create session data
            $results = $query->result();
            return $results;
        }
        return false;
    }


}
