<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Dacca");

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function check_login() {
        $email_address = $this->input->post('user_email_address');
        $password = md5($this->input->post('user_password'));
        $result = $this->login_model->check_admin_login_model($email_address, $password);
        if ($result) {
            $data1 = array();
            $data_db = array();
            $data_ses = array();
            $data1['session_id'] = session_id();
            $data1['admin_name'] = $result->admin_name;
            $date = new DateTime();
            $data_db['login_email_address'] = $result->admin_email_address;
            $data_db['login_time'] = $date->format('Y-m-d h:i:s a');
            $this->login_model->add_login_details($data_db);
            $data_ses['login_time'] = $date->format('Y-m-d h:i:s a');
            $this->session->set_userdata($data_ses);
            $this->session->set_userdata($data1);
            $_SESSION['start_time'] = time();
            redirect('admin');
        } else {
            $data['message'] = '<span style="color:red">Invalid username or Password</span>';
            $this->session->set_userdata($data);
            redirect(base_url());
        }
    }

    public function check_admin_login() {
        $admin_email_address = $this->input->post('admin_email_address');
        $admin_password = md5($this->input->post('admin_password'));
        $result = $this->login_model->check_admin_login($admin_email_address,$admin_password);
        if($result){
            $data1['session_id'] = session_id();
            $data1['admin_name'] = $result->admin_name;
            $this->session->set_userdata($data1);
            redirect('admin/super_admin');
        }else{
          $data['message'] = '<span style="color:red">Invalid username or Password</span>';
            $this->session->set_userdata($data);
            redirect('admin_login');
        }
    }

}
