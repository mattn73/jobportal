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

    public function update_seeker($user_id, $args)
    {

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

    public function complete_seeker_account($user_id, $args)
    {
        extract($args);

        $this->db->set('mobile', $mobile);
        $this->db->set('dob', $dob);
        $this->db->set('hqa', $hqa);

        $this->db->where('id', $user_id);
        $this->db->update('seeker');
        return true;
    }

    public function get_application($user_id)
    {

        if ($user_id) {
            $this->db->select('j.id,j.title,j.reference,j.close_date, j.description, c.name, c.address, c.email,a.status, a.client_status');
            $this->db->from("job j");
            $this->db->join('company c', 'j.company_id = c.id', 'left');
            $this->db->join('application a', 'j.id = a.job', 'left');
            $this->db->join('seeker s', 's.id = a.seeker', 'left');
            $this->db->where('s.id', $user_id);
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                $results = $query->result();
                return $results;
            }

        }
        return false;

    }

    public function get_notification($user_id)
    {


        $this->db->like('client_status', 'New');
        $this->db->where('seeker', $user_id);
        $this->db->from('application');
        return $this->db->count_all_results();


    }

    public function update_notification($job_id)
    {

        $user_id = $this->session->userdata('seeker_id');
        if ($user_id) {

            $this->db->select("id");
            $this->db->from("application a");
            $this->db->where('a.job', $job_id);
            $this->db->where('a.seeker', $user_id);
            $this->db->where('a.client_status', 'New');
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                $results = $query->result();
                $this->db->set('client_status', 'Viewed');
                $this->db->where('id', $results[0]->id);
                $this->db->update('application');
                return true;
            }


        }
        return false;


    }

    public function addHash($type){



    }


}
