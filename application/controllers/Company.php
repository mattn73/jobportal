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

    public function edit_profile() {
        $data['profile'] = $this->company->get_profile();
        $data['page'] = 'edit_profile';
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[company.email]|is_unique[company.contact_email]');
        $this->form_validation->set_rules('address', 'Address', 'required');
        if ($this->form_validation->run() == FALSE) {

            $this->load->view('template_view', $data);
        } else {
            $result = $this->company->update_profile($this->input->post());
            if ($result) {
                redirect(base_url() . 'company/profile');
            } else {
                $error = new stdClass();
                $error->class = 'alert-danger';
                $error->msg = 'Something wrong happened! please contact site admin';
                $data['error'] = $error;
                $this->load->view('template_view', $data);
            }
        }
    }

    public function applications() {
        
    }

    public function view_application() {
        
    }

    public function jobs() {
        $data['jobs'] = $this->company->get_jobs();
        $data['page'] = 'jobs';
        $this->load->view('template_view', $data);
    }

    public function add_job() {
        
    }

    public function search() {
        
    }

}
