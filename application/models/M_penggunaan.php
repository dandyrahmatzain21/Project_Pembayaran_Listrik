<?php
defined('BASEPATH')or die('Tidak Boleh Mengakses Langsung');

class M_penggunaan extends CI_model{
	var $penggunaan='penggunaan';

	function tampil_data(){
		$sql_penggunaan=$this->db->get($this->penggunaan);
			if($sql_penggunaan->num_rows()>0){
				return $sql_penggunaan->result_array();
			}
	}

	function simpan_data(){

		$data=array(
			'idpelanggan'=>$this->input->post('idpelanggan'),
			'bulan'=>$this->input->post('bulan'),
			'tahun'=>$this->input->post('tahun'),
			'meterawal'=>$this->input->post('meterawal'),
			'meterakhir'=>$this->input->post('meterakhir')
			);

		$this->db->insert('penggunaan',$data);

	}

	function CekRecord($idpelanggan){
		$this->db->where('idpelanggan',$idpelanggan);
		$sql_penggunaan=$this->db->get($this->penggunaan);
		if($sql_penggunaan->num_rows()==1){
			return true;
		}
	}

	function hapus_data($idpelanggan){
		$this->db->where('idpelanggan',$idpelanggan);
		$this->db->delete($this->penggunaan);
	}

	function detail_data($idpelanggan){

		$this->db->where('idpelanggan',$idpelanggan);
		$sql_penggunaan=$this->db->get($this->penggunaan);
			if($sql_penggunaan->num_rows()==1){
				return $sql_penggunaan->row_array();
			}

	}

	function update_data($idpelanggan){
		$data=array(
			'bulan'=>$this->input->post('bulan'),
			'tahun'=>$this->input->post('tahun'),
			'meterawal'=>$this->input->post('meterawal'),
			'meterakhir'=>$this->input->post('meterakhir')
			);
		$this->db->where('idpelanggan',$idpelanggan);
		$this->db->update($this->penggunaan,$data);
	}
}
?>