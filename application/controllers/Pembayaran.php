<?php
defined('BASEPATH')or exit('Tidak Boleh Mengakses Langsung');

class Pembayaran extends CI_controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('M_pembayaran');
		$this->load->model('M_penggunaan');
	}

	function tampil(){
		$data['daftar_pembayaran']=$this->M_pembayaran->tampil_data();
		$data['page']='pembayaran/tampil';
		$this->load->view('Home',$data);
	}

	function tambah(){
		$data['daftar_penggunaan']=$this->M_penggunaan->tampil_data();
		$data['page']='pembayaran/tambah';
		$this->load->view('Home',$data);
	}

	function simpan(){
		$this->M_pembayaran->simpan_data();
		redirect('pembayaran/tampil');
	}

	function hapus($idbayar){
		$this->M_pembayaran->hapus_data($idbayar);
		redirect('pembayaran/tampil');
	}

	function edit($idbayar){
		$data['detail_pembayaran']=$this->M_pembayaran->detail_data($idbayar);
		$data['daftar_penggunaan']=$this->M_penggunaan->tampil_data();
		$data['page']='pembayaran/edit';
		$this->load->view('Home',$data);
	}

	function update(){
		$this->M_pembayaran->update_data($this->input->post('idbayar'));
		redirect('pembayaran/tampil');
	}

}
?>