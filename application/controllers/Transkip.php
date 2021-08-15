<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transkip extends CI_Controller {

	public function index()
	{
		// $data['tampilkrs'] = $this->db->get('krs')->result_array();
		$this->load->model('Transkip_model', 'transkip');
		$data['tampil'] = $this->transkip->transkip();
		$data['jms']= $this->transkip->count_sks();
		$data['ipk']= $this->transkip->ipk();

		$this->load->view('template/header_portal.php');
		$this->load->view('template/sidebar_portal.php');
		$this->load->view('template/topbar_portal.php');
		$this->load->view('transkip/index.php', $data);
		$this->load->view('template/footer_portal.php');
	}
}
