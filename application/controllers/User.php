<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller {

    /**
     * User controller for the system.
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    public function __construct() {
        parent::__construct();
        header("Access-Control-Allow-Origin: *");
        $this->load->library('user_agent');
        $this->load->model('User_model', 'user');
        $this->load->model('Appointment_model', 'appointment');
        $this->load->library('form_validation');
    }

    public function view() {



        $data['users'] = $this->user->get();
        $this->load->view('include/header', $data);
        $this->load->view('include/sidebar');
        $this->load->view('user/user_list_view');
        $this->load->view('include/footer');
    }

    public function add() {
        // basic required field
        $this->form_validation->set_rules('firstname', 'Firstname', 'required');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('dateofbirth', 'Date of Birth', 'required|callback_compareDate');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('include/header');
            $this->load->view('include/sidebar');
            $this->load->view('user/user_add_view');
            $this->load->view('include/footer');
        } else {
            $result = $this->user->add($this->input->post());
            redirect($this->agent->referrer() . '?status=' . $result);
        }
    }

    public function edit($user_id) {

        if ($this->input->post() != null) {
            $result = $this->user->update($user_id, $this->input->post());
            redirect($this->agent->referrer() . '?status=' . $result);
        } else {
            $data['user'] = $this->user->get($user_id)[0];
            $this->load->view('include/header', $data);
            $this->load->view('include/sidebar');
            $this->load->view('user/user_edit_view');
            $this->load->view('include/footer');
        }
    }

    public function delete($user_id) {
        $result = $this->user->delete($user_id);
        if ($result) {
            redirect($this->agent->referrer());
        }
    }

    public function block($user_id) {
        $result = $this->user->block($user_id);
        if ($result) {
            redirect($this->agent->referrer());
        }
    }

    public function unblock($user_id) {
        $result = $this->user->unblock($user_id);
        if ($result) {
            redirect($this->agent->referrer());
        }
    }

    public function profile($user_id) {
        $result = $this->user->get($user_id);
        if ($result) {
            $data["user_personal_info"] = $result[0];
            $data["appointments"] = $this->appointment->get_user_appointments($user_id);
            $data["general_reports"] = $this->user->get_user_records($user_id);
            $data["user_readings"] = $this->user->get_user_readings($user_id);
//            print_r($data["general_reports"] );die;
            $this->load->view('include/header', $data);
            $this->load->view('include/sidebar');
            $this->load->view('user/user_profile_view');
            $this->load->view('include/footer');
        } else {
            show_404();
        }
    }

    public function edit_external($user_id) {
        $result = $this->update_user_external($user_id, $this->input->post());
        return $result;
    }

    public function add_external($user_id) {
        return $this->user->add_user_details_external($user_id, $this->input->post());
    }

    public function add_user($args) {
        return $this->user->add_user($args);
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

    public function delete_user($user_id) {
        return $this->user->delete_user($user_id);
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

    function compareDate() {

        $selected_date = strtotime($_POST['dateofbirth']);
        $today = strtotime(date('Y-m-d'));

        if ($selected_date <= $today)
            return True;
        else {
            $this->form_validation->set_message('compareDate', '%s should be less than today.');
            return False;
        }
    }

}
