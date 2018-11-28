<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Patient extends CI_Controller {

    /**
     * User controller for the system.
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    public function __construct() {
        parent::__construct();
        header("Access-Control-Allow-Origin: *");
        $this->load->library('user_agent');
        $this->load->model('Patient_model', 'patient');
        $this->load->library('form_validation');
    }

    public function view() {
        $data['patients'] = $this->patient->get();
        $this->load->view('include/header', $data);
        $this->load->view('include/sidebar');
        $this->load->view('patient/patient_list_view');
        $this->load->view('include/footer');
    }

    public function add() {
        // basic required field
        $this->form_validation->set_rules('firstname', 'Firstname', 'required');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('include/header');
            $this->load->view('include/sidebar');
            $this->load->view('patient/patient_add_view');
            $this->load->view('include/footer');
        } else {
            $result = $this->patient->add($this->input->post());
            redirect($this->agent->referrer() . '?status=' . $result);
        }
    }

    public function edit($patient_id) {

        if ($this->input->post() != null) {
            $result = $this->patient->update($patient_id, $this->input->post());
            redirect($this->agent->referrer() . '?status=' . $result);
        } else {
            $data['patient'] = $this->patient->get($patient_id)[0];
            $this->load->view('include/header', $data);
            $this->load->view('include/sidebar');
            $this->load->view('patient/patient_edit_view');
            $this->load->view('include/footer');
        }
    }

    public function delete($patient_id) {
        $result = $this->patient->delete($patient_id);
        if ($result) {
            redirect($this->agent->referrer());
        }
    }

    public function profile() {
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('patient/patient_profile_view');
        $this->load->view('include/footer');
    }

    public function edit_external($user_id) {
        $result = $this->update_user_external($user_id, $this->input->post());
        return $result;
    }
    public function add_external($user_id) {
        return $this->patient->add_user_details_external($user_id, $this->input->post());
    }

    public function update_user($user_id, $args) {
        return $this->user->update_user($user_id, $args);
    }

    public function update_user_external($user_id, $args) {
        echo $this->user->update_user_external($user_id, $args);
    }

    public function update_profile($user_id, $args) {
        return $this->user->update_profile($user_id, $args);
    }


    public function add_user_record($user_id) {

        return $this->user->add_user_record($user_id, $this->input->post());
    }

    public function get_patients() {

        echo json_encode($this->user->get_patients());
    }

    public function get_doctors() {

        echo json_encode($this->user->get_doctors());
    }

}
