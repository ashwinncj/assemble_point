<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('auth');
        $this->load->model('project');
        ($this->auth->is_user_logged_in() ? '' : $_SESSION['error_msg'] = '* Please login to access your projects' AND redirect('/'));
    }

    public function index() {
        $this->projects();
    }

    public function create() {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('create');
        $this->load->view('templates/footer');
    }

    public function logout() {
        redirect('logout');
    }

    public function newproject() {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('newproject');
        $this->load->view('templates/footer');
    }

    public function newuser() {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('newuser');
        $this->load->view('templates/footer');
    }

    public function assignuser() {
        $this->load->model('user');
        $data['projects'] = $this->project->get_projects_short();
        $data['users'] = $this->user->get_users();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('assignuser', $data);
        $this->load->view('templates/footer');
    }

    public function editproject() {
        $this->load->model('user');
        $data['projects'] = $this->project->get_projects_short();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('editproject', $data);
        $this->load->view('templates/footer');
    }

    public function register() {
        isset($_POST['user_email']) AND isset($_POST['user_password']) ? '' : redirect('projects/newuser');
        if (!$this->auth->user_exists($_POST['user_email'])) {
            $status = $this->auth->add_user($_POST);
            $status ? $_SESSION['error_msg'] = 'User added successfully' AND redirect('projects/newuser') : $_SESSION['error_msg'] = 'There was an error. Please try again' AND redirect('projects/newuser');
        } else {
            redirect('projects/newuser');
        }
    }

    public function addproject() {
        isset($_POST['project_name']) AND isset($_POST['project_description']) ? '' : redirect('projects/newproject');
        $status = $this->project->add_project($_POST);
        $status ? $_SESSION['error_msg'] = 'New projected created successfully' AND redirect('projects/newproject') : $_SESSION['error_msg'] = 'There was an error. Please try again' AND redirect('projects/newproject');
    }

    public function updateproject() {
        isset($_POST['project_name']) AND isset($_POST['project_description']) AND isset($_POST['pid']) ? '' : redirect('projects/editproject');
        $status = $this->project->update_project($_POST);
        $status ? $_SESSION['error_msg'] = 'Projected updated successfully' AND redirect('projects/editproject') : $_SESSION['error_msg'] = 'There was an error. Please try again' AND redirect('projects/newproject');
    }

    public function deleteproject() {
        isset($_POST['pid']) ? '' : redirect('projects/editproject');
        $status = $this->project->delete_project($_POST);
        $status ? $_SESSION['error_msg'] = 'Projected deleted successfully' AND redirect('projects/editproject') : $_SESSION['error_msg'] = 'There was an error. Please try again' AND redirect('projects/newproject');
    }

    public function projectinfo() {
        isset($_POST['pid']) ? '' : redirect('projects');
        $data['info'] = $this->project->get_project_info($_POST['pid']);
        $data['pid'] = $_POST['pid'];
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('projectinfo', $data);
        $this->load->view('templates/footer');
    }

    public function assignprivilages() {
        isset($_POST['user_email']) AND isset($_POST['project_uid']) ? '' : redirect('projects/assignuser');
        $status = $this->project->assign_project($_POST);
        $status ? $_SESSION['error_msg'] = 'User assigned to the project successfully' AND redirect('projects/assignuser') : $_SESSION['error_msg'] = 'There was an error. Please try again' AND redirect('projects/assignuser');
    }

    public function projects() {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->model('user');
        $data['info'] = $this->project->get_projects_complete($this->user->get_uid());
        $this->load->view('projects', $data);
        $this->load->view('templates/footer');
    }

}
