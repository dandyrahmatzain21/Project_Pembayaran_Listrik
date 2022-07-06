<?php
defined('BASEPATH')or exit('Tidak Boleh Mengakses Langsung');

Class Penggunaan extends CI_controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('M_penggunaan');
		$this->load->model('M_pelanggan');
	}

	function tampil(){
		$data['daftar_penggunaan']=$this->M_penggunaan->tampil_data();
		$data['page']='penggunaan/tampil';
		$this->load->view('Home',$data);
	}

	function tambah(){
		$data['daftar_pelanggan']=$this->M_pelanggan->tampil_data();
		$data['page']='penggunaan/tambah';
		$this->load->view('Home',$data);
	}

	function simpan(){
		if($this->M_penggunaan->CekRecord($this->input->post('idpelanggan'))){
			$this->session->set_flashdata('pesan_crud','<script>(\'Data Sudah Ada\')</script>');
		}else{
			$this->M_penggunaan->simpan_data();
		}
		redirect('penggunaan/tampil');
	}

	function hapus(){
		$idpelanggan=$this->uri->segment(3);
		$this->M_penggunaan->hapus_data($idpelanggan);
		redirect('penggunaan/tampil');
	}

	function edit($idpelanggan){
		$data['daftar_pelanggan']=$this->M_pelanggan->tampil_data();
		$data['detail_penggunaan']=$this->M_penggunaan->detail_data($idpelanggan);
		$data['page']='penggunaan/edit';
		$this->load->view('Home',$data);
	}

	function update(){
		$this->M_penggunaan->update_data($this->input->post('idpelanggan'));
		redirect('penggunaan/tampil');
	}

}
?>