<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

    /**
     * Controller to logout users
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->session->sess_destroy();
        redirect(base_url() . 'login');
    }

}
