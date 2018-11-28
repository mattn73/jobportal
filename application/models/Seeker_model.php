<?php

class Seeker_model extends CI_Model {

    /**
     * Controller to sign up users
     * @author 404 <fortniter@gmail.com>
     */
    function __construct() {
        parent::__construct();
    }

    public function create_account($args) {
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

}
