<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('portal_index');
	}

	public function login(){
		$this->load->view('portal/portal_login');
	}

	public function auth(){
		redirect('welcome/main');
	}	

	public function registrasi(){
		$this->load->view('portal/portal_registrasi');
	}

	public function do_registrasi(){
		redirect('welcome/login');
	}

	public function logout(){
		redirect('');
	}	

	public function main(){
		$data['title'] = "Dashboard";
		$this->template->load_admin('portal/portal_index','portal/portal_dashboard',$data);
	}

	public function profile(){
		$data['title'] = "Profil";
		$this->template->load_admin('portal/portal_index','portal/portal_profile',$data);
	}

	public function ubahprofile(){
		redirect('welcome/profile');
	}

	public function ubahpassword(){
		redirect('welcome/profile');
	}

	public function input(){
		$data['title'] = "Pengaduan";
		$this->template->load_admin('portal/portal_index','portal/portal_input',$data);
	}

	public function data(){
		$data['title'] = "Pengaduan";
		$this->template->load_admin('portal/portal_index','portal/portal_data_pengaduan',$data);
	}

}
