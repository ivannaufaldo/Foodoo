<?php
class Foodoo_model extends CI_model 
{
    public function getMakanan()
    {
        $this -> db -> order_by('rand()');
        $query = $this -> db -> get('makanan');
        return $query -> result_array();
    }

    public function getAkun()
    {
        $this -> db -> select("username");
        $this -> db -> from("user_pembeli");
        $this -> db -> where("id_pembeli",1);
        $query = $this -> db -> get();
        if($query -> num_rows() > 0)
        {
            return $query -> row();
        }
        else{
            return array();
        }
    }

    public function getDataPembeli($username)
    {
        $this -> db -> where('username', $username);
        $query = $this -> db -> get('user_pembeli');
        return $query -> result_array();                     
    }

    public function getKategori(){
        $query = $this -> db -> get('kategori');
        return $query -> result_array();
    }

    public function FindIDMakanan($id_makanan)
    {
        $result = $this -> db -> where('id_makanan',$id_makanan)
                              -> limit(1)
                              -> get('makanan');
        if($result -> num_rows() > 0)
        {
            return $result -> row();
        }                    
        else
        {
            return array();
        }
    
    }  

    public function OrderPesanan($id_pembeli)
    {
        $total_harga = $this -> cart -> total();
        $total_item = $this -> cart -> total_items();
        $alamat = $this -> input -> post('Alamat');
        foreach($this -> cart -> contents() as $items)
        {
            $data = array(
                'id_pembeli' => $id_pembeli, 
                'jumlah_makanan' => $total_item, 
                'total_harga' => $total_harga,
                'alamat_pemesanan' => $alamat 
            );
        }
        $this -> db -> insert('pesanan', $data);
        $id_pesanan = $this -> db -> insert_id();

        foreach($this -> cart -> contents() as $items)
        {
            $data1 = array(
                'id_pesanan' => $id_pesanan,
                'id_makanan' => $items['id'],
                'jumlah' => $items['qty'],
                'harga' => $items['price']
            );
            $this -> db -> insert('detail_pesanan',$data1);
        }
        
    }

    public function FindIDPembeli($username)
    {
        $this -> db -> select('id_pembeli');
        $this -> db -> from('user_pembeli');
        $this -> db -> where('username',$username);
        $query = $this -> db -> get();
        if($query -> num_rows() > 0)
        {
            return $query -> row();
        }
        else{
            return array();
        }
    }

    public function FindIDPesanan($username)
    {
        $this -> db -> select('id_pesanan');
        $this -> db -> from('pesanan');
        $this -> db -> where('username',$username);
        $query = $this -> db -> get();
        if($query -> num_rows() > 0)
        {
            return $query -> row();
        }
        else{
            return array();
        }
    }

    public function getRiwayatPesanan($id_pembeli)
    {
        $result = $this -> db -> where('id_pembeli',$id_pembeli)
                              -> where('konfirmasi_pesanan',0)
                              -> get('pesanan');
        return $result -> result_array();
    }

    public function getPesanan($id_pesanan)
    {
        $result = $this -> db -> where('id_pesanan',$id_pesanan)
                              -> get('pesanan');
        return $result -> result_array();
    }

    public function konfirmasiPesanan($id_pesanan)
    {
        $this -> db -> set('konfirmasi_pesanan',1);
        $this -> db -> where('id_pesanan',$id_pesanan);
        $this -> db -> update('pesanan');
    }

    public function getDetailPesanan($id_pesanan)
    {
        $result = $this -> db -> query("SELECT makanan.nama , detail_pesanan.jumlah ,  detail_pesanan.harga
                                        FROM detail_pesanan
                                        INNER JOIN makanan ON makanan.id_makanan = detail_pesanan.id_makanan
                                        WHERE id_pesanan = ".$id_pesanan."");
        if($result -> num_rows() > 0)
        {
            return $result -> result_array();
        }
        else{
            return false;
        }
    }  

    public function getIDDetailPesanan($id_pesanan)
    {
        $result = $this -> db -> where('id_pesanan',$id_pesanan)
                        -> get('detail_pesanan');
        if($result -> num_rows() > 0)
        {
            return $result -> row();
        }
        else{
            return false;
        }
    }  

    public function EditProfile($where, $data, $table)
    {
        $this -> db -> where($where);
        $this -> db -> update($table , $data);
    }
}
?>