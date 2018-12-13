<?php

class MY_Controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Log_model', 'logs');


        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!$is_logged_in) {
            $type = $this->uri->segment(1);
            $arg['message'] = "Unauthorize Access";
            $arg['code'] = '403';
            $arg['type'] = 'Permission Denied';
            $this->logs->insert($arg);
            if ($type == 'company') {

                redirect(base_url() . 'login/' . $type);

            } else {
                redirect(base_url() . 'login/');
            }
        }
    }

}
