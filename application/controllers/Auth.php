<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header_auth.php');
		$this->load->view('auth/login.php');
		$this->load->view('template/footer_auth.php');
	}

	public function proses_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
		);
		$cek = $this->m_login->cek_login("/Portal",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("/Auth"));

		}else{
			echo "Username dan password salah !";
		}
	
	}


	//function logout
	public function logout(){
		$this->session->sess_destroy();
		redirect('/Auth');
	}
}
