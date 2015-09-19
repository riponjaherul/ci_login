<?php

class Login_model extends CI_Model {

    function check_admin_login($admin_email_address, $admin_password) {
//        echo $admin_email_address.'------'.$admin_password;
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_email_address', $admin_email_address);
        $this->db->where('admin_password', $admin_password);
        $this->db->where('access_level','0');
        $query_result = $this->db->get();
        return $query_result->row();
    }

    function check_admin_login_model($email_address, $password) {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_email_address', $email_address);
        $this->db->where('admin_password', $password);
        $query_result = $this->db->get();
        return $query_result->row();
    }

    function add_login_details($data) {
        $this->db->insert('tbl_login_data', $data);
    }

    function add_logout_details($login_time, $louout_time) {
//        echo $login_time . '----' . $louout_time;
        $this->db->set('logout_time', $louout_time);
        $this->db->where('login_time', $login_time);
        $this->db->update('tbl_login_data');
    }
    function get_all_admin(){
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('access_level','1');
        $query_result = $this->db->get();
        return $query_result->result();
    }
    function get_total_login($admin_email_address){
        $this->db->select('login_email_address');
        $this->db->from('tbl_login_data');
        $this->db->where('login_email_address',$admin_email_address);
        return $this->db->count_all_results();
    }
    function get_single_admin_email($admin_id){
        $this->db->select('admin_email_address');
        $this->db->from('tbl_admin');
        $this->db->where('admin_id',$admin_id);
        $query_result = $this->db->get();
        return $query_result->result();
    }
    function get_single_admin_data($admin_email){
        $this->db->select('*');
        $this->db->from('tbl_login_data');
        $this->db->where('login_email_address',$admin_email);
        $query_result = $this->db->get();
        return $query_result->result();
    }

}
