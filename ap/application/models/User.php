<?php

class User extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_uid() {
        return $_SESSION['uid'];
    }

    public function get_users() {
        $this->db->from('user_meta');
        $this->db->select('id');
        $this->db->select('user_full_name');
        $this->db->order_by('user_full_name', 'ASC');
        $query = $this->db->get();
        $count = 0;
        foreach ($query->result() as $row) {
            $data[$count]['user_name'] = $row->user_full_name;
            $data[$count]['uid'] = $row->id;
            $count++;
        }
        return $data;
    }

    public function get_access_level($pid) {
        $uid = $this->get_uid();
        $this->db->from('access_control');
        $this->db->select('access_level');
        $this->db->where('uid', $uid);
        $this->db->where('pid', $pid);
        $query = $this->db->get();
        $count = 0;
        foreach ($query->result() as $row) {
            $count++;
            $data = $row->access_level;
        }
        if ($count > 0) {

            return $data;
        } else {
            return FALSE;
        }
    }

    public function set_user_info($user) {
        $this->db->from('user_meta');
        $this->db->where('user_email', $user);
        $this->db->select('id, user_full_name, user_organization, profile_pic');
        $this->db->limit(1);
        $query = $this->db->get();
        $count = 0;
        foreach ($query->result() as $row) {
            $_SESSION['user_email'] = $user;
            $_SESSION['uid'] = $row->id;
            $_SESSION['user_full_name'] = $row->user_full_name;
            $_SESSION['user_organization'] = $row->user_organization;
            $row->profile_pic == '' ? $_SESSION['profile_pic'] = 'http://localhost/assemblepoint/ap/assets/img/anonymous.jpg' : $_SESSION['profile_pic'] = $row->profile_pic;
            $count++;
        }
    }

    public function update_profile() {
        $this->db->set('user_full_name', $_POST['user_full_name']);
        $this->db->set('user_organization', $_POST['user_organization']);
        $this->db->where('user_email',$_SESSION['user_email']);
        $status=$this->db->update('user_meta');
        $this->set_user_info($_SESSION['user_email']);
        return $status;        
    }

}
