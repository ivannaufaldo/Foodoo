<?php 	
	class CKategori extends CI_Controller{
		public function viewkategoriHome(){
			$data['makanan'] = $this->model_makanan->tampil_makanan()->result_array();
			$data['kategori'] = $this->model_kategori->tampil_kategori()->result();
			$this->load->view('header');
			$this->load->view('navbar');
			$this->load->view('kategori', $data);
			$this->load->view('footer');
		}

		public function viewkategoriUser(){
			$data['makanan'] = $this->model_makanan->tampil_makanan()->result_array();
			$data['kategori'] = $this->model_kategori->tampil_kategori()->result();
			$this->load->view('header');
			$this->load->view('navbar2');
			$this->load->view('kategori2', $data);
			$this->load->view('footer');
		}

		public function viewkategoriToko(){
			$data['makanan'] = $this->model_makanan->tampil_makanan()->result_array();
			$data['kategori'] = $this->model_kategori->tampil_kategori()->result();
			$this->load->view('header');
			$this->load->view('navbar3');
			$this->load->view('Toko/makanan', $data);
			$this->load->view('footer');
		}

		public function KategoriNamaHome(){
			$nama_Kategori= $this->input->get('filter');
			$kategori = $this->model_kategori->getKategoriBynama($nama_Kategori);
			$data['makanan'] = $this->model_makanan->getmakananBykategori($kategori['id_kategori']);
			$data['kategori'] = $this->model_kategori->tampil_kategori()->result();
			$this->load->view('header');
			$this->load->view('navbar');
			$this->load->view('kategori', $data);
			$this->load->view('footer');
		}

		public function KategoriNamaUser(){
			$nama_Kategori= $this->input->get('filter');
			$kategori = $this->model_kategori->getKategoriBynama($nama_Kategori);
			$data['makanan'] = $this->model_makanan->getmakananBykategori($kategori['id_kategori']);
			$data['kategori'] = $this->model_kategori->tampil_kategori()->result();
			$this->load->view('header');
			$this->load->view('navbar2');
			$this->load->view('kategori2', $data);
			$this->load->view('footer');
		}

		public function KategoriNamaToko(){
			$nama_Kategori= $this->input->get('filter');
			$kategori = $this->model_kategori->getKategoriBynama($nama_Kategori);
			$data['makanan'] = $this->model_makanan->getmakananBykategori($kategori['id_kategori']);
			$data['kategori'] = $this->model_kategori->tampil_kategori()->result();
			$this->load->view('header');
			$this->load->view('navbar3');
			$this->load->view('Toko/makanan', $data);
			$this->load->view('footer');
		}
	}
 ?>