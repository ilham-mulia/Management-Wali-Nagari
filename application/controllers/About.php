<?php

class About extends CI_Controller {
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
	}
	public function index()
	{
		$data=array(
			"title"=>'Tentang Desa',
			"menu"=>getmenu(),
			"aktif"=>"about",
			"getrow"=>$this->db->get('desa')->row_array(),
			"content"=>"about/index.php",
		);
		$this->breadcrumb->append_crumb('Tentang Desa', site_url('about'));
		$this->load->view('admin/templatedash',$data);
	}


}
