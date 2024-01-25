<?php
class keranjang extends CI_Controller{
    public function index()
    {
        $username = $this -> Foodoo_model -> getAkun();
        $this -> load -> view('header');
        $this -> load -> view('navbar2',$username);
        $this -> load -> view('shopping_cart');
        $this -> load -> view('footer');    
    }

    public function TambahKeKeranjang($id_makanan)
    {
        $makanan = $this -> Foodoo_model -> FindIDMakanan($id_makanan);
        $DATA = array(
            'id'      => $makanan -> id_makanan,
            'qty'     => 1,
            'price'   => $makanan -> harga,
            'name'    => $makanan -> nama,
            'options' => array('image' => $makanan -> img)
        );
        $this -> cart -> insert($DATA);
        redirect(base_url('index.php/CKategori/viewkategoriUser'));
    }

    public function HapusKeranjang()
    {
        $this -> cart-> destroy();
        redirect(base_url('index.php/CKategori/viewkategoriUser'));
    }
}
?>