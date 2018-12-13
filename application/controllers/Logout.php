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

        $company_id = $this->session->userdata('company_id');
        $this->load->model('seeker_model', 'seeker');


        if( $company_id != null ){

            $this->seeker->removehashcompany($company_id);

        } else {
            $id = $this->session->userdata('seeker_id');
            $this->seeker->removehashseeker($id);

        }
        $this->session->sess_destroy();
        redirect(base_url() . 'login');
    }

}
