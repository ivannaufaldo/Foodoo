<?php 
class model_makanan extends CI_Model{
    public function tampil_makananByToko($idtoko){
        // nanti harus diganti id toko => sesssion
        return $this->db->get_where('makanan',['id_toko'=> $idtoko])->result_array();
    }

    public function tampil_makanan()
    {
        return $this -> db -> get('makanan');
    }

    public function getmakananBykategori($idkategori){
        return $this->db->get_where('makanan',['id_kategori'=>$idkategori])->result_array();
    }
    public function getIdbyUsername($username){
        return $this->db->get_where('toko', ['username'=>$username])->row_array();
    }
    public function tambah_menu($data, $table){
        $this->db->insert($table,$data);
    }
    public function edit_makanan($where, $table){
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    public function delete_makanan($where, $table){
        return $this->db->get_where($table, $where);
    }
    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function get_makanan_acak($idtoko){
        $this->db->order_by('rand()');
        return $this->db->get_where('makanan',['id_toko'=> $idtoko])->result_array();
    }
}
?>