<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller {

    /**
     * User controller for the system.
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    public function __construct() {
        parent::__construct();
        $this->load->library('user_agent');
        $this->load->model('Seeker_model', 'seeker');
        $this->load->model('Skill_model', 'skill');
        $this->load->library('form_validation');

    }

    public function view() {

        $user_id = 1;

        $data['seeker'] = $this->seeker->get($user_id)[0];
        $data['skills'] = $this->seeker->getSkill($user_id);
        $data['title'] = 'User Profile';
        //var_dump($data['skill']);die;
        $this->load->view('user/partial/header', $data);
        $this->load->view('user/profile_view', $data);
        $this->load->view('user/partial/footer');

    }



    public function edit($user_id) {

        if ($this->input->post() != null) {
            $result = $this->user->update($user_id, $this->input->post());
            redirect($this->agent->referrer() . '?status=' . $result);
        } else {
            $data['seeker'] = $this->seeker->get(1)[0];
            //var_dump($data['skill']);die;
            $this->load->view('user/partial/header');
            $this->load->view('user/profile_view', $data);
            $this->load->view('user/partial/footer');
        }
    }




    public function add_skill() {
		$user_id = $this->seeker->get(1)[0]->id;
		return $this->skill->add($user_id,$this->input->post());
        
    }

    public function do_upload()
    {

        $user_id = 1;
        $config['upload_path']          = 'uploads/';
        $config['allowed_types']        = 'word|doc|docx|pdf';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('cv'))
        {

            $data['seeker'] = $this->seeker->get(1)[0];
            $data['skills'] = $this->seeker->getSkill(1);
            $data['title'] = 'User Profile';
            $data['error'] =  $this->upload->display_errors();


            $this->load->view('user/partial/header', $data);
            $this->load->view('user/profile_view', $data);
            $this->load->view('user/partial/footer');
        }
        else
        {

            $filepath =  $config['upload_path'] . $this->upload->data()['file_name'];

            $results = $this->seeker->updateCvStatus($user_id, $filepath);

            $data['seeker'] = $this->seeker->get($user_id)[0];
            $data['skills'] = $this->seeker->getSkill($user_id);
            $data['title'] = 'User Profile';
            $data['upload_data'] =  $this->upload->data();


            $this->load->view('user/partial/header', $data);
            $this->load->view('user/profile_view', $data);
            $this->load->view('user/partial/footer');


        }
    }


}
