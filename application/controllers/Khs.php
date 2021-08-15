<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Khs extends CI_Controller {

	public function index()
	{
		
		$this->load->model('Khs_model', 'khs');
		$data['tampil'] = $this->khs->tampilkhs();

		$this->load->view('template/header_portal.php');
		$this->load->view('template/sidebar_portal.php');
		$this->load->view('template/topbar_portal.php');
		$this->load->view('khs/index.php', $data);
		$this->load->view('template/footer_portal.php');
	}
}
