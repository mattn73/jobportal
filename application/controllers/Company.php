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

    public function applications($job_id = 0) {
        if ($job_id) {
            $data['applications'] = $this->company->get_applications($job_id);
            $data['page'] = 'applications';
            $this->load->view('template_view', $data);
        } else {
            show_404();
        }
    }

    public function change_application_status($job_id = 0, $application_id = 0, $status = 'Viewed') {
        if ($job_id) {
            if ($this->company->change_application_status($application_id, $status))
                redirect(base_url() . 'company/applications/' . $job_id);
            else
                echo 'Something went wrong, please contact site admin.';
        } else {
            show_404();
        }
    }

    public function jobs() {
        $data['jobs'] = $this->company->get_jobs();
        $data['page'] = 'jobs';
        $this->load->view('template_view', $data);
    }

    public function add_job() {
        $data['page'] = 'add_job';
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('closing_date_s', 'Closing Date', 'required|callback_closedate_check');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() == FALSE) {

            $this->load->view('template_view', $data);
        } else {
            $result = $this->company->add_job($this->input->post());
            if ($result) {
                redirect(base_url() . 'company/jobs');
            } else {
                $error = new stdClass();
                $error->class = 'alert-danger';
                $error->msg = 'Something wrong happened! please contact site admin';
                $data['error'] = $error;
                $this->load->view('template_view', $data);
            }
        }
    }

    public function edit_job($job_id = 0) {
        $job = $this->company->get_job($job_id);
        if ($job) {
            $data['job'] = $job;
            $data['page'] = 'edit_job';
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('closing_date_s', 'Closing Date', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('template_view', $data);
            } else {
                $result = $this->company->update_job($this->input->post());
                if ($result) {
                    redirect(base_url() . 'company/jobs');
                } else {
                    $error = new stdClass();
                    $error->class = 'alert-danger';
                    $error->msg = 'Something wrong happened! please contact site admin';
                    $data['error'] = $error;
                    $this->load->view('template_view', $data);
                }
            }
        } else {
            show_404();
        }
    }

    public function delete_job($job_id = 0) {
        $result = $this->company->delete_job($job_id);
        if ($result) {
            redirect(base_url() . 'company/jobs');
        } else {
            show_404();
        }
    }

    public function candidates() {
        $data['page'] = 'search';
        $this->form_validation->set_rules('skill', 'Skill', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template_view', $data);
        } else {
            $result = $this->company->get_candidates($this->input->post('skill'));
            if ($result) {

                $data['candidates'] = $result;
                $this->load->view('template_view', $data);
            } else {
                $error = new stdClass();
                $error->class = 'alert-danger';
                $error->msg = 'Something wrong happened! please contact site admin';
                $data['error'] = $error;
                $this->load->view('template_view', $data);
            }
        }
    }

    public function closedate_check($str) {
        $time = strtotime($str);
        if ($str == '') {
            $this->form_validation->set_message('closedate_check', 'The closing date field is required.');
            return FALSE;
        } else if ($time <= time()) {
            $this->form_validation->set_message('closedate_check', 'The closing date should be greater than today');
            return FALSE;
        } else {
            return TRUE;
        }
    }

}
