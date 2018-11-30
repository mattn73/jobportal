<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends MY_Controller {

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
        $this->data['is_logged_in'] = $this->session->userdata('is_logged_in');
        $this->data['name'] = $this->session->userdata('name');
    }

    public function index() {

        $user_id = $this->session->userdata('seeker_id');
        $this->data['title'] = 'User Profile';
        $data['seeker'] = $this->seeker->get($user_id)[0];
        $data['skills'] = $this->seeker->getSkill($user_id);

        $this->load->view('user/partial/header', $this->data);
        $this->load->view('user/profile_view', $data);
        $this->load->view('user/partial/footer');
    }

    public function edit() {

        $user_id = $this->session->userdata('seeker_id');

        if ($this->input->post() != null) {
            $result = $this->user->update($user_id, $this->input->post());
            redirect($this->agent->referrer() . '?status=' . $result);
        } else {
            $data['seeker'] = $this->seeker->get($user_id)[0];
            $data['skills'] = $this->seeker->getSkill($user_id);
            $this->data['title'] = 'Edit User Profile';
            $this->load->view('user/partial/header', $this->data);
            $this->load->view('user/profile_edit', $data);
            $this->load->view('user/partial/footer');
        }
    }

    public function edit_save() {

        $user_id = $this->session->userdata('seeker_id');


        $this->form_validation->set_rules('firstname', 'Firstname', 'required|alpha_numeric_spaces');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required|alpha_numeric_spaces');
        $this->form_validation->set_rules('postal_address', 'Postal Address', 'required');
        $this->form_validation->set_rules('mobile', 'Contact Number:', 'required');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required|callback_dob_check');
        $this->form_validation->set_rules('hqa', 'Highest Qualification Achieve', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data['seeker'] = $this->seeker->get($user_id)[0];
            $data['skills'] = $this->seeker->getSkill($user_id);
            $this->data['title'] = 'Register';
            $this->load->view('user/partial/header', $this->data);
            $this->load->view('user/profile_edit', $data);
            $this->load->view('user/partial/footer');
        } else {

            $result = $this->seeker->update_seeker($user_id, $this->input->post());
            if ($result) {
                redirect(base_url() . 'user/');
            } else {
                echo 'something went wrong';
            }
        }
    }

    public function dob_check($str) {
        $datetime1 = date_create($str);
        $datetime2 = date_create(date('Y-m-d'));
        $interval = date_diff($datetime1, $datetime2);
        if ($str == '') {
            $this->form_validation->set_message('dob_check', 'The Date of Birth field is required.');
            return FALSE;
        } else if ($interval->y < 18) {
            $this->form_validation->set_message('dob_check', 'Your age should be greater than 18 years old');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function add_skill() {

        $user_id = $this->session->userdata('seeker_id');

        return $this->skill->add($user_id, $this->input->post());
    }

    public function remove_skill() {
        $user_id = $this->session->userdata('seeker_id');
        return $this->skill->remove($user_id, $this->input->post());
    }

    public function do_upload() {

        $user_id = $this->session->userdata('seeker_id');
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'word|doc|docx|pdf';
        $config['max_size'] = 1000;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('cv')) {

            $data['seeker'] = $this->seeker->get(1)[0];
            $data['skills'] = $this->seeker->getSkill(1);
            $this->data['title'] = 'User Profile';
            $data['error'] = $this->upload->display_errors();


            $this->load->view('user/partial/header', $this->data);
            $this->load->view('user/profile_view', $data);
            $this->load->view('user/partial/footer');
        } else {

            $filepath = $config['upload_path'] . $this->upload->data()['file_name'];

            $results = $this->seeker->updateCvStatus($user_id, $filepath);

            $data['seeker'] = $this->seeker->get($user_id)[0];
            $data['skills'] = $this->seeker->getSkill($user_id);
            $this->data['title'] = 'User Profile';
            $data['upload_data'] = $this->upload->data();


            $this->load->view('user/partial/header', $this->data);
            $this->load->view('user/profile_view', $data);
            $this->load->view('user/partial/footer');
        }
    }

    public function seeker_complete() {


        $user_id = $this->session->userdata('seeker_id');

        $this->form_validation->set_rules('mobile', 'Title', 'required');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required|callback_dob_check');
        $this->form_validation->set_rules('hqa', 'Highest Qualification Achieved', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->data['title'] = 'Complete';
            $this->load->view('user/partial/header', $this->data);
            $this->load->view('user/complete', $data);
            $this->load->view('user/partial/footer');
        } else {


            $result = $this->seeker->complete_seeker_account($user_id, $this->input->post());

            if ($result) {
                redirect(base_url() . 'user/');
            } else {
                echo 'something went wrong';
            }
        }
    }



    public function application(){

        $user_id = $this->session->userdata('seeker_id');

        $result = $this->seeker->get_application($user_id);
        var_dump($result);die;

    }
}
