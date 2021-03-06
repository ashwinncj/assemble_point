<?php

class Project extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
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

    public function delete_project($params) {
        $this->db->where('pid', $params['pid']);
        $status = $this->db->delete('project_meta') ? TRUE : FALSE;
        return $status;
    }

    public function update_project($params) {
        $this->db->set('project_name', $params['project_name']);
        $this->db->set('project_description', $params['project_description']);
        $this->db->where('pid', $params['pid']);
        $status = $this->db->update('project_meta', $data) ? TRUE : FALSE;
        return $status;
    }

    public function get_projects_short() {
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
        return isset($data) ? $data : FALSE;
    }

    public function assign_project($params) {
        $data = array(
            'uid' => $params['uid'],
            'pid' => $params['pid'],
            'access_level' => $params['user_role']
        );
        $status = $this->db->replace('access_control', $data) ? TRUE : FALSE;
        return $status;
    }

    public function get_projects_complete($uid) {
        $this->db->from('project_meta');
        $this->db->join('access_control', 'project_meta.pid=access_control.pid', 'left');
        if (!$_SESSION['sudo']) {
            $this->db->where('access_control.uid', $uid);
            $this->db->not_like('access_control.access_level', 'FALSE');
        }
        $this->db->select('project_name,project_meta.pid as pid,creation_date,project_description');
        $this->db->order_by('creation_date', 'DESC');
        $query = $this->db->get();
        $count = 0;
        foreach ($query->result() as $row) {
            $data[$count]['project_name'] = $row->project_name;
            $data[$count]['pid'] = $row->pid;
            $data[$count]['creation_date'] = date("d M Y", $row->creation_date);
            $data[$count]['project_description'] = $row->project_description;
            $count++;
        }
        return ($count > 0 ? $data : FALSE);
    }

    public function get_project_info($pid) {
        $this->db->from('project_meta');
        $this->db->select('project_name, project_description');
        $this->db->where('pid', $pid);
        $query = $this->db->get();
        $count = 0;
        foreach ($query->result() as $row) {
            $data['project_name'] = $row->project_name;
            $data['project_description'] = $row->project_description;
            $count++;
        }
        return $data;
    }

}
