<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    /**
     * Default controller for the system.
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('include/header');
        $this->load->view('site/home_view');
        $this->load->view('include/footer');
    }

    public function login() {
        $this->load->view('login');
    }

}
