<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller { 
	public function __construct(){
        parent::__construct();
        $this->load->model('M_book');
    }
    public function index(){
    	$data['book'] = $this->M_book->tampil_data1()->result();
        $this->load->view('always/header1.php');
        $this->load->view('part/book.php');
        // $this->load->view('always/footer.php');
    }
    public function tambah_aksi(){

            
        $id_book=$this->input->post('id_book');
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $prob_name=$this->input->post('prob_name');
        $date=$this->input->post('date');
    

        $data = array (
            'id_book'=>$id_book,
            'name'=>$name,
            'email'=>$email,
            'prob_name'=>$prob_name,
            'date'=>$date
            
        );
        $this->M_book->input_data($data,'book');
        redirect('thankyou');
    }
    function tambah(){
		$this->load->view('always/header1.php');
        $this->load->view('part/book.php');
	}
}
