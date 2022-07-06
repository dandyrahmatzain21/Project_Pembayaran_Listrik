<?php
defined('BASEPATH') OR exit('Tidak Boleh Mengakses Langsung');

class Menu_main extends CI_controller{

	function index(){
		$data['page']='menu_main/tampil';
		$this->load->view('Home',$data);
	}
}
?>