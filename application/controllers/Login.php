<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		in_access();
		$this->load->model('M_login');
	}

	public function index()
	{
		$this->load->view('login.php');
	}
	public function masuak(){
		$username=$this->security->sanitize_filename($_POST['username']);
		$password=$this->security->sanitize_filename($_POST['password']);
		$ceknum=$this->M_login->ceknum($username,md5($password))->num_rows();
		$rows=$this->M_login->ceknum($username,md5($password))->row_array();

		if($ceknum>0){
			$this->session->set_userdata('user',$username);
			$this->session->set_userdata('id_penduduk',$rows['id_penduduk']);
			$this->session->set_userdata('level',$rows['akses']);
			redirect('Welcome');
		}else{
			echo '<script>alert("Kwkwk Gagal Login Ham")</script>';
		}
	}
}
