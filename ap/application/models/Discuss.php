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

    public function get_comments($pid, $limit) {
        $this->db->from('discussions');
        $this->db->where('pid', $pid);
        $this->db->join('user_meta', 'discussions.uid=user_meta.id', 'inner');
        $this->db->select('user_full_name, uid, comment, posted_on,profile_pic');
        $this->db->order_by('posted_on', 'DESC');
        $limit == 'all' ?'': $this->db->limit(20);
        $query = $this->db->get();
        $count = 0;
        foreach ($query->result() as $row) {
            $data[$count]['uid'] = $row->uid;
            $data[$count]['user_full_name'] = $row->user_full_name;
            $row->profile_pic == '' ? $data[$count]['profile_pic'] = 'http://localhost/assemblepoint/ap/assets/img/anonymous.jpg' : $data[$count]['profile_pic'] = $row->profile_pic;
            $data[$count]['posted_on'] = date("d M Y H:i:s", $row->posted_on);
            $data[$count]['comment'] = $row->comment;
            $count++;
        }
        return ($count >= 1 ? $data : FALSE);
    }

}
