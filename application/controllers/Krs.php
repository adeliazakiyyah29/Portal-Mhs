<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Krs extends CI_Controller {

	public function index()
	{
		// $data['tampilkrs'] = $this->db->get('krs')->result_array();
		$this->load->model('Krs_model', 'krs');
		$data['tampil'] = $this->krs->tampilkrs();
		//$data['tmbh'] = $this->krs->tambah_krs();

		$this->load->view('template/header_portal.php');
		$this->load->view('template/sidebar_portal.php');
		$this->load->view('template/topbar_portal.php');
		$this->load->view('krs/index.php', $data);
		$this->load->view('template/footer_portal.php');
	}

	public function tambah_krs()
	{
		// $data['tampilkrs'] = $this->db->get('krs')->result_array();
		$this->load->model('Krs_model', 'krs');
		$data['tampil'] = $this->krs->tampilkrs();

		$this->load->model('Matkul_model', 'mk');
		$data['tampilkodematkul'] = $this->mk->tampilmatkul();

		$this->load->view('template/header_portal.php');
		$this->load->view('template/sidebar_portal.php');
		$this->load->view('template/topbar_portal.php');
		$this->load->view('krs/krs_tambah.php', $data);
		$this->load->view('template/footer_portal.php');
	}

	public function aksi_tambah_krs()
	{
		// $data['tampilkrs'] = $this->db->get('krs')->result_array();
		$kelas = $this->input->post('kelas');
		$kode_matkul = $this->input->post('kode_matkul');

		$data = array(
			'kelas' => $kelas,
			'kode_matkul' => $kode_matkul,
			'thn_akademik' => "2020/2021"
		);
		$this->load->model('Krs_model', 'krs');
		$this->krs->input_data($data,'krs');
		redirect('krs/');
	}

	public function hapuskrs($id){
		$this->load->model('Krs_model', 'krs');
		$where = array('id' => $id);
		$this->krs->hapus_data($where,'krs');

		redirect('krs/');
	}
}
