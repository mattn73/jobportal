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
        $this->load->view('signup_view');
    }

    public function mobile() {
        header("Access-Control-Allow-Origin: *");
        $this->load->model('Signup_model', 'signup');
        if (count($this->input->post()) > 0) {
            $result = $this->signup->create_account($this->input->post());
            $response = array();
            if ($result) {
                $response['status'] = true;
                $response['result']['user_id'] = $result;
                $response['result']['msg'] = 'create account is successful';
                echo json_encode($response);
            } else {
                $response['status'] = false;
                $response['result']['msg'] = 'create account is failed ';
                echo json_encode($response);
            }
        } else {
            show_404();
        }
    }

    public function create_account() {
        $this->form_validation->set_rules('firstname', 'Firstname', 'required');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('signup_view');
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
