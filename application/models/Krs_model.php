<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Krs_model extends CI_Model{

    public function tampilkrs(){
        $query = "SELECT id, kelas, matakuliah.semester, krs.kode_matkul, matakuliah.nama_matkul 
        FROM krs 
        JOIN matakuliah 
        ON matakuliah.kode_matkul = krs.kode_matkul";
        return $this->db->query($query)->result_array();
    }

    function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	 function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
}
}

?>