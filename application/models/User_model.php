<?php

class User_model extends CI_Model {

    /**
     * Model for users
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    function __construct() {
        parent::__construct();
    }

    public function get($user_id = 0) {
        $args = $this->input->post();
        // Check if the request is for a single user
        $login_role = $this->session->userdata('role');
        if ($user_id) {
            $sql = "select * "
                    . "from user "
                    . "where user.id = ?";
            // Run the query
            $query = $this->db->query($sql, $user_id);
        } else {

            if ($login_role == 1) {
                // when logged in as an admin
                $sql = "select * "
                        . "from user,role where user.role = role.role_id ";
                if ($args != null) {
                    if ($args['status'] != -1) {
                        $sql .= "and user.status = " . $this->db->escape($args["status"]);
                    }
                    if ($args['role'] != 0) {
                        $sql .= "and user.role = " . $this->db->escape($args["role"]);
                    }
                }
            } else {
                // when logged in as a doctor
                $sql = "select * "
                        . "from user,role "
                        . "where user.role = role.role_id and  user.status = 1 and user.role = 3";
            }
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
            'role' => $role
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
            'email' => $email,
            'role' => $role
        );
        $this->db->where('id', $user_id);
        return $this->db->update('user', $data);
    }

    public function delete($user_id) {
        $sql = "delete from user where id = ?";
        $query = $this->db->query($sql, $user_id);
        return $query;
    }

    public function block($user_id) {
        $sql = "update user set status = 0 where id = ?";
        $query = $this->db->query($sql, $user_id);
        return $query;
    }

    public function unblock($user_id) {
        $sql = "update user set status = 1 where id = ?";
        $query = $this->db->query($sql, $user_id);
        return $query;
    }

    public function add_user_record($user_id, $args) {
        extract($args);
        $data = array(
            'user' => trim($user_id),
            'blood_pressure' => $blood_pressure,
            'blood_sugar' => $blood_sugar,
            'cholesterol' => $cholesterol,
            'weight' => $weight,
            'pulse' => $pulse
        );
        $result = $this->db->insert('user_record', $data);
        echo $result;
    }

    public function update_user_external($user_id, $args) {
        extract($args);
        $data_user = array(
            'title' => $title,
            'gender' => $gender,
            'phone' => $phone,
            'address' => $address,
            'birthdate' => $birthdate
        );
        $data_user_profile = array(
            'blood_group' => $blood_group,
            'height' => $height,
            'weight' => $weight,
            'is_patient' => $is_patient,
            'is_veg' => $is_veg
        );
        $this->db->where('id', $user_id);
        if ($this->db->update('user', $data_user)) {
            $this->db->where('user', $user_id);
            return $this->db->update('user_profile', $data_user_profile);
        }
        return false;
    }

    public function add_user_details_external($user_id, $args) {
        extract($args);
        $data_user = array(
            'title' => $title,
            'gender' => $gender,
            'phone' => $phone,
            'address' => $address,
            'birthdate' => $birthdate
        );
        $data_user_profile = array(
            'user' => trim($user_id),
            'blood_group' => $blood_group,
            'height' => $height,
            'weight' => $weight,
            'is_patient' => $is_patient,
            'is_veg' => $is_veg
        );
        $this->db->where('id', $user_id);
        if ($this->db->update('user', $data_user)) {
            $this->db->where('user', $user_id);
            return $this->db->insert('user_profile', $data_user_profile);
        }
        return false;
    }

    public function update_profile($user_id, $args) {
        extract($args);
        $data = array(
            'blood_group' => $blood_group,
            'height' => $height,
            'weight' => $weight,
            'is_patient' => $is_patient
        );
        $this->db->where('user', $user_id);
        return $this->db->update('user_profile', $data);
    }

    public function update_profile_external($user_id, $args) {
        extract($args);
        $data = array(
            'blood_group' => $blood_group,
            'height' => $height,
            'weight' => $weight,
            'is_patient' => $is_patient
        );
        $this->db->where('user', $user_id);
        return $this->db->update('user_profile', $data);
    }

    public function get_patients() {
        $sql = "select id, firstname, lastname from user where status = 1 and role IN (3,4)";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $results = $query->result();
            $json = [];
            $i = 0;
            foreach ($results as $result) {

                $json[$i]['id'] = $result->id;
                $json[$i]['value'] = $result->firstname . ' ' . $result->lastname;
                $i++;
            }
            return $json;
        }
        return false;
    }

    public function get_doctors() {
        $sql = "select id, firstname, lastname from user where status = 1 and role=2";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $results = $query->result();
            $json = [];
            $i = 0;
            foreach ($results as $result) {

                $json[$i]['id'] = $result->id;
                $json[$i]['value'] = $result->firstname . ' ' . $result->lastname;
                $i++;
            }
            return $json;
        }
        return false;
    }

    public function get_user_records($user_id) {

        $sql = "select * from user_record where user = ? order by date desc limit 1";
        $query = $this->db->query($sql, $user_id);
        if ($query->num_rows() > 0) {
            return $query->result()[0];
        }
        return false;
    }

    public function get_user_readings($user_id) {

        $sql = "select * from user_record where user = ? order by date desc";
        $query = $this->db->query($sql, $user_id);
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return false;
    }



}
