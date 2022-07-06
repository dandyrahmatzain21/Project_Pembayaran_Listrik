<?php
defined('BASEPATH')or exit('Tidak Boleh Mengakses Langsung');

Class Laporan extends CI_controller{
    
    public function __construct(){
        parent::__construct();
            $this->load->model('M_laporan');
        
    }
    
    function tampil(){
        $data['page']='laporan/tampil';
        $this->load->view('Home',$data);
    }
    
}
?>