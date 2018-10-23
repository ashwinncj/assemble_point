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

    public function project($pid = 0, $did = 0, $limit = 20) {
        $pid == 0 || $did == 0 ? redirect('projects') : FALSE;
        $this->load->model('project');
        $data['access'] = $this->user->get_access_level($pid);
        $data['uid'] = $this->user->get_uid();
        $data['pid'] = $pid;
        $data['did'] = $did;
        (!$data['access'] ? redirect('/projects') : '');
        $data['project_info'] = $this->project->get_project_info($pid);
        $data['discussion_info'] = $this->discuss->get_discussion_info($did);
        $data['comments'] = $this->discuss->get_comments($pid, $did, $limit);
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('discussion', $data);
        $this->load->view('templates/footer');
    }

    public function comment() {
        $access = $this->user->get_access_level($_POST['pid']);
        $access == 'comment' OR $access == 'sudo' ? '' : redirect('projects');
        $data['pid'] = $_POST['pid'];
        $pid = $_POST['pid'];
        $did = $_POST['did'];
        $data['did'] = $_POST['did'];
        $data['uid'] = $this->user->get_uid();
        $data['comment'] = $_POST['comment'];
        $data['posted_on'] = time();
        $status = $this->discuss->add_comment($data);
        $status ? redirect('discussion/project/' . $pid . '/' . $did) : $_SESSION['error_msg'] = 'There was an error. Please try again.';
    }

    public function delete_comment($pid, $cid) {
        $this->discuss->delete_comment($cid, $this->user->get_uid());
        redirect('discussion/project/' . $pid);
    }

    public function all($pid = 0) {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->model('user');
        $data['info'] = $this->discuss->get_discussions_complete($this->user->get_uid(), $pid);
        $this->load->view('discussions', $data);
        $this->load->view('templates/footer');
    }

}
