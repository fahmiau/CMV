<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller { 
    public function index(){
        $this->load->view('always/header.php');
        $this->load->view('part/login.php');
    }

    public function login_action(){
        $username =$this->input->post('username');
        $password=$this->input->post('password');

        $status_login = $this->User_model->check_login($username,$password);
        if($status_login){
         //add data to session
         $data_session = array('username' => $username, 'status' => $status_login);
         $this->session->set_userdata($data_session);
         redirect(base_url());
        }else{
         echo "Username dan password salah !";
        }
    }
}
