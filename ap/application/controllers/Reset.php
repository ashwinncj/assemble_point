<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reset extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user');
        $this->load->model('auth');
    }

    public function updatepassword() {
        $this->auth->authenticate($_SESSION['user_email'], $_POST['old_password']) ? $continue = TRUE : $continue = FALSE;
        $reset = ($_POST['new_password'] == $_POST['confirm_new_password'] ? TRUE : FALSE);
        $status = ($continue AND $reset) ? $this->user->update_password($this->auth->password($_POST['new_password'])) : FALSE;
        $status ? $_SESSION['error_msg'] = 'Password changed' : $_SESSION['error_msg'] = 'There was an error while changing password';
        redirect('profile');
    }
}
