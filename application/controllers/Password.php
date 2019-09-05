<?php

class Password extends CI_Controller {
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
			"title"=>'Tukar Password',
			"menu"=>getmenu(),
			"aktif"=>"pas",
			"content"=>"password.php",
		);
		$this->breadcrumb->append_crumb('Password', site_url('password'));
		$this->load->view('admin/templatedash',$data);
	}

  
  }
