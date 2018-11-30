<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Company_model', 'company');
        $this->load->library('form_validation');
    }

}