<?php

class Login_model extends CI_Model {

    /**
     * Model to login users
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    function __construct() {
        parent::__construct();
    }

    public function validate($type,$args) {
        //extract user input into variables
        extract($args);
        $type = filter_var($type, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        $sql = "select * from $type where contact_email = ? and password = ?";
        // Run the query
        $query = $this->db->query($sql, array(strtolower(trim($email)), sha1(trim($password))));
        // Let's check if there are any results
        if ($query->num_rows() > 0) {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                'userid' => $row->id,
                'email' => $row->email,
                'is_logged_in' => true
            );
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    }

    public function external($hash) {
        $sql = "select user.*,user_profile.blood_group, user_profile.height, user_profile.weight, user_profile.is_patient , user_profile.is_veg from user "
                . "left join user_profile on user.id = user_profile.user "
                . "where user.hash = ?";
        $query = $this->db->query($sql, trim($hash));
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $result['status'] = true;
            $result['result']['data'] = $row;
            $sql = "update user set last_login_date = ? where hash = ?";
            // Run the query
            $query = $this->db->query($sql, array(date('Y-m-d H:i:s'), trim($hash)));
            return $result;
        }
        $result['status'] = false;
        $result['result']['data'] = [];
        return $result;
    }

}
