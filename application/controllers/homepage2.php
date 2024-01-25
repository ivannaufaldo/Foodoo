<?php
class homepage2 extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this -> load -> database();
        $this->load -> library('cart');
        $this -> load -> model('Foodoo_model');
        $this->m_account->cek_login();
    }
    
    public function index()
    {   
        $rekomendasimakanan = $this -> Foodoo_model -> getMakanan();
        $DATA = array('rekomendasimakanan' => $rekomendasimakanan);
        $this -> load -> view('header');
        $this -> load -> view('navbar2');
        $this -> load -> view('homepage',$DATA);
        $this -> load -> view('footer');
    }} 
?>