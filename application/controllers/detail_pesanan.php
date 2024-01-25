<?php
class detail_pesanan extends CI_Controller{
    public function index($idpesanan)
    {
        $data['detail_pesanan'] = $this -> Foodoo_model -> getDetailPesanan($idpesanan);
        $data['id_detail_pesanan'] = $this -> Foodoo_model -> getIDDetailPesanan($idpesanan);
        $this -> load -> view('header');
        $this -> load -> view('navbar2',$this -> session -> userdata('username'));
        $this -> load -> view('detail_pesanan',$data);
        $this -> load -> view('footer');
    }
}
?>