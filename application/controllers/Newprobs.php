<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newprobs extends CI_Controller { 
    public function index(){
        $this->load->view('always/header2.php');
        $this->load->view('part/new.php');
    }
}
