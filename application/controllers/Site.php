<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    /**
     * Default controller for the system.
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    function __construct() {
        parent::__construct();
        $this->load->model('Job_model', 'job');
        $this->data['is_logged_in'] = $this->session->userdata('is_logged_in');
        $this->data['name'] = $this->session->userdata('name');
    }

    public function index() {



        $data['jobs'] = $this->job->getTenJob();
        $this->data['title'] = 'Job Portal';
        $this->load->view('user/partial/header', $this->data);
        $this->load->view('job/site', $data);
        $this->load->view('user/partial/footer');
    }

    public function job() {
        $this->load->view('login');
    }

}
