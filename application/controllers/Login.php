<?php
class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();

	}

	public function index(){
		$this->load->view('login/te_login');
	}

	public function login(){
		$this->load->view('login/te_login');
	}

	public function auth(){
		redirect('admin');
	}

	public function logout(){
		redirect('admin');
	}

}