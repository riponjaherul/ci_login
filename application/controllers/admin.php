<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Dacca");

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('session_id') === NULL) {
            redirect('welcome');
        }
        $this->load->model('login_model');
//        session_start();
    }

    function index() {
        $this->load->view('after_login');

        $_SESSION['refresh_time'] = time();
        if (($_SESSION['refresh_time'] - $_SESSION['start_time']) > 10) {
            $login_time = $this->session->userdata('login_time');
            $logout_time = (date('Y-m-d h:i:s a', ($_SESSION['start_time'] + 10)));
            $this->login_model->add_logout_details($login_time, $logout_time);
            $this->session->unset_userdata('session_id');
            $this->session->unset_userdata('admin_name');
            $this->session->unset_userdata('login_time');
            $data = array();
            $data['message'] = '<span style="color:red">You are successfully logout</span>';
            $this->session->set_userdata($data);
            redirect('welcome');
        } else {
            $_SESSION['start_time'] = $_SESSION['refresh_time'];
        }
    }

    function super_admin() {
        $this->load->view('after_admin_login');
    }

    function user_history() {
        $this->load->view('login_info');
    }

    function logout_admin() {
        $this->session->unset_userdata('session_id');
        $this->session->unset_userdata('admin_name');
        $data = array();
        $data['message'] = '<span style="color:red">You are successfully logout</span>';
        $this->session->set_userdata($data);
        redirect('admin_login');
    }

    function logout() {
        $date = new DateTime();
        $login_time = $this->session->userdata('login_time');
        $logout_time = $date->format('Y-m-d h:i:s a');
        $this->login_model->add_logout_details($login_time, $logout_time);
        $this->session->unset_userdata('session_id');
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('login_time');
        $data = array();
        $data['message'] = '<span style="color:red">You are successfully logout</span>';
        $this->session->set_userdata($data);
        redirect('welcome');
    }

}
