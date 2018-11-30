<?php

class Signup_model extends CI_Model {

    /**
     * Controller to sign up users
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    function __construct() {
        parent::__construct();
    }

    public function create_account($type, $args) {
        extract($args);
        $type = filter_var($type, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        $data = array(
            'name' => $company_name,
            'contact_email' => $contact_email,
            'password' => sha1(trim($password)),
        );
        $this->db->insert($type, $data);
        return $this->db->insert_id();
    }

    public function create_seeker_account($type, $args) {
        extract($args);
        $type = filter_var($type, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        $data = array(
            'title' => $title,
            'email' => $email,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'postal_address' => $postal_address,
            'password' => sha1(trim($password)),
            'cv' => 0,
            'hqa' => 'no-fill',
        );
        $this->db->insert($type, $data);
        return $this->db->insert_id();
    }





}
