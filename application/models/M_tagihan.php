<?php
defined('BASEPATH')or die('Tidak Boleh Mengakses Langsung');

class M_tagihan extends CI_model{
	var $tagihan='tagihan';

	function tampil_data(){
		$sql_tagihan=$this->db->get($this->tagihan);
			if($sql_tagihan->num_rows()>0){
				return $sql_tagihan->result_array();
			}
	}
}
?>