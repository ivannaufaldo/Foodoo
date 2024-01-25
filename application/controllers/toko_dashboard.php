
<?php
class toko_dashboard extends CI_Controller {
   function __construct(){
       parent::__construct();
       $this->m_toko->cek_login();
   }
   //Load Halaman dashboard
   public function index() {
        $username = $this->session->userdata('username');
        $toko = $this->model_makanan->getIdbyUsername($username);
        $makanan = $this->model_makanan->tampil_makananByToko($toko['id_toko']);
        $pesanan = $this->model_pesanan->tampil_pesanan($toko['id_toko']);
        $data['pesanan'] = $this->model_pesanan->tampil_pesanan($toko['id_toko']);
        $data['makanan']= $this->model_makanan->get_makanan_acak($toko['id_toko']);
        $this->load->view('/header');
        $this->load->view('navbar3');
        $this->load->view('Toko/view_toko',$data);
        $this->load->view('footer');
   }
   public function detail_pesanan($id){
        $username = $this->session->userdata('username');
        $toko = $this->model_makanan->getIdbyUsername($username);
        $data['detail_pesanan'] = $this->model_pesanan->tampil_detail_pesanan($id,$toko['id_toko']);
        $data['idpesanan'] = $this->model_pesanan->getIdpesanan($id);
        $this->load->view('header');
        $this->load->view('navbar3');
        $this->load->view('Toko/view_detail_pesanan',$data);
        $this->load->view('footer');
   }
}