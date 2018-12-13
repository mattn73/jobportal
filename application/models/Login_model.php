<?php

class Login_model extends CI_Model
{

    /**
     * Model to login users
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    function __construct()
    {
        parent::__construct();
    }

    public function validate($type, $args)
    {
        //extract user input into variables
        extract($args);
        $type = filter_var($type, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

        if ($type == 'seeker') {

            $sql = "select * from $type where email = ? and password = ?";

        } else {

            $sql = "select * from $type where contact_email = ? and password = ?";

        }
        // Run the query
        $query = $this->db->query($sql, array(strtolower(trim($email)), sha1(trim($password))));
        // Let's check if there are any results
        if ($query->num_rows() > 0) {
            // If there is a user, then create session data
            $row = $query->row();
            $token =  hash('ripemd160',$row->id);
            if ($row->hash == $token) {
                return false;

            }

            if ($type == 'seeker') {

                $this->setConcurrencSeeker($row->id);

                $data = array(
                    $type . '_id' => $row->id,
                    'is_logged_in' => true,
                    'name' => $row->firstname,
                    'has_cv' => $row->cv,
                    'has_hqa' => $row->hqa,
                );

            } else {
                $this->setConcurrencCompany($row->id);
                $data = array(
                    $type . '_id' => $row->id,
                    'is_logged_in' => true,
                    'name' => $row->name,
                );

            }
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    }

    public function setConcurrencSeeker($id)
    {

        $token =  hash('ripemd160', $id);
        $this->db->set('hash', $token);
        $this->db->where('id', $id);
        $this->db->update('seeker');
        return true;



    }

    public function setConcurrencCompany($id)
    {

        $token =  hash('ripemd160', $id);
        $this->db->set('hash', $token);
        $this->db->where('id', $id);
        $this->db->update('company');
        return true;



    }






}
