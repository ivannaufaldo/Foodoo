<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_register extends CI_Controller {

   function __construct(){
       parent::__construct();
       $this->load->library(array('form_validation'));
       $this->load->helper(array('url','form'));
       $this->load->model('m_admin'); //call model
   }

   public function index() {
        $this->form_validation->set_rules('username', 'USERNAME','required');
        $this->form_validation->set_rules('password','PASSWORD','required');
        if($this->form_validation->run() == TRUE) {
            $data['username'] =    $this->input->post('username');
            $data['password']  =   md5($this->input->post('password'));
            
            $this->m_admin->daftar($data);
            
            $this->load->view('header');
            $this->load->view('view_admin_login');
            $this->load->view('footer');
        }
        else
        {
            $this->load->view('header');
            $this->load->view('view_register_admin');
            $this->load->view('footer');
        }
   }
}