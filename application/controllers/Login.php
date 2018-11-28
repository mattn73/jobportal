<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    /**
     * Controller to log in users and create the users' session.
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Login_model', 'login');
    }

    public function index() {
        $this->load->view('login_view');
    }

    public function external($hash = 0) {
        //action for login by token
        header("Access-Control-Allow-Origin: *");
        $result = $this->login->external($hash);
        echo json_encode($result);
    }

    public function validate() {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login_view', $this->data);
        } else {
            $result = $this->login->validate($this->input->post());
            if ($result) {
                redirect(base_url());
            } else {
                $error = new stdClass();
                $error->class = 'alert-danger';
                $error->msg = 'Wrong username or password';
                $data['error'] = $error;
                $this->load->view('login_view', $data);
            }
        }
    }

}
