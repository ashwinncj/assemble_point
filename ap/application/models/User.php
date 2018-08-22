<?php

class User extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_uid() {
        return $_SESSION['uid'];
    }

    public function is_sudo() {
        return $_SESSION['sudo'] ? TRUE : FALSE;
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
        if ($_SESSION['sudo']) {
            return 'sudo';
        } else {
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
                return ($data == 'FALSE' ? FALSE : $data);
            } else {
                return FALSE;
            }
        }
    }

    public function set_user_info($user) {
        $this->db->from('user_meta');
        $this->db->where('user_email', $user);
        $this->db->select('id, user_full_name, user_organization, profile_pic,sudo');
        $this->db->limit(1);
        $query = $this->db->get();
        $count = 0;
        foreach ($query->result() as $row) {
            $_SESSION['user_email'] = $user;
            $_SESSION['uid'] = $row->id;
            $_SESSION['sudo'] = $row->sudo;
            $_SESSION['user_full_name'] = $row->user_full_name;
            $_SESSION['user_organization'] = $row->user_organization;
            $row->profile_pic == '' ? $profile_pic = 'http://localhost/assemblepoint/ap/assets/img/anonymous.jpg' : $profile_pic = $row->profile_pic;
            setcookie('profile_pic', $profile_pic, time() + (86400 * 30), "/"); // 86400 = 1 day
            $count++;
        }
    }

    public function update_profile() {
        $this->db->set('user_full_name', $_POST['user_full_name']);
        $this->db->set('user_organization', $_POST['user_organization']);
        $this->db->where('id', $this->get_uid());
        $status = $this->db->update('user_meta');
        $this->set_user_info($_SESSION['user_email']);
        return $status;
    }

    public function update_profile_pic($pic) {
        $this->db->set('profile_pic', base_url('assets/img/profileimg/' . $pic));
        $this->db->where('id', $this->get_uid());
        $status = $this->db->update('user_meta');
        $status ? $this->set_user_info($_SESSION['user_email']) : '';
        return $status;
    }

}
