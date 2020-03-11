<?php
Class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('login/te_login');
	}

	public function register(){
		$this->load->view('login/te_register');
	}

	public function do_register(){
		redirect('login');
	}

	public function auth(){
		redirect('main');
	}

	public function logout(){
		redirect('');
	}
}