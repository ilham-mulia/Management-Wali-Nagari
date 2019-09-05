<?php

class User extends CI_Controller {
	function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$config['tag_open'] = '<ul class="breadcrumb">';
		$config['tag_close'] = '</ul>';
		$config['li_open'] = '<li>';
		$config['li_close'] = '</li>';
		$config['divider'] = '<span class="divider"> » </span>';
		$this->breadcrumb->initialize($config);
		no_access();
		levelsuper();
	}
	public function index()
	{
		$data=array(
			"title"=>'Manajemen Akses',
			"menu"=>getmenu(),
			"all"=>$this->db->get('admin')->result(),
			"aktif"=>"user",
			"content"=>"user/index.php",
		);
		$this->breadcrumb->append_crumb('User', site_url('user'));
		$this->load->view('admin/template',$data);
	}

	public function add()
	{
			$data=array(
				"id_admin"=>$_POST['id_admin'],
				"username"=>$_POST['username'],
				'password' => md5($this->input->post('password')),
				"akses"=>$_POST['akses'],
				"status"=>1,
			);
			$this->db->insert('admin',$data);
			$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
			redirect('User');
	}

	public function edit()
	{
			$data=array(
				"username"=>$_POST['username'],
				'password' => md5($this->input->post('password')),
				"akses"=>$_POST['akses'],
			);
			$this->db->where('id_admin', $_POST['id_admin']);
			$this->db->update('admin',$data);
			$this->session->set_flashdata('sukses',"Data Berhasil Diedit");
			redirect('User');

	}

	public function hapus($id_admin)
	{
			$this->db->where('id_admin', $id_admin);
			$this->db->delete('admin');
			$this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
			redirect('User');
	}

}
