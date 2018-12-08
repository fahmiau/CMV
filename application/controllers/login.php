<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller { 
    public function index(){
        $this->load->view('always/header.php');
        $this->load->view('part/Login.php');
        $this->load->view('always/footer.php');
    }
}
