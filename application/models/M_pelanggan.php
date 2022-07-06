<?php
defined('BASEPATH')OR DIE('Tidak Boleh Mengakses Langsung');

class M_pelanggan extends CI_model{

	var $pelanggan='pelanggan';

	function tampil_data(){
		$this->db->select('*');
		$this->db->join('tarif', 'pelanggan.kodetarif=tarif.kodetarif');
		$sql_pelanggan=$this->db->get($this->pelanggan);
		if($sql_pelanggan->num_rows()>0){
			return $sql_pelanggan->result_array();
		}
	}

	function simpan_data(){

		$data=array(
			'idpelanggan'=>$this->input->post('idpelanggan'),
			'nometer'=>$this->input->post('nometer'),
			'nama'=>$this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			'kodetarif'=>$this->input->post('kodetarif')
			);
			$this->db->insert('pelanggan',$data);
	}

	function CekRecord($idpelanggan){
		$this->db->where('idpelanggan',$idpelanggan);
		$sql_pelanggan=$this->db->get($this->pelanggan);
			if($sql_pelanggan->num_rows()==1){
				return true;
			}
	}

	function hapus_data($idpelanggan){
		$this->db->where('idpelanggan',$idpelanggan);
		$this->db->delete($this->pelanggan);
	}

	function detail_data($idpelanggan){
		$this->db->where('idpelanggan',$idpelanggan);
		$sql_pelanggan=$this->db->get($this->pelanggan);
		if($sql_pelanggan->num_rows()==1){
			return $sql_pelanggan->row_array();
		}
	}

	function update_data($idpelanggan){
		$data=array(
			'idpelanggan'=>$this->input->post('idpelanggan'),
			'nometer'=>$this->input->post('nometer'),
			'nama'=>$this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			'kodetarif'=>$this->input->post('kodetarif')
			);	
		
		$this->db->where('idpelanggan',$idpelanggan);	
		$this->db->update($this->pelanggan,$data);
	}

}

?>