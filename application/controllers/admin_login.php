<?php

class admin_login extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->load->view('admin_login');
    }
}
