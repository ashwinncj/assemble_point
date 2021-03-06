<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('auth');
        $this->load->model('project');
        $this->load->model('discuss');
        ($this->auth->is_user_logged_in() ? '' : $_SESSION['error_msg'] = '* Please login to access your projects' AND redirect('/'));
    }

    public function index() {
        $this->projects();
    }

    public function create() {
        $this->auth->is_sudo() ? '' : redirect('projects');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('create');
        $this->load->view('templates/footer');
    }

    public function logout() {
        redirect('logout');
    }

    public function newproject() {
        $this->auth->is_sudo() ? '' : redirect('projects');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('newproject');
        $this->load->view('templates/footer');
    }

    public function newdiscussion() {
        $this->auth->is_sudo() ? '' : redirect('projects');
        $data['projects'] = $this->project->get_projects_short();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('newdiscussion', $data);
        $this->load->view('templates/footer');
    }

    public function newuser() {
        $this->auth->is_sudo() ? '' : redirect('projects');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('newuser');
        $this->load->view('templates/footer');
    }

    public function assignuser() {
        $this->auth->is_sudo() ? '' : redirect('projects');
        $this->load->model('user');
        $data['projects'] = $this->project->get_projects_short();
        $data['users'] = $this->user->get_users();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('assignuser', $data);
        $this->load->view('templates/footer');
    }

    public function editproject() {
        $this->auth->is_sudo() ? '' : redirect('projects');
        $this->load->model('user');
        $data['projects'] = $this->project->get_projects_short();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('editproject', $data);
        $this->load->view('templates/footer');
    }

    public function editdiscussion() {
        $this->auth->is_sudo() ? '' : redirect('projects');
        $this->load->model('user');
        $this->load->model('discuss');
        $data['projects'] = $this->discuss->get_discussions_short();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('editdiscussion', $data);
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
        $this->auth->is_sudo() ? '' : redirect('projects');
        isset($_POST['project_name']) AND isset($_POST['project_description']) ? '' : redirect('projects/newproject');
        $status = $this->project->add_project($_POST);
        $status ? $_SESSION['error_msg'] = 'New projected created successfully' AND redirect('projects/newproject') : $_SESSION['error_msg'] = 'There was an error. Please try again' AND redirect('projects/newproject');
    }

    public function adddiscussion() {
        $this->auth->is_sudo() ? '' : redirect('projects');
        isset($_POST['discussion_name']) AND isset($_POST['discussion_description']) ? '' : redirect('projects/newdiscussion');
        $this->load->model('discuss');
        $status = $this->discuss->add_discussion($_POST);
        $status ? $_SESSION['error_msg'] = 'New discussion created successfully' AND redirect('projects/newproject') : $_SESSION['error_msg'] = 'There was an error. Please try again' AND redirect('projects/newproject');
    }

    public function updateproject() {
        $this->auth->is_sudo() ? '' : redirect('projects');
        isset($_POST['project_name']) AND isset($_POST['project_description']) AND isset($_POST['pid']) ? '' : redirect('projects/editproject');
        $status = $this->project->update_project($_POST);
        $status ? $_SESSION['error_msg'] = 'Projected updated successfully' AND redirect('projects/editproject') : $_SESSION['error_msg'] = 'There was an error. Please try again' AND redirect('projects/newproject');
    }

    public function updatediscussion() {
        $this->auth->is_sudo() ? '' : redirect('projects');
        isset($_POST['discussion_name']) AND isset($_POST['discussion_description']) AND isset($_POST['did']) ? '' : redirect('projects/editdiscussion');
        $status = $this->discuss->update_discussion($_POST);
        $status ? $_SESSION['error_msg'] = 'Discussion updated successfully' AND redirect('projects/editdiscussion') : $_SESSION['error_msg'] = 'There was an error. Please try again' AND redirect('projects/newdiscussion');
    }

    public function deleteproject() {
        $this->auth->is_sudo() ? '' : redirect('projects');
        isset($_POST['pid']) ? '' : redirect('projects/editproject');
        $status = $this->project->delete_project($_POST);
        $status ? $_SESSION['error_msg'] = 'Projected deleted successfully' AND redirect('projects/editproject') : $_SESSION['error_msg'] = 'There was an error. Please try again' AND redirect('projects/newproject');
    }

    public function deletediscussion() {
        $this->auth->is_sudo() ? '' : redirect('projects');
        isset($_POST['did']) ? '' : redirect('projects/editdiscussion');
        $status = $this->discuss->delete_discussion($_POST);
        $status ? $_SESSION['error_msg'] = 'Discussion deleted successfully' AND redirect('projects/editdiscussion') : $_SESSION['error_msg'] = 'There was an error. Please try again' AND redirect('projects/newproject');
    }

    public function projectinfo() {
        $this->auth->is_sudo() ? '' : redirect('projects');
        isset($_POST['pid']) ? '' : redirect('projects');
        $data['info'] = $this->project->get_project_info($_POST['pid']);
        $data['pid'] = $_POST['pid'];
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('projectinfo', $data);
        $this->load->view('templates/footer');
    }

    public function discussioninfo() {
        $this->auth->is_sudo() ? '' : redirect('projects');
        isset($_POST['did']) ? '' : redirect('projects');
        $this->load->model('discuss');
        $data['projects'] = $this->project->get_projects_short();
        $data['info'] = $this->discuss->get_discussion_info($_POST['did']);
        $data['did'] = $_POST['did'];
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('discussioninfo', $data);
        $this->load->view('templates/footer');
    }

    public function assignprivilages() {
        $this->auth->is_sudo() ? '' : redirect('projects');
        isset($_POST['user_email']) AND isset($_POST['project_uid']) ? '' : redirect('projects/assignuser');
        $status = $this->project->assign_project($_POST);
        $status ? $_SESSION['error_msg'] = 'User privileges updated successfully' AND redirect('projects/assignuser') : $_SESSION['error_msg'] = 'There was an error. Please try again' AND redirect('projects/assignuser');
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
