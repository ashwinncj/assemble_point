<?php

class Discuss extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set("Asia/Kolkata");
    }

    public function add_comment($data) {
        $status = $this->db->insert('discussions', $data) ? TRUE : FALSE;
        return $status;
    }

    public function get_comments($pid, $did, $limit) {
        $this->db->from('discussions');
        $this->db->where('pid', $pid);
        $this->db->where('did', $did);
        $this->db->join('user_meta', 'discussions.uid=user_meta.id', 'inner');
        $this->db->select('discussions.id as cid, user_full_name, uid, comment, posted_on,profile_pic');
        $this->db->order_by('posted_on', 'DESC');
        $limit == 'all' ? '' : $this->db->limit(20);
        $query = $this->db->get();
        $count = 0;
        foreach ($query->result() as $row) {
            $data[$count]['uid'] = $row->uid;
            $data[$count]['user_full_name'] = $row->user_full_name;
            $row->profile_pic == '' ? $data[$count]['profile_pic'] = 'http://localhost/assemblepoint/ap/assets/img/anonymous.jpg' : $data[$count]['profile_pic'] = $row->profile_pic;
            $data[$count]['posted_on'] = date("d M Y H:i:s", $row->posted_on);
            $data[$count]['comment'] = $row->comment;
            $data[$count]['cid'] = $row->cid;
            $count++;
        }
        return ($count >= 1 ? $data : FALSE);
    }

    public function delete_comment($cid, $uid) {
        $this->db->where('id', $cid);
        $this->db->where('uid', $uid);
        $status = $this->db->delete('discussions') ? TRUE : FALSE;
        return $status;
    }

    public function get_discussions_complete($uid, $pid) {
        $this->db->from('discussion_meta');
        $this->db->join('access_control', 'discussion_meta.pid=access_control.pid', 'left');
        if (!$_SESSION['sudo']) {
            $this->db->where('access_control.uid', $uid);
            $this->db->not_like('access_control.access_level', 'FALSE');
        }
        $this->db->where('discussion_meta.pid', $pid);
        $this->db->select('discussion_name,discussion_meta.did as did,creation_date,discussion_description');
        $this->db->order_by('creation_date', 'DESC');
        $query = $this->db->get();
        $count = 0;
        foreach ($query->result() as $row) {
            $data[$count]['discussion_name'] = $row->discussion_name;
            $data[$count]['did'] = $row->did;
            $data[$count]['pid'] = $pid;
            $data[$count]['creation_date'] = date("d M Y", $row->creation_date);
            $data[$count]['discussion_description'] = $row->discussion_description;
            $count++;
        }
        return ($count > 0 ? $data : FALSE);
    }

    public function add_discussion($params) {
        $data = array(
            'discussion_name' => $params['discussion_name'],
            'creation_date' => time(),
            'discussion_description' => $params['discussion_description'],
            'pid' => $params['pid']
        );
        $status = $this->db->insert('discussion_meta', $data) ? TRUE : FALSE;
        return $status;
    }

    public function get_discussion_info($did) {
        $this->db->from('discussion_meta');
        $this->db->select('discussion_name, discussion_description, pid');
        $this->db->where('did', $did);
        $query = $this->db->get();
        $count = 0;
        foreach ($query->result() as $row) {
            $data['discussion_name'] = $row->discussion_name;
            $data['pid'] = $row->pid;
            $data['discussion_description'] = $row->discussion_description;
            $count++;
        }
        return $data;
    }

    public function get_discussions_short() {
        $this->db->from('discussion_meta');
        $this->db->select('did,pid');
        $this->db->select('discussion_name');
        $this->db->order_by('discussion_name', 'ASC');
        $query = $this->db->get();
        $count = 0;
        foreach ($query->result() as $row) {
            $data[$count]['discussion_name'] = $row->discussion_name;
            $data[$count]['did'] = $row->did;
            $data[$count]['pid'] = $row->pid;
            $count++;
        }
        return isset($data) ? $data : FALSE;
    }

    public function update_discussion($params) {
        $this->db->set('discussion_name', $params['discussion_name']);
        $this->db->set('discussion_description', $params['discussion_description']);
        $this->db->where('did', $params['did']);
        $status = $this->db->update('discussion_meta', $data) ? TRUE : FALSE;
        return $status;
    }

    public function delete_discussion($params) {
        $this->db->where('did', $params['did']);
        $status = $this->db->delete('discussion_meta') ? TRUE : FALSE;
        return $status;
    }

}
