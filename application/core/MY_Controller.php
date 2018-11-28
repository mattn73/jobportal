<?php

class MY_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();


        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!$is_logged_in) {
            redirect(base_url() . 'login');
        }
    }

}
