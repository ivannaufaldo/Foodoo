<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class toko_login extends CI_Controller {

   public function index() {

       // Fungsi Login
       $valid = $this->form_validation;
       $username = $this->input->post('username');
       $password = $this->input->post('password');
       $valid->set_rules('username','Username','required');
       $valid->set_rules('password','Password','required');

       if($valid->run()) {
           $this->m_toko->toko_login($username,$password, base_url('toko_dashboard'), base_url('toko_login'));
       }
       // End fungsi login
       $this->load->view('header');
       $this->load->view('view_toko_login');
       $this->load->view('footer');
   }

   public function logout(){
       $this->m_toko->logout();
   }        
}