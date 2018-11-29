<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Company extends MY_Controller {

    /**
     * User controller for the system.
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('Company_model', 'company');
        $this->load->library('form_validation');
    }

    public function index() {
        
    }

    public function profile() {
        $data['profile'] = $this->company->get_profile();
        $data['page'] = 'profile';
        $this->load->view('template_view', $data);
    }

    public function applications() {
        
    }

    public function view_application() {
        
    }

    public function jobs() {
        
    }

    public function add_job() {
        
    }

    public function search() {
        
    }

}
