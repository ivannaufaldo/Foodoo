<?php 	
	class makanan_toko extends CI_Controller{
		public function index(){
			//nanti harus diganti
			$username = $this->session->userdata('username');
			$toko = $this->model_makanan->getIdbyUsername($username);
			$data['makanan'] = $this->model_makanan->tampil_makananByToko($toko['id_toko']);
			$data['kategori'] = $this->model_kategori->tampil_kategori()->result();
			$this->load->view('header');
			$this->load->view('navbar3');
			$this->load->view('Toko/makanan', $data);
			$this->load->view('footer');
		}

		public function form_tambah_makanan(){
			$this->load->view('header');
			$this->load->view('navbar3');
			$data['kategori'] = $this->model_kategori->tampil_kategori()->result();
			$this->load->view('Toko/View_tambah_makanan',$data);
			$this->load->view('footer');
		}
		public function tambah_makanan(){
			$username = $this->session->userdata('username');
			$toko = $this->model_makanan->getIdbyUsername($username);
			$nama = $this->input->post('nama');
			$harga = $this->input->post('harga');
			$kategori = $this->input->post('kategori');
			$deskripsi = $this->input->post('deskripsi');
			$gambar = $_FILES['gambar']['name'];
			if ($gambar =''){}else{
				$config ['upload_path'] = './assets/Picture';
				$config ['allowed_types'] = 'jpg|jpeg|png';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('gambar')){
					echo "Gambar gagal di upload";
				}else{
					$gambar = $this->upload->data('file_name');
				}
			}
			$data = array(
				'nama' => $nama,
				'deskripsi' => $deskripsi,
				'harga' => $harga,
				'img' => $gambar,
				'id_kategori' => $kategori,
				'id_toko' => $toko['id_toko']			
			);
			$this->model_makanan->tambah_menu($data, 'makanan');
			redirect('Toko/makanan_toko/index');
		}
		public function edit ($id){
			$where = array('id_makanan'=> $id);
			$data['makanan'] = $this->model_makanan->edit_makanan($where, 'makanan')->result();
			$data['kategori'] = $this->model_kategori->tampil_kategori()->result();
			$this->load->view('header');
			$this->load->view('navbar3');
			$this->load->view('Toko/View_edit_makanan',$data);
			$this->load->view('footer'); 
		}
		public function update(){
			$id = $this->input->post('id_makanan');
			$nama = $this->input->post('nama');
			$harga = $this->input->post('harga');
			$kategori = $this->input->post('kategori');
			$deskripsi = $this->input->post('deskripsi');
			if(($gambar = $_FILES['gambar']['name'])!=''){
				$gambar = $_FILES['gambar']['name'];
				if ($gambar =''){}else{
					$config ['upload_path'] = './assets/Picture';
					$config ['allowed_types'] = 'jpg|jpeg|png';

					$this->load->library('upload', $config);
					if(!$this->upload->do_upload('gambar')){
						echo "Gambar gagal di upload";
					}else{
						$gambar = $this->upload->data('file_name');
					}
				}
				$data = array(

					'nama' => $nama,
					'deskripsi' => $deskripsi,
					'harga' => $harga,
					'img' => $gambar,
					'id_kategori' => $kategori
				);
			}else{
				$data = array(
					'nama' => $nama,
					'deskripsi' => $deskripsi,
					'harga' => $harga,
					'id_kategori' => $kategori
				);
			}

			$where = array(
				'id_makanan' => $id
			);

			$this->model_makanan->update_data($where,$data, 'makanan');
			redirect('Toko/makanan_toko/index');
		}
		public function view_delete($id){
			$where = array('id_makanan'=> $id);
			$data['makanan'] = $this->model_makanan->delete_makanan($where, 'makanan')->result();
			$this->load->view('header');
			$this->load->view('Toko/View_delete_makanan',$data);
		}
		public function delete(){
			$id = $this->input->post('id_makanan');
			$where = array('id_makanan' => $id);
			$this->model_makanan->hapus_data($where, 'makanan');
			redirect('Toko/makanan_toko/index');
		}
	}
 ?>