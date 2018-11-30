<?php

class USER_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();


        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!$is_logged_in) {
            $type = $this->uri->segment(1);
            if ($type == 'company')
                redirect(base_url() . 'login/' . $type);
            else
                redirect(base_url() . 'login/');
        }
    }

}
