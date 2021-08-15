<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Khs_model extends CI_Model{

    public function tampilkhs(){
        $query = "SELECT kelas, matakuliah.semester, krs.kode_matkul, matakuliah.nama_matkul, khs.nilai
        FROM khs 
        JOIN krs
        ON krs.id = khs.id_krs
        JOIN matakuliah
        ON matakuliah.kode_matkul = krs.kode_matkul
        where matakuliah.semester = 1";
        return $this->db->query($query)->result_array();
    }
}

?>