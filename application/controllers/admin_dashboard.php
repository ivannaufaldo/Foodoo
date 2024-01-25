
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_dashboard extends CI_Controller {
   function __construct(){
       parent::__construct();
       $this->m_admin->cek_login();
   }

   //Load Halaman dashboard
   public function index() {
	   $data['kategori'] = $this->m_kategori->getData()->result();
      $this->load->view('header');
      $this->load->view('navbar4');
		$this->load->view('view_admin_dashboard', $data);
      $this->load->view('footer');
   }
}