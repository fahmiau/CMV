<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup2 extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_daftar');
    }

    function index(){
        $this->load->view('always/header');
        $this->load->view('part/signup');   
    }

    function prosesdaftar(){

        $id_user=$this->input->post('id_user');
        $firstname=$this->input->post('firstname');
        $lastname=$this->input->post('lastname');
        $username=$this->input->post('username');
        $email=$this->input->post('email');
        $address=$this->input->post('address');
        $no_hp=$this->input->post('no_hp');
        $password=$this->input->post('password');

        $data = array (
            'id_user'=>$id_user,
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'username'=>$username,
            'email'=>$email,
            'address'=>$address,
            'no_hp'=>$no_hp,
            'password'=>$password
            
        );
        $this->m_daftar->input_data($data,'account');
        redirect('login');
    }
}
