<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    /**
     * Controller to sign up  users in the system.
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('is_logged_in')) {
            redirect(base_url());
        }
    }

    public function index() {
        $this->load->view('user/signup_view');
    }

    public function user() {
        $data['title'] = 'Register';
        $this->load->view('user/partial/header', $data);
        $this->load->view('user/signup_view');
        $this->load->view('user/partial/footer');
    }

    public function company() {
        $this->form_validation->set_rules('company_name', 'Company Name', 'required');
        $this->form_validation->set_rules('contact_email', 'Email', 'required|valid_email|is_unique[company.contact_email]');
        $this->form_validation->set_rules('password', 'Password', 'required|callback_is_password_strong');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('company/signup_view');
        } else {
            $this->load->model('Signup_model', 'signup');
            $result = $this->signup->create_account('company', $this->input->post());
            if ($result) {
                redirect(base_url() . 'login/company');
            } else {
                echo 'something went wrong';
            }
        }
    }

    public function seeker() {
        $this->form_validation->set_rules('title', 'Title', 'required|alpha_numeric_spaces');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[seeker.email]|valid_email');
        $this->form_validation->set_rules('firstname', 'Firstname', 'required|alpha_numeric_spaces');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required|alpha_numeric_spaces');
        $this->form_validation->set_rules('postal_address', 'Postal Address', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[25]|callback_is_password_strong');
        $this->form_validation->set_rules('conf_pass', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Register';
            $this->load->view('user/partial/header', $data);
            $this->load->view('user/signup_view');
            $this->load->view('user/partial/footer');
        } else {
            $this->load->model('Signup_model', 'signup');
            $result = $this->signup->create_seeker_account('seeker', $this->input->post());
            if ($result) {
                redirect(base_url() . 'login');
            } else {
                echo 'something went wrong';
            }
        }
    }

    public function complete() {
        $data['title'] = 'Complete';
        $this->load->view('user/partial/header', $data);
        $this->load->view('user/complete', $data);
        $this->load->view('user/partial/footer');
    }

    public function is_password_strong($password) {
        if ($password == '') {
            $this->form_validation->set_message('is_password_strong', 'The password field is required');
            return FALSE;
        } else if (preg_match('#[0-9]#', $password) && preg_match('#[a-zA-Z]#', $password)) {
            return TRUE;
        } else {
            $this->form_validation->set_message('is_password_strong', 'The password entered is not strong');
            return FALSE;
        }
    }

}
