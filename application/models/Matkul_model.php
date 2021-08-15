<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul_model extends CI_Model{

    public function tampilmatkul(){
        $query = "SELECT * FROM matakuliah";
        return $this->db->query($query)->result_array();
    }
}

?>