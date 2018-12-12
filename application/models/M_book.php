<?php 
 
class M_book extends CI_Model{
	function tampil_data1(){
		return $this->db->get('book');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}
?>