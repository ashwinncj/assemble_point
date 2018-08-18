<?php

class User extends CI_Model {

    public function user_type() {
        $this->load->database();
        $this->db->from('constructme_data');
        $this->db->where('user_email', $_SESSION['user_email']);
        $query = $this->db->get();
        foreach ($query->result() as $row) {
            $data = $row->user_business_type;
        }
        return $data;
    }

    public function get_uid() {
        $this->load->database();
        $this->db->from('constructme_data');
        $this->db->select('id');
        $this->db->where('user_email', $_SESSION['user_email']);
        $query = $this->db->get();
        foreach ($query->result() as $row) {
            $data = $row->id;
        }
        return $data;
    }

}
