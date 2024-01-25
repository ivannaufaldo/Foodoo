<?php 
	class model_pesanan extends CI_Model{
		public function tampil_detail_pesanan($idpesanan, $idtoko){
			$query = $this->db->query('SELECT d.jumlah, d.harga, m.nama
										From detail_pesanan d
										JOIN makanan m on d.id_makanan = m.id_makanan
										WHERE d.id_pesanan ='.$idpesanan.' AND m.id_toko='.$idtoko.'');
			return $query->result_array();
		}
		public function tampil_pesanan($idtoko){
			$query = $this->db->query('SELECT DISTINCT pesanan.id_pesanan FROM pesanan
						INNER JOIN detail_pesanan ON detail_pesanan.id_pesanan  = pesanan.id_pesanan
						INNER JOIN makanan ON makanan.id_makanan = detail_pesanan.id_makanan
						WHERE pesanan.konfirmasi_pesanan="0" AND makanan.id_toko ='.$idtoko);
			return $query->result_array();
		}
		public function getIdpesanan($id){
			return $id;
		}
	}
 ?>