<?php
defined('BASEPATH') OR exit('Tidak Boleh Diakses Langsung');

class Tarif extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('M_tarif');
	}

	function tampil(){
		$data['daftar_tarif']=$this->M_tarif->tampil_data();
		$data['page']='tarif/tampil';
		$this->load->view('Home',$data);
	}

	function tambah(){
		$data['page']='tarif/tambah';
		$this->load->view('Home',$data);
	}
	
	function simpan(){
		if($this->M_tarif->CekRecord($this->input->post('kodetarif'))){
			$this->session->set_flashdata('pesan_crud','<script>alert(\'Data sudah ada\')</script>');
		} else {
			$this->M_tarif->simpan_data();
		}
	// 3. diarahkan ke tampil
	redirect('tarif/tampil');	
	}

	function hapus(){
		$kodetarif=$this->uri->segment(3);
		$this->M_tarif->hapus_data($kodetarif);
		redirect('tarif/tampil');
	}

	function edit($kodetarif){

		$data['detail_tarif']=$this->M_tarif->detail_data($kodetarif);	
		$data['page']='tarif/edit';
		$this->load->view('Home',$data);	
	}

	function update(){
		$this->M_tarif->update_data($this->input->post('kodetarif'));
		redirect('tarif/tampil');
	}

}
?>