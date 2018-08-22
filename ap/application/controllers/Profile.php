<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('auth');
        $this->load->model('user');
        ($this->auth->is_user_logged_in() ? '' : $_SESSION['error_msg'] = '* Please login to access your profile.' AND redirect('/'));
    }

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('profile');
        $this->load->view('templates/footer');
    }

    public function update() {
        isset($_POST['user_full_name']) AND isset($_POST['user_organization']) ? '' : redirect('profile');
        $this->user->update_profile($_POST) ? $_SESSION['error_msg'] = 'Information updated' : $_SESSION['error_msg'] = 'There was an error.';
        redirect('profile');
    }

    public function profile_pic_update() {
        $config['upload_path'] = './assets/img/profileimg/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->do_upload('profile_pic');
        $upload_data = ($this->upload->data());
        $this->user->update_profile_pic($upload_data['file_name']) ? $_SESSION['error_msg'] = 'Profile Image updated' : $_SESSION['error_msg'] = 'There was an error.';
        redirect('profile');
    }

}
