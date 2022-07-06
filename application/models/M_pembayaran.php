<?php
defined('BASEPATH')or exit('Tidak Boleh Mengakses Langsung');

class M_pembayaran extends CI_model{
	var $pembayaran='pembayaran';

	function tampil_data(){
		$sql_pembayaran=$this->db->get($this->pembayaran);
		if($sql_pembayaran->num_rows()>0){
			return $sql_pembayaran->result_array();
		}
	}

	function simpan_data(){
		$data=array(
				'idbayar'=>$this->input->post('idbayar'),
				'idpelanggan'=>$this->input->post('idpelanggan'),
				'bulan'=>$this->input->post('bulan'),
				'tahun'=>$this->input->post('tahun'),
				'tanggalbayar'=>$this->input->post('tanggalbayar'),
				'biayaadmin'=>$this->input->post('biayaadmin')
		);

		$this->db->insert($this->pembayaran,$data);
	}

	function hapus_data($idbayar){
		$this->db->where('idbayar',$idbayar);
		$this->db->delete($this->pembayaran);
	}

	function detail_data($idbayar){
		$this->db->where('idbayar',$idbayar);
		$sql_pembayaran=$this->db->get($this->pembayaran);
		if($sql_pembayaran->num_rows()==1){
			return $sql_pembayaran->row_array();
		}
		
	}

	function update_data($idbayar){
		$this->db->where('idbayar',$idbayar);
		$data=array(
				'idbayar'=>$this->input->post('idbayar'),
				'idpelanggan'=>$this->input->post('idpelanggan'),
				'bulan'=>$this->input->post('bulan'),
				'tahun'=>$this->input->post('tahun'),
				'tanggalbayar'=>$this->input->post('tanggalbayar'),
				'biayaadmin'=>$this->input->post('biayaadmin')		);

		$this->db->update($this->pembayaran,$data);

	}
}
?>