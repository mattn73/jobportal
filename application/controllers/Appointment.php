<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Appointment extends CI_Controller {

    /**
     *  controller for Appointment.
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    public function __construct() {
        parent::__construct();

        $this->load->library('user_agent');
        $this->load->library('form_validation');
        $this->load->model('Appointment_model', 'appointment');
    }

    public function view() {
        $data['appointments'] = $this->appointment->get_appointments();
        $this->load->view('include/header', $data);
        $this->load->view('include/sidebar');
        $this->load->view('appointment/appointment_list_view');
        $this->load->view('include/footer');
    }

    public function risk_assessment() {
        $data['risks'] = $this->appointment->risk_assessments();
        $this->load->view('include/header', $data);
        $this->load->view('include/sidebar');
        $this->load->view('appointment/risk_view');
        $this->load->view('include/footer');
    }

    public function create_risk_appt($user_id) {
        header("Access-Control-Allow-Origin: *");
        echo 1;
        //$result = $this->appointment->create_risk_appt($user_id);
    }

    public function add() {

        // basic required field
        $this->form_validation->set_rules('patient', 'Patient', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required|callback_compareDate');
        $this->form_validation->set_rules('doctor', 'Doctor', 'required');
        $this->form_validation->set_rules('condition', 'Condition', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('include/header');
            $this->load->view('include/sidebar');
            $this->load->view('appointment/appointment_add_view');
            $this->load->view('include/footer');
        } else {
            $result = $this->appointment->add($this->input->post());
            redirect($this->agent->referrer() . '?status=' . $result);
        }
    }

//    public function edit($appointment_id) {
    //        if ($this->input->post() != null) {
    //            $result = $this->update_appointment($appointment_id, $this->input->post());
    //            redirect($this->agent->referrer() . '?status=' . $result);
    //            //redirect(base_url() . 'patient/edit/' . $user_id . '?status=' . $result);
    //        } else {
    //            $data['appointment'] = $this->appointment->get_appointment($appointment_id);
    //            $this->load->view('include/header', $data);
    //            $this->load->view('include/sidebar');
    //            $this->load->view('appointment/appointment_edit_view');
    //            $this->load->view('include/footer');
    //        }
    //    }

    public function delete($appointment_id) {
        $result = $this->delete_appointment($appointment_id);
        if ($result) {
            redirect($this->agent->referrer());
        }
    }

    public function deactivate($appointment_id) {
        $result = $this->deactivate_appointment($appointment_id);
        if ($result) {
            redirect($this->agent->referrer());
        }
    }

    public function delete_appointment($appointment_id) {
        return $this->appointment->delete_appointment($appointment_id);
    }

    public function deactivate_appointment($appointment_id) {
        return $this->appointment->deactivate_appointment($appointment_id);
    }

    public function schedule() {
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('appointment/schedule_view');
        $this->load->view('include/footer');
    }

    public function get_schedule() {
        echo json_encode($this->appointment->get_schedule_by_doctor());
    }

    public function get_available_doctors() {
        $args = $this->input->post();
        echo json_encode($this->appointment->get_available_doctors($args));
    }

    public function get_appointment_external($user_id) {

        header("Access-Control-Allow-Origin: *");
        $result = $this->appointment->get_user_appointments($user_id);
        echo json_encode($result);
    }

    public function update_appointment_external($appointment_id) {

        header("Access-Control-Allow-Origin: *");
        $result = $this->appointment->update_appointment_external($appointment_id);
    }

    function compareDate() {

        $selected_date = strtotime($_POST['date']);
        $today = strtotime(date('Y-m-d'));

        if ($selected_date >= $today)
            return True;
        else {
            $this->form_validation->set_message('compareDate', '%s should be greater than or equal to today.');
            return False;
        }
    }

    public function clean() {
        if ($this->appointment->clean()) {
            echo 'Outdated appointments are successfully cleared';
        }
    }

}
