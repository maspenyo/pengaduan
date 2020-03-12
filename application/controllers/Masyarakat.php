<?php
class Masyarakat extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['title'] = "Masyarakat";
		$this->template->load_admin('index','masyarakat/default_table',$data);
	}
}