<?php
class Petugas extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['title'] = "Petugas";
		$this->template->load_admin('index','petugas/default_table',$data);
	}
}