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
        $this->load->model('Log_model', 'logs');

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
            $this->checkAttempt('company');
            if (isset($_SESSION['ban']) && $_SESSION['ban'] == true) {

                $error = new stdClass();
                $error->class = 'alert-danger';
                $error->msg = 'You have been Ban';
                $data['error'] = $error;
                $arg['message'] = $error->msg;
                $arg['code'] = '403';
                $arg['type'] = 'Ban';
                $this->logs->insert($arg);
                $this->load->view('company/login_view', $data);

            } else {
                if ($result) {
                    redirect(base_url() . 'company/profile');
                } else {

                    $error = new stdClass();
                    $error->class = 'alert-danger';
                    $error->msg = 'Wrong username or password';
                    $data['error'] = $error;
                    $arg['message'] = $error->msg;
                    $arg['code'] = '403';
                    $arg['type'] = 'login';
                    $this->logs->insert($arg);
                    $this->load->view('company/login_view', $data);
                }
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
            $this->load->view('user/login_view', $data);
            $this->load->view('user/partial/footer');
        } else {
            $result = $this->login->validate('seeker', $this->input->post());
            $this->checkAttempt('seeker');
            if (isset($_SESSION['ban']) && $_SESSION['ban'] == true) {

                $error = new stdClass();
                $error->class = 'alert-danger';
                $error->msg = 'You have been Ban wait 1 minute';
                $data['error'] = $error;
                $data['title'] = 'Complete';
                $arg['message'] = $error->msg;
                $arg['code'] = '403';
                $arg['type'] = 'Ban';
                $this->logs->insert($arg);
                $this->load->view('user/partial/header', $data);
                $this->load->view('user/login_view', $data);
                $this->load->view('user/partial/footer');

            } else {
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
                    $arg['message'] = $error->msg;
                    $arg['code'] = '403';
                    $arg['type'] = 'login';
                    $this->logs->insert($arg);
                    $this->load->view('user/partial/header', $data);
                    $this->load->view('user/login_view', $data);
                    $this->load->view('user/partial/footer');
                }
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
                $arg['message'] = $error->msg;
                $arg['code'] = '403';
                $arg['type'] = 'login';
                $this->load->log->insert($arg);
                $this->load->view('login_view', $data);
            }
        }
    }

    function checkAttempt($type)
    {
        //cooldown time
        $attemptDelay = 60;

        //destroy session if exceeds time
        if (isset($_SESSION[$type . ' attempt_time']) && (time() - $_SESSION[$type . ' attempt_time'] > $attemptDelay)) {
            unset($_SESSION[$type . ' attempt'], $_SESSION['ban']);
        }

        if (isset($_SESSION[$type . ' attempt'])) {
            $_SESSION[$type . ' attempt'] = $_SESSION[$type . ' attempt'] - 1;
        } else {
            $_SESSION[$type . ' attempt'] = 3;
            $_SESSION[$type . ' attempt_time'] = time();
        }


        if (isset($_SESSION[$type . ' attempt']) && ($_SESSION[$type . ' attempt'] == 0)) {
            $_SESSION['ban'] = 'true';
        }
    }

    function getToken($id)
    {
        $token =  hash('ripemd160', $id);
        return $token;
    }

    function preventConcurrentLogins($db)
    {


        if (!empty($result['session_id'])) {

            $token = getToken(10);
            $_SESSION['token'] = $token;

            //update session in user table
            $stmt = $db->prepare('update users set session_id =:session_id where email =:email');
            $stmt->execute(array('session_id' => $token, ':email' => $_SESSION['login_user']));
        }
    }


}
