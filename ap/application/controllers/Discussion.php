<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Discussion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('auth');
        $this->load->model('user');
        $this->load->model('discuss');
        ($this->auth->is_user_logged_in() ? '' : $_SESSION['error_msg'] = '* Please login to access your projects' AND redirect('/'));
    }

    public function index() {
        redirect('projects');
    }

    public function project($pid, $limit = 20) {
        $this->load->model('project');
        $data['access'] = $this->user->get_access_level($pid);
        $data['uid'] = $this->user->get_uid();
        $data['pid'] = $pid;
        (!$data['access'] ? redirect('/projects') : '');
        $data['project_info'] = $this->project->get_project_info($pid);
        $data['comments'] = $this->discuss->get_comments($pid, $limit);
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('discussion', $data);
        $this->load->view('templates/footer');
    }

    public function comment() {
        $access = $this->user->get_access_level($_POST['pid']);
        $access == 'comment' ? '' : redirect('projects');
        $data['pid'] = $_POST['pid'];
        $pid = $_POST['pid'];
        $data['uid'] = $this->user->get_uid();
        $data['comment'] = $_POST['comment'];
        $data['posted_on'] = time();
        $status = $this->discuss->add_comment($data);
        $status ? redirect('discussion/project/' . $pid) : $_SESSION['error_msg'] = 'There was an error. Please try again.';
    }

}
