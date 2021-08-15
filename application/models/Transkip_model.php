<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transkip_model extends CI_Model{

    public function transkip(){
       $query = "SELECT kelas, matakuliah.semester, krs.kode_matkul, matakuliah.nama_matkul, khs.nilai
        FROM khs 
        JOIN krs
        ON krs.id = khs.id_krs
        JOIN matakuliah
        ON matakuliah.kode_matkul = krs.kode_matkul";
        return $this->db->query($query)->result_array();
    }

    public function count_sks(){
    	$query = "SELECT SUM(matakuliah.sks) FROM matakuliah JOIN krs ON matakuliah.kode_matkul = krs.kode_matkul JOIN khs ON krs.id = khs.id_krs WHERE khs.id";
    	$result = $this->db->query($query);
    	return $result->row();
    }

    public function ipk(){
    	$this->db->select_sum('nilai');
    	$query = $this->db->get('khs');

    }
}

?>