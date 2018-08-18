<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->login();
    }

    public function signup() {        
        $data['form']='signupform';
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('home',$data);
        $this->load->view('templates/footer');
    }
    public function login() {        
        $data['form']='loginform';
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('home',$data);
        $this->load->view('templates/footer');
    }
    

}
