<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dev extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('auth');
    }

    public function index() {
        
    }
    
    public function password($ip){
        echo $this->auth->password($ip);
    }
}
