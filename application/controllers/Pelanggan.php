<?php
defined('BASEPATH')OR EXIT('Tidak Boleh Mengakses Langsung');

Class Pelanggan extends CI_controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('M_pelanggan');
		$this->load->model('M_tarif');
	}

	function tampil(){
		$data['daftar_pelanggan']=$this->M_pelanggan->tampil_data();
		$data['page']='pelanggan/tampil';
		$this->load->view('Home',$data);
	}

	function tambah(){
		$data['daftar_tarif']=$this->M_tarif->tampil_data();
		$data['page']='pelanggan/tambah';
		$this->load->view('Home',$data);
	}

	function simpan(){
		if($this->M_pelanggan->CekRecord($this->input->post('idpelanggan'))){
			$this->session->set_flashdata('pesan_crud','<script>alert(\'Data Sudah Ada\')</script>');
		}else{
			$this->M_pelanggan->simpan_data();
		}
		redirect('pelanggan/tampil');
	}

	function hapus(){
		$idpelanggan=$this->uri->segment(3);
		$this->M_pelanggan->hapus_data($idpelanggan);
		redirect('pelanggan/tampil');
	}

	function edit($idpelanggan){
		$data['daftar_tarif']=$this->M_tarif->tampil_data();
		$data['detail_pelanggan']=$this->M_pelanggan->detail_data($idpelanggan);
		$data['page']='pelanggan/edit';
		$this->load->view('Home',$data);
	}

	function update(){
		$this->M_pelanggan->update_data($this->input->post('idpelanggan'));
		redirect('pelanggan/tampil');
	}

}
?>