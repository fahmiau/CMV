<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thankyou extends CI_Controller { 
    public function index(){
        $this->load->view('always/header5.php');
        $this->load->view('part/thankyou.php');
    }
}