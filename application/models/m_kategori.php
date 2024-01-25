<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class m_kategori extends CI_Model{
	// SET SUPER GLOBAL
	var $CI = NULL;

	public function __construct() {
		$this->CI =& get_instance();
	}
	
	public function getData(){
		return $this->db->get('kategori');
	}
	
	public function get_kategori_id($id_kategori){
		$query = $this->db->get_where('kategori', array('id_kategori'=>$id_kategori));
		return $query;
	}
	
	public function save(){
		$data['nama'] = $this->input->post('nama');
		return $this->db->insert('kategori', $data);
	}
	
	public function update_data($where, $data,  $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
	
	public function delete($id_kategori){
		$query = $this -> CI -> db -> get_where('makanan',array('id_kategori'=>$id_kategori));
		if($query -> num_rows() == 0)
		{
			$this->db->where('id_kategori', $id_kategori);
			$this->db->delete('kategori');
		}
    }
}