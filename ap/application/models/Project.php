<?php

class Project extends CI_Model {
    
    public function add_project($params){
        $this->load->database();        
        $data = array(
            'project_name' => $params['project_name'],
            'creation_date' => time()
        );
        $status = $this->db->insert('project_meta', $data) ? TRUE : FALSE;
        return $status;
    }
}
