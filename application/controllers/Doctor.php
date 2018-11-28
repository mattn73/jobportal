<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

    /**
     * Doctor controller for the system.
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    function __construct() {
        parent::__construct();
        $this->load->library('user_agent');
        $this->load->model('User_model', 'user');
    }

}
