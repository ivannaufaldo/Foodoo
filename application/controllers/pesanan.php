<?php
class pesanan extends CI_Controller
{
    public function OrderPesanan()
    {
        $idpembeli = $this -> Foodoo_model -> FindIDPembeli($this -> session -> userdata('username'));
        $this -> Foodoo_model -> OrderPesanan($idpembeli -> id_pembeli);
        $this -> cart -> destroy();  
        redirect(base_url('index.php/riwayat_pesanan/index'));
    }

    public function konfirmasiPesanan($idpesanan)
    {
        $this -> Foodoo_model -> konfirmasiPesanan($idpesanan);
        redirect(base_url('index.php/riwayat_pesanan/index'));
    }

    public function viewkonfirmasiPesanan($id_pesanan)
    {
        $pesanan = $this -> Foodoo_model -> getPesanan($id_pesanan);
        $data = array('pesanan' => $pesanan);
        $this -> load -> view('header');
        $this -> load -> view('konfirmasi_pesanan',$data);
    }
}
?>