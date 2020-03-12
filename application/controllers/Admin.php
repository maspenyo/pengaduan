<?php
Class Admin extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		//$this->load->view('blank');
		$data['title'] = "Dashboard";
		$this->template->load_admin('index','dashboard/default_dashboard',$data);
	}

	public function profile(){
		$data['title'] = "Profil";
		$this->template->load_admin('index','profile',$data);
	}

	public function ubahpassword(){
		redirect('admin/profile');
	}

	public function ubahprofile(){
		redirect('admin/profile');
	}
}