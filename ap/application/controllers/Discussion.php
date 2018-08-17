<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Discussion extends CI_Controller {

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('discussion');
        $this->load->view('templates/footer');
    }

}
