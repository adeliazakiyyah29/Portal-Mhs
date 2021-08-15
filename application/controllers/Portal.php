<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header_portal.php');
		$this->load->view('template/sidebar_portal.php');
		$this->load->view('template/topbar_portal.php');
		$this->load->view('portal/index.php');
		$this->load->view('template/footer_portal.php');
	}
}
