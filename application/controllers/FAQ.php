<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FAQ extends CI_Controller { 
    public function index(){
        $this->load->view('always/header1.php');
        // $this->load->view('always/navbar.php');
        $this->load->view('part/faq.php');
        // $this->load->view('always/footer.php');
    }
}
