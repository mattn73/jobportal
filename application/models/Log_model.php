<?php

class Log_model extends CI_Model
{

    /**
     * Model for users
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    function __construct()
    {
        parent::__construct();
    }



    public function insert($arg)
    {
        $date =  new DateTime('now');
        $data = array(
            'type' => $arg['type'],
            'message' => $arg['message'],
            'code' => $arg['code'],
            'date' =>  $date->format('Y-m-d H:i:s'),
            'IP' => $this->getRealIpAddr()  ,

        );


        $this->db->insert('logs', $data);
        return $this->db->insert_id();


    }

    function getRealIpAddr()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
        {
            $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
        {
            $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
            $ip=$_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }







}