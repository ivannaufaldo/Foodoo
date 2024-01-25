<?php 
class riwayat_pesanan extends CI_Controller
{
    public function index()
    {
        $idpembeli = $this -> Foodoo_model -> FindIDPembeli($this -> session -> userdata('username'));
        $pesanan = $this -> Foodoo_model -> getRiwayatPesanan($idpembeli -> id_pembeli);
        $data = array('pesanan' => $pesanan);
        $this -> load -> view('header');
        $this -> load -> view('navbar2');
        $this -> load -> view('riwayat_pesanan', $data);
        $this -> load -> view('footer');  
    }
}
?>