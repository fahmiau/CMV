<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Renew extends CI_Controller { 
    public function index(){
        $this->load->view('always/header4.php');
        $this->load->view('part/renew.php');
    }
}