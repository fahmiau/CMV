<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Problems extends CI_Controller { 
    public function index(){
        $this->load->view('always/header6.php');
        $this->load->view('part/problems.php');
    }
}