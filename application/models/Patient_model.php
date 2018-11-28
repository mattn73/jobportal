<?php

class Patient_model extends CI_Model {

    /**
     * Model for users
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    function __construct() {
        parent::__construct();
    }

    public function get($patient_id = 0) {
        // Check if the request is for a single user
        if ($patient_id) {
            $sql = "select * "
                    . "from user "
                    . "where user.role = 3 and user.status = 1 and user.id = ?";
            // Run the query
            $query = $this->db->query($sql, $patient_id);
        } else {
            $sql = "select * "
                    . "from user "
                    . "where status = 1 and role = 3";
            // Run the query
            $query = $this->db->query($sql);
        }
        // Let's check if there are any results
        if ($query->num_rows() > 0) {
            // If there is a user, then create session data
            $results = $query->result();
            return $results;
        }
        return false;
    }

    public function add($args) {
        extract($args);
        $data = array(
            'email' => strtolower($email),
            'password' => md5(123456),
            'firstname' => $firstname,
            'lastname' => $lastname,
            'title' => $title,
            'gender' => $gender,
            'phone' => $phone,
            'address' => $address,
            'birthdate' => $birthdate,
            'status' => 0,
            'role' => 3
        );
        $result = $this->db->insert('user', $data);
        $insert_id = $this->db->insert_id();
        $data = array(
            'user' => $insert_id,
        );
        $result = $result and $this->db->insert('user_profile', $data);
        return $result;
    }

    public function update($user_id, $args) {
        extract($args);
        $data = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'title' => $title,
            'gender' => $gender,
            'phone' => $phone,
            'address' => $address,
            'birthdate' => $birthdate,
            'email' => $email
        );
        $this->db->where('id', $user_id);
        return $this->db->update('user', $data);
    }

    public function delete($patient_id) {
        $sql = "update user set status = 0 where id = ?";
        $query = $this->db->query($sql, $patient_id);
        return $query;
    }

    

}
