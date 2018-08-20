<?php

class Project extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->model('auth');
        $this->load->model('project');
        $this->load->database();
        ($this->auth->is_user_logged_in() ? '' : $_SESSION['error_msg'] = '* Please login to access your projects' AND redirect('/'));
    }

    public function add_project($params) {
        $data = array(
            'project_name' => $params['project_name'],
            'creation_date' => time(),
            'project_description' => $params['project_description']
        );
        $status = $this->db->insert('project_meta', $data) ? TRUE : FALSE;
        return $status;
    }

    public function get_projects() {
        $this->db->from('project_meta');
        $this->db->select('pid');
        $this->db->select('project_name');
        $this->db->order_by('project_name', 'ASC');
        $query = $this->db->get();
        $count = 0;
        foreach ($query->result() as $row) {
            $data[$count]['project_name'] = $row->project_name;
            $data[$count]['pid'] = $row->pid;
            $count++;
        }
        return $data;
    }

    public function assign_project($params) {
        $data = array(
            'project_name' => $params['project_name'],
            'creation_date' => time(),
            'project_description' => $params['project_description']
        );
        $status = $this->db->insert('project_meta', $data) ? TRUE : FALSE;
        return $status;
    }

}
