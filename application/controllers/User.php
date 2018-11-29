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



        $data['seeker'] = $this->seeker->get(1)[0];
        $data['skills'] = $this->seeker->getSkill(1);
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

    public function delete($user_id) {
        $result = $this->user->delete($user_id);
        if ($result) {
            redirect($this->agent->referrer());
        }
    }

    public function block($user_id) {
        $result = $this->user->block($user_id);
        if ($result) {
            redirect($this->agent->referrer());
        }
    }

    public function unblock($user_id) {
        $result = $this->user->unblock($user_id);
        if ($result) {
            redirect($this->agent->referrer());
        }
    }

    public function profile($user_id) {
        $result = $this->user->get($user_id);
        if ($result) {
            $data["user_personal_info"] = $result[0];
            $data["appointments"] = $this->appointment->get_user_appointments($user_id);
            $data["general_reports"] = $this->user->get_user_records($user_id);
            $data["user_readings"] = $this->user->get_user_readings($user_id);
//            print_r($data["general_reports"] );die;
            $this->load->view('include/header', $data);
            $this->load->view('include/sidebar');
            $this->load->view('user/user_profile_view');
            $this->load->view('include/footer');
        } else {
            show_404();
        }
    }


    public function add_skill() {
		$user_id = $this->seeker->get(1)[0]->id;
		return $this->skill->add($user_id,$this->input->post());
        
    }


}
