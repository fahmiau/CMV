<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class problems extends CI_Controller { 
    public function index(){
        $this->load->view('always/header.php');
        $this->load->view('part/problems.php');
        // $this->load->view('always/footer.php');
    }
}