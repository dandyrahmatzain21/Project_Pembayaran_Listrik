<?php
defined('BASEPATH')OR EXIT('Tidak Boleh Mengakses Langsung');

Class Tagihan extends CI_controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('M_tagihan');
	}

	function tampil(){
		$data['daftar_tagihan']=$this->M_tagihan->tampil_data();
		$data['page']='tagihan/tampil';
		$this->load->view('Home',$data);
	}

}
?>