<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Dacca");
class Welcome extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('session_id')!==NULL){
            redirect('admin');
        }
    }
	public function index()
	{
		$this->load->view('login_page');
	}
        public function forget(){
            echo 'Forget Password';
        }
}
