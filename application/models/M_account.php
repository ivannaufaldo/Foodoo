<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_account extends CI_Model{
	// SET SUPER GLOBAL
  var $CI = NULL;

  public function __construct() {
      $this->CI =& get_instance();
  }

  public function login($username, $password) {

      //cek username dan password
      $query = $this->CI->db->get_where('user_pembeli',array('username'=>$username,'password' => md5($password)));

      if($query->num_rows() == 1) {
          //ambil data user berdasar username
          $row  = $this->CI->db->query('SELECT id_pembeli FROM user_pembeli where username = "'.$username.'"');
          $admin     = $row->row();
          $id   = $admin->id_user;

          //set session user
          $this->CI->session->set_userdata('username', $username);
          $this->CI->session->set_userdata('id_login', uniqid(rand()));
          $this->CI->session->set_userdata('id', $id);
        
          //redirect ke halaman dashboard
          redirect(base_url('index.php/homepage2'));
      }else{

          //jika tidak ada, set notifikasi dalam flashdata.
          $this->CI->session->set_flashdata('sukses','Username atau password anda salah, silakan coba lagi.. ');

          //redirect ke halaman login
          redirect(site_url('login'));
      }
       return false;
   }

  public function cek_login() {

      //cek session username
      if($this->CI->session->userdata('username') == '') {

          //set notifikasi
          $this->CI->session->set_flashdata('sukses','Anda belum login');

          //alihkan ke halaman login
          redirect(site_url('login'));
      }
  }

  public function logout() {
      $this->CI->session->unset_userdata('username');
      $this->CI->session->unset_userdata('id_login');
      $this->CI->session->unset_userdata('id');
      redirect(base_url('index.php/homepage'));
  }

    function daftar($data)
    {
         $this->db->insert('user_pembeli',$data);
    }
}
?>