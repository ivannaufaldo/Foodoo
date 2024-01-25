<?php
class edit_profile extends CI_Controller
{
    public function index()
    {
        $profile = $this -> Foodoo_model -> getDataPembeli($this -> session -> userdata('username'));
        $data = array('profile' => $profile);

        $this -> load -> view('header');
        $this -> load -> view('navbar2');
        $this -> load -> view('profile_user',$data);
        $this -> load -> view('footer');
    }

    public function UpdateProfile()
    {
        $id_pembeli = $this -> input -> post('id_pembeli');
        $nama = $this -> input -> post('nama');
        $no_telp = $this -> input -> post('no_telp');
        $umur = $this -> input -> post('umur');
        $alamat = $this -> input -> post('alamat');
        $data = array(
            'nama' => $nama,
            'no_telp' => $no_telp,
            'umur' => $umur,
            'alamat' => $alamat,
        );

        $where = array(
            'id_pembeli' => $id_pembeli
        );
        $this -> Foodoo_model -> EditProfile($where,$data,'user_pembeli');    
        redirect(base_url('index.php/edit_profile/index'));  
    }

    public function pageeditpicture()
    {
        $profile = $this -> Foodoo_model -> getDataPembeli($this -> session -> userdata('username'));
        $data = array('profile' => $profile);
        $this -> load -> view('header');
        $this -> load -> view('change_picture',$data);
    }

    public function updatepicture()
    {
        $id_pembeli = $this -> input -> post('id_pembeli');
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

        $data = array (
            'img' => $gambar
        );

        $where = array(
            'id_pembeli' => $id_pembeli
        );
        $this -> Foodoo_model -> EditProfile($where,$data,'user_pembeli');    
        redirect(base_url('index.php/edit_profile/index'));      
    }
}
?>
