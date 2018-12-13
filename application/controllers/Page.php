<?php

/**
 * Created by PhpStorm.
 * User: MATT
 * Date: 14-Dec-18
 * Time: 1:59 AM
 */
class Page extends CI_Controller {

    function __construct() {
        parent::__construct();
    }




    public function forbidden(){

        $this->load->view('pages/403');
    }




}
