<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Job_model', 'job');
        $this->load->library('form_validation');
        $this->data['is_logged_in'] = $this->session->userdata('is_logged_in');
        $this->data['name'] = $this->session->userdata('name');
    }


    public function view($job_id = 0)
    {

        $data['job'] = $this->job->get($job_id)[0];

        if ((int)$job_id != 0 && $data['job'] != null) {

            $data['job'] = $this->job->get($job_id)[0];
            $this->data['title'] = $data['job']->title;
            $this->load->view('user/partial/header', $this->data);
            $this->load->view('job/job_view', $data);
            $this->load->view('user/partial/footer');
        } else {

            $data['error'] = 'id Invalid';
            $this->data['title'] = "404";
            $this->load->view('user/partial/header', $this->data);
            $this->load->view('job/job_view', $data);
            $this->load->view('user/partial/footer');

        }
    }

    public function apply($job_id = 0)
    {

        if($this->data['is_logged_in'] == true){
            $user_id = $this->session->userdata('seeker_id');
            $result =  $this->job->apply($user_id,$job_id);

            $data['job'] = $this->job->get($job_id)[0];
            $this->data['title'] = $data['job']->title;
            $this->load->view('user/partial/header', $this->data);
            $this->load->view('job/application_view', $data);
            $this->load->view('user/partial/footer');

        }

        else {

            $data['error'] = 'id Invalid';
            $this->data['title'] = "404";
            $this->load->view('user/partial/header', $this->data);
            $this->load->view('job/job_view', $data);
            $this->load->view('user/partial/footer');

        }
    }


}