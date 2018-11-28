<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends MY_Controller {

    /**
     * Default controller for the system.
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('include/footer');
    }

    public function login() {
        $this->load->view('login');
    }

}
