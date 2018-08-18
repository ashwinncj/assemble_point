<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->login();
    }

    public function signup() {
        $this->load->model('auth');
        ($this->auth->is_user_logged_in() ? redirect('/projects') : '');
        $data['form'] = 'signupform';
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }

    public function login() {
        $this->load->model('auth');
        ($this->auth->is_user_logged_in() ? redirect('/projects') : '');
        $data['form'] = 'loginform';
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }

    public function authenticate() {
        $this->load->model('auth');
        //Check if user is logged in already and redirect them to success page.
        ($this->auth->is_user_logged_in() ? redirect('/projects') : '');

        //Check if valid post data is sent before trying to login to the system.
        isset($_POST['user_email']) ? (isset($_POST['user_password'])? : redirect('home/login')) : redirect('home/login');
        $user = $this->input->post('user_email');
        $password = $this->input->post('user_password');
        $auth = $this->auth->authenticate($user, $password);
        if ($auth) {
            $_SESSION['user_logged'] = 'true';
            $_SESSION['user_email'] = $user;
            redirect('/projects');
        } else {
            $_SESSION['error_msg'] = '* Invalid Credentials';
            redirect('home/login');
        }
    }

    public function register() {
        $this->load->model('auth');
        isset($_POST['user_email']) ? (isset($_POST['user_password'])? : redirect('home/signup')) : redirect('home/signup');
        ($_POST['user_password'] != $_POST['user_confirm_password']) ? $_SESSION['error_msg'] = '* Passwords don\'t match. Please try again.' AND redirect('home/signup') : '';
        $status = $this->auth->add_user($_POST);
        $status ? $_SESSION['error_msg'] = 'Please login with your credentials' AND redirect('home/login') : $_SESSION['error_msg'] = 'There was an error. Please try again' AND redirect('home/signup');
    }

}
