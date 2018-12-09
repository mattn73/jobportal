<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    /**
     * Controller to log in users and create the users' session.
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Login_model', 'login');

        $is_logged_in = $this->session->userdata('is_logged_in');
        if ($is_logged_in) {
            $type = $this->uri->segment(1);
            if ($type == 'company')
                redirect(base_url() . 'company/profile');
            else
                redirect(base_url() . 'user/');
        }
    }

    public function company()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {

            $this->load->view('company/login_view');
        } else {
            $result = $this->login->validate('company', $this->input->post());
            if ($result) {
                redirect(base_url() . 'company/profile');
            } else {
                $error = new stdClass();
                $error->class = 'alert-danger';
                $error->msg = 'Wrong username or password';
                $data['error'] = $error;
                $this->load->view('company/login_view', $data);
            }
        }
    }

    public function seeker()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $error = new stdClass();
            $error->class = 'alert-danger';
            $error->msg = 'Wrong username or password';
            $data['title'] = 'Login';
            $this->load->view('user/partial/header', $data);
            $this->load->view('user/login_view' ,  $data);
            $this->load->view('user/partial/footer');
        } else {
            $result = $this->login->validate('seeker', $this->input->post());
            if ($result) {

                $has_hqa = $this->session->userdata('has_hqa');

                if ($has_hqa == 'no-fill') {


                    $data['title'] = 'Complete';
                    $this->load->view('user/partial/header', $data);
                    $this->load->view('user/complete', $data);
                    $this->load->view('user/partial/footer');

                } else {

                    redirect(base_url() . 'user/');

                }
            } else {
                $error = new stdClass();
                $error->class = 'alert-danger';
                $error->msg = 'Wrong username or password';
                $data['error'] = $error;
                $data['title'] = 'Complete';
                $this->load->view('user/partial/header', $data);
                $this->load->view('user/login_view', $data );
                $this->load->view('user/partial/footer');
            }
        }
    }

    public function user()
    {
        $this->load->view('user/login_view');
    }

    public function index()
    {
        $data['title'] = 'Login';
        $this->load->view('user/partial/header', $data);
        $this->load->view('user/login_view');
        $this->load->view('user/partial/footer');
    }


    public function company_validate()
    {

    }

    public function validate()
    {
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
