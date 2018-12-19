<?php

/**
 * Created by PhpStorm.
 * User: wachirapan
 * Date: 12/19/2018
 * Time: 11:39 AM
 */
class Login extends CI_Controller
{
    function loginpage()
    {
        $this->load->view('backend/login/login');
    }
    function checklogin()
    {
        $username = $this->input->post('username');
        $pass = $this->input->post('pass');
        $query = $this->db->get_where('staff',array('st_user'=>$username, 'st_pwd'=>$pass));
        if($query->num_rows() > 0){
            $this->session->set_userdata(array('userlogin'=>$username));
            redirect(base_url('Backend/index'));
            exit();
        }
        redirect(base_url('Login/loginpage'));
        exit();
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('Login/loginpage'));
        exit();
    }
}