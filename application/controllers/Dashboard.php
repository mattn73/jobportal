<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    /**
     * Controller to log in users and create the users' session.
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('user_agent');
    }

    public function heart_diagnosis() {
        $this->form_validation->set_rules('age', 'Age', 'required');
        $this->form_validation->set_rules('trestbps', 'Resting Blood Pressure', 'required');
        $this->form_validation->set_rules('chol', 'Serum Cholestoral', 'required');
        $this->form_validation->set_rules('thalach', 'Maximum Heart Rate', 'required');
        $this->form_validation->set_rules('oldpeak', 'ST depression', 'required');
        $this->form_validation->set_rules('ca', 'Number of major vessels', 'required');
//        $this->form_validation->set_rules('date', 'Date', 'required|callback_compareDate');
//        $this->form_validation->set_rules('doctor', 'Doctor', 'required');
//        $this->form_validation->set_rules('condition', 'Condition', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('include/header');
            $this->load->view('include/sidebar');
            $this->load->view('dashboard/heart_diagnosis_view');
            $this->load->view('include/footer');
        } else {
//            $result = $this->appointment->add($this->input->post());
//            // Get cURL resource
            $params = $this->input->post();
//            print_r($params);die;
            $curl = curl_init();
// Set some options - we are passing in a useragent too here
            curl_setopt_array($curl, array(
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => 'http://54.255.223.213:5000/predict?test='.$params['age'].','.$params['gender'].','.$params['cp'].','.$params['trestbps'].','.$params['chol'].','.$params['fbs'].','.$params['restecg'].','.$params['thalach'].','.$params['exang'].','.$params['oldpeak'].','.$params['slope'].','.$params['ca'].','.$params['thal']
            ));
// Send the request & save response to $resp
            $resp = curl_exec($curl);
// Close request to clear up some resources
            curl_close($curl);
            $resp = json_decode($resp, true);
            redirect(base_url() . 'dashboard/heart-diagnosis?status=' . $resp['status'] . '&result=' . $resp['result']);
        }
    }
    
}
