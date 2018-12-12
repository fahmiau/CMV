<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller { 
    public function index(){
        $this->load->view('always/header.php');
        // $this->load->view('always/navbar.php');
        $this->load->view('part/login.php');
        // $this->load->view('always/footer.php');
    }
}
