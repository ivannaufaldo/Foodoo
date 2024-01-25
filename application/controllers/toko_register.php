<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class toko_register extends CI_Controller {

   function __construct(){
       parent::__construct();
       $this->load->library(array('form_validation'));
       $this->load->helper(array('url','form'));
       $this->load->model('m_toko'); //call model
   }

   public function index() {
       $this->form_validation->set_rules('username', 'USERNAME','required');
	   $this->form_validation->set_rules('password','PASSWORD','required');
	   $this->form_validation->set_rules('nama_toko', 'NAMA_TOKO','required');
	   $this->form_validation->set_rules('alamat', 'ALAMAT','required');
       if($this->form_validation->run() == TRUE) {
			$data['nama_toko'] =    $this->input->post('nama_toko');
			$data['alamat'] =    $this->input->post('alamat');
		    $data['username'] =   $this->input->post('username');
            $data['password']  =    md5($this->input->post('password'));
		   
            $this->m_toko->daftar($data);

            $this->load->view('header');
            $this->load->view('view_toko_login');
            $this->load->view('footer');
       }else{
            $this->load->view('header');
            $this->load->view('view_toko_register');
            $this->load->view('footer');
       }
   }
}