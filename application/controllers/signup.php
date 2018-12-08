<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signup extends CI_Controller { 
    public function index(){
        $this->load->view('always/header.php');
        $this->load->view('part/signup.php');
        $this->load->view('always/footer.php');
    }
}