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

    public function updateCvStatus($user_id = 0, $path)
    {

        if ($user_id) {


            $this->db->set('cv', 1);
            $this->db->set('cv_path', $path);
            $this->db->where('id', $user_id);
            $this->db->update('seeker');
            return true;
        }
        return false;
    }

    public function getSkill($user_id = 0)
    {

        if ($user_id) {
            $sql = "select s.name, s.id "
                . "from seeker j "
                . "left join skill_seeker sk on j.id = sk.seeker "
                . "left join skill s on s.id  = sk.skill "
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

    public function update_seeker($user_id, $args){

        if ($user_id) {

            extract($args);


            $this->db->set('firstname', $firstname);
            $this->db->set('lastname', $lastname);
            $this->db->set('postal_address', $postal_address);
            $this->db->set('mobile', $mobile);
            $this->db->set('dob', $dob);
            $this->db->set('hqa', $hqa);
            $this->db->where('id', $user_id);
            $this->db->update('seeker');
            return true;
        }
        return false;

    }

    public function complete_seeker_account($user_id, $args) {
        extract($args);

        $this->db->set('mobile', $mobile);
        $this->db->set('dob', $dob);
        $this->db->set('hqa', $hqa);

        $this->db->where('id',$user_id );
        $this->db->update('seeker');
        return true;
    }


}
