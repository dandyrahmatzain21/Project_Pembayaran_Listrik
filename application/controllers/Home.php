<?php
defined('BASEPATH') OR exit ('Tidak Boleh Mengakses Langsung');

class Home extends CI_controller{

	public function index(){

		$this->load->view('Home');
	}
}
?>