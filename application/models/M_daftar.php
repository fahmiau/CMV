<?php 
 
class M_daftar extends CI_Model{
	function tampil_data(){
		return $this->db->get('account');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}
?>