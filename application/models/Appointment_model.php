<?php

class Appointment_model extends CI_Model {

    /**
     * Model for appointments
     * @author Rimi <rimi.alfarwan@gmail.com>
     */
    function __construct() {
        parent::__construct();
    }

    function add($args) {
        $sql = "INSERT INTO appointment (`date`,`from`,`to`,`doctor`,`patient`,`condition`,`note`) values (?,?,?,?,?,?,?)";
        return $this->db->query($sql, array($args['date'], $args['from'], $args['to'], $args['doctor'], $args['patient_id'], $args['condition'], $args['remarks']));
    }

    function get_appointments() {
        $login_role = $this->session->userdata('role');
        if ($login_role == 1) {
            $sql = "select patient.id patient_id, concat(patient.firstname,' ',patient.lastname) patient_name,concat(doctor.firstname,' ',doctor.lastname) doctor_name,appointment.* "
                    . "from (select * from user where role IN (3,4))patient,appointment,(select * from user where role = 2) doctor "
                    . "where patient.id  = appointment.patient and doctor.id =  appointment.doctor and appointment.status = 1";
            // Run the query
            $query = $this->db->query($sql);
        } else {
            $sql = "select patient.id patient_id, concat(patient.firstname,' ',patient.lastname) patient_name,concat(doctor.firstname,' ',doctor.lastname) doctor_name,appointment.* "
                    . "from (select * from user where role IN (3,4))patient,appointment,(select * from user where role = 2) doctor "
                    . "where patient.id  = appointment.patient and doctor.id =  appointment.doctor and appointment.status = 1 and doctor.id = ?";
            // Run the query
            $query = $this->db->query($sql, $this->session->userdata('userid'));
        }


        // Let's check if there are any results
        if ($query->num_rows() > 0) {
            // If there is a user, then create session data
            $results = $query->result();
            return $results;
        }
        return false;
    }

    function get_user_appointments($user_id) {
        $sql = "select * from appointment,user where user.id = appointment.doctor and  appointment.patient = ?";
        // Run the query
        $query = $this->db->query($sql, $user_id);

        // Let's check if there are any results
        if ($query->num_rows() > 0) {
            // If there is a user, then create session data
            $results = $query->result();
            return $results;
        }
        return false;
    }

    public function delete_appointment($appointment_id) {
        $sql = "delete from appointment where id = ?";
        $query = $this->db->query($sql, $appointment_id);
        return $query;
    }

    public function deactivate_appointment($appointment_id) {
        $sql = "update appointment set status = 0 where id = ?";
        $query = $this->db->query($sql, $appointment_id);
        return $query;
    }

    function get_schedule_by_doctor() {
        $login_role = $this->session->userdata('role');
        if ($login_role == 1) {
            $sql = "select patient.id patient_id, concat(patient.firstname,' ',patient.lastname) patient_name,appointment.* "
                    . "from (select * from user where role IN (3,4))patient,appointment "
                    . "where patient.id  = appointment.patient";
            // Run the query
            $query = $this->db->query($sql);
        } else {
            $sql = "select patient.id patient_id, concat(patient.firstname,' ',patient.lastname) patient_name,appointment.* "
                    . "from (select * from user where role IN (3,4))patient,appointment "
                    . "where patient.id  = appointment.patient and appointment.doctor = ? ";
            // Run the query
            $query = $this->db->query($sql, $this->session->userdata('userid'));
        }


        // Let's check if there are any results
        if ($query->num_rows() > 0) {
            // If there is a user, then create session data
            $results = $query->result();
            $events = [];
            $i = 0;
            foreach ($results as $result) {
                $date_from = date(DATE_ISO8601, strtotime($result->date . ' ' . $result->from));
                $date_to = date(DATE_ISO8601, strtotime($result->date . ' ' . $result->to));
                $events[$i]['title'] = $result->patient_name;
                $events[$i]['start'] = $date_from;
                $events[$i]['end'] = $date_to;
                $i++;
            }
            return $events;
        }
        return false;
    }

    function get_available_doctors($args) {
        $sql = "SELECT id doctor_id, CONCAT(title,'. ',lastname) doctor_name
FROM `user`
where role = 2 and id not in (select doctor from appointment where date = ? and `from` >= ?  and `to` <= ?)";
        $query = $this->db->query($sql, array($args['date'], $args['from'], $args['to']));
        if ($query->num_rows() > 0) {
            // If there is a user, then create session data
            $results = $query->result();
            $doctors = [];
            $i = 0;
            foreach ($results as $result) {
                $doctors[$i]['doctor_id'] = $result->doctor_id;
                $doctors[$i]['doctor_name'] = $result->doctor_name;
                $i++;
            }
            return $doctors;
        }
        return false;
    }

    function update_appointment_external($appointment_id) {
        $sql = "update appointment set status = 0 where appointment_id = ?";
        $query = $this->db->query($sql, $appointment_id);
        return $query;
    }

    function clean() {
        return true;
    }

    function risk_assessments() {
        $sql = "select * from risk_assessment,user  where user.id  = risk_assessment.user_id and risk_assessment.status = 1";
        // Run the query
        $query = $this->db->query($sql);

        // Let's check if there are any results
        if ($query->num_rows() > 0) {
            // If there is a user, then create session data
            $results = $query->result();
            return $results;
        }
        return false;
    }

}
