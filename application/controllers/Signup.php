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
    }

    public function index() {
        $this->load->view('user/signup_view');
    }


    public function create_account() {
        $this->form_validation->set_rules('firstname', 'Firstname', 'required');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|email');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/signup_view');
        } else {
            $this->load->model('Signup_model', 'signup');
            $result = $this->signup->create_account($this->input->post());
            if ($result) {
                redirect(base_url() . 'login');
            } else {
                echo 'something went wrong';
            }
        }
    }

}
