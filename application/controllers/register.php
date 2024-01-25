<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

   function __construct(){
       parent::__construct();
       $this->load->library(array('form_validation'));
       $this->load->helper(array('url','form'));
       $this->load->model('m_account'); //call model
   }

   public function index() {
       $this->form_validation->set_rules('username', 'USERNAME','required');
	   $this->form_validation->set_rules('password','PASSWORD','required');
       $this->form_validation->set_rules('email','EMAIL','required|valid_email');
	   $this->form_validation->set_rules('nama','NAMA','required');
	   $this->form_validation->set_rules('no_telp','NO_TELP','required');
	   $this->form_validation->set_rules('umur','UMUR','required');
	   $this->form_validation->set_rules('alamat','ALAMAT','required');
       if($this->form_validation->run() == TRUE) {
		   $data['username'] =    $this->input->post('username');
           $data['email']  =    $this->input->post('email');
           $data['password'] =    md5($this->input->post('password'));
		   $data['username'] =    $this->input->post('username');
		   $data['nama'] =    $this->input->post('nama');
		   $data['no_telp'] =    $this->input->post('no_telp');
		   $data['umur'] =    $this->input->post('umur');
		   $data['alamat'] =    $this->input->post('alamat');

           $this->m_account->daftar($data);

           $pesan['message'] =    "Pendaftaran berhasil";

            $this->load->view('header');
            $this->load->view('view_login');
            $this->load->view('footer');
       }else{
            $this->load->view('header');
            $this->load->view('view_register');
            $this->load->view('footer');
       }
   }
}