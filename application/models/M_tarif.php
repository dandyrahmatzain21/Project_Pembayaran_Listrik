<?php
defined('BASEPATH') or die('error');

class M_tarif extends CI_model{

	var $tarif='tarif';

	function tampil_data(){
		$sql_tarif=$this->db->get($this->tarif);
		if($sql_tarif->num_rows()>0){
			return $sql_tarif->result_array();
		}
	}

	function hapus_data($kodetarif){
		$this->db->where('kodetarif',$kodetarif);
		$this->db->delete($this->tarif);
	}

	function simpan_data(){
		$data=array('kodetarif'=>$this->input->post('kodetarif'),
			'daya'=>$this->input->post('daya'),
			'tarifperkwh'=>$this->input->post('tarifperkwh'));
		$this->db->insert('tarif',$data);
	}

	function detail_data($kodetarif){
		$this->db->where('kodetarif',$kodetarif);
		$sql_tarif=$this->db->get($this->tarif);
		if($sql_tarif->num_rows()==1){
			return $sql_tarif->row_array();
		}
	}

	function update_data($kodetarif){
		$data=array(
			'daya'=>$this->input->post('daya'),
			'tarifperkwh'=>$this->input->post('tarifperkwh')
			);

		$this->db->where('kodetarif',$kodetarif);
		$this->db->update($this->tarif,$data);
	}

	function CekRecord($kodetarif){
		$this->db->where('kodetarif',$kodetarif);
		$sql_tarif=$this->db->get($this->tarif);
		if($sql_tarif->num_rows()==1){
			
		}
	}
}


?>