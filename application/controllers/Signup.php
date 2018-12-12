<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller { 
	public function __construct(){
        parent::__construct();
        $this->load->model('M_daftar');
    }
    public function index(){
    	$data['account'] = $this->M_daftar->tampil_data()->result();
        $this->load->view('always/header.php');
        $this->load->view('always/navbar.php');
        $this->load->view('part/signup.php');
        // $this->load->view('always/footer.php');
    }
    public function tambah_aksi(){
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
        $this->M_daftar->input_data($data,'account');
        redirect('login');
    }
    function tambah(){
		$this->load->view('always/header.php');
        $this->load->view('always/navbar.php');
        $this->load->view('part/signup.php');
	}
}
