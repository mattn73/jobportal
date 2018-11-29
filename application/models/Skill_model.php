<?php

class Skill_model extends CI_Model
{

    /**
     * Model for users
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    function __construct()
    {
        parent::__construct();
    }

    public function add($user_id, $args)
    {
        extract($args);

        $this->db->distinct('id');
        $this->db->select('id');
        $this->db->like('name', $args['name']);
        $query = $this->db->get('skill');

        if ($query->num_rows() > 0) {
            $results = $query->result();


            $skill_id = $results[0]->id;
        } else {

            $skill_data = array(
                'name' => $args['name'],
            );

            $this->db->insert('skill', $skill_data);
            $skill_id = $this->db->insert_id();

        }


        $this->db->distinct('id');
        $this->db->select('id');
        $this->db->where('skill', $skill_id);
        $this->db->where('seeker', $user_id);
        $query = $this->db->get('skill_seeker');

        if ($query->num_rows() > 0) {

            return false;


        } else {

            $data_skill_user = array(
                'skill' => $skill_id,
                'seeker' => $user_id
            );

            $this->db->insert('skill_seeker', $data_skill_user);
            return true;

        }


        return false;
    }

    public function remove($user_id, $args)
    {
        if ($user_id) {

            $skill_id = $args['skill_id'];
            $this->db->where('seeker', $user_id);
            $this->db->where('skill', $skill_id);
            $this->db->delete('skill_seeker');



            return true;

        }

        return false;
    }

}
