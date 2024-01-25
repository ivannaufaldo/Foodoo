<?php 
class model_kategori extends CI_Model{
    public function tampil_kategori(){
        return $this->db->get('kategori');
    }
    public function getKategoriBynama($kategori_nama){
        return $this->db->get_where('kategori', ['nama'=>$kategori_nama])->row_array();
    }
        
}

?>