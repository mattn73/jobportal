<?php

class Signup_model extends CI_Model {

    /**
     * Controller to sign up users
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    function __construct() {
        parent::__construct();
    }

    public function create_account($args) {
        extract($args);
        $data = array(
            'email' => strtolower($email),
            'firstname' => $firstname,
            'lastname' => $lastname,
            'password' => md5(trim($password)),
            'role' => 5,
            'hash' => sha1(strtolower($email))
        );
        $this->db->insert('user', $data);
        return $this->db->insert_id();
    }

}
