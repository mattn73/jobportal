<?php

class Skill_model extends CI_Model {

/**
 * Model for users
 * @author Rimi <rimi.alfarwan@gmail.com>
 */
function __construct() {
	parent::__construct();
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
	
}
