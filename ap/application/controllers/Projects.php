<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

    public function index() {
        $this->load->model('auth');
        ($this->auth->is_user_logged_in() ? '' : $_SESSION['error_msg'] = '* Please login to access your projects' AND redirect('/'));
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('projects');
        $this->load->view('templates/footer');
    }

    public function create() {
        $this->load->model('auth');
        ($this->auth->is_user_logged_in() ? '' : $_SESSION['error_msg'] = '* Please login to access your projects' AND redirect('/'));
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('create');
        $this->load->view('templates/footer');
    }

}
