<?php
class Pengaduan extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){

	}

	public function input(){
		$data['title'] = "Pengaduan";
		$this->template->load_admin('index','pengaduan/default_input',$data);
	}

	public function data(){
		$data['title'] = "Pengaduan";
		$this->template->load_admin('index','pengaduan/default_table',$data);
	}

}