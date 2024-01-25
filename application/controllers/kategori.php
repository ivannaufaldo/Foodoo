<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class kategori extends CI_Controller{
	
	public function add(){
		if($this->form_validation->set_rules('nama', 'NAMA','required')->run()){
			$this->m_kategori->save();
			redirect('admin_dashboard');
		}
		$this->load->view('header');
		$this->load->view('navbar4');
		$this->load->view('view_add_kategori');
		$this->load->view('footer');
	}
	
	public function edit(){
		$id_kategori = $this->uri->segment(3);
		$result = $this->m_kategori->get_kategori_id($id_kategori);
		if($result->num_rows() > 0){
			$i = $result->row_array();
			$data = array('id_kategori'=>$i['id_kategori'], 'nama'=>$i['nama']);
			$this->load->view('header');
			$this->load->view('navbar4');
			$this->load->view('view_edit_kategori', $data);
			$this->load->view('footer');
		}else{
			echo "Data tidak ditemukan";
		}
	}

	public function update(){
		$id_kategori = $this->input->post('id');
		$nama = $this->input->post('nama');
		$data = array(
			'nama'=>$nama
		);
		$where = array(
			'id_kategori'=>$id_kategori
		);
		$this->m_kategori->update_data($where, $data, 'kategori');
		redirect('admin_dashboard');
	}
	
	public function delete()
	{
		$id_kategori = $this->input->post('id');
		$this->m_kategori->delete($id_kategori);
		redirect('admin_dashboard');
	}

	public function viewkonfirmasidelete(){
		$id_kategori = $this->uri->segment(3);
		$result = $this->m_kategori->get_kategori_id($id_kategori);
		if($result->num_rows() > 0){
			$i = $result->row_array();
			$data = array('id_kategori'=>$i['id_kategori'], 'nama'=>$i['nama']);
			$this->load->view('header');
			$this->load->view('view_delete_kategori', $data);
		}else{
			echo "Data tidak ditemukan";
		}
	}
}