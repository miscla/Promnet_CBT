<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jawaban_detail_model extends Ci_Model {  

	public function Simpan($tabel, $data){
		$res = $this->db->insert($tabel, $data);
		return $res;
	}
	  
	public function AmbilHasilTes($where= "") {
		$data = $this->db->query('select * from jawaban_detail '.$where);
		return $data;
	}

	public function UpdateNilai($id_jawaban,$data)
	{
		$this->db->where('id_jawaban_detail',$id_jawaban);
		$this->db->update('jawaban_detail',$data);

	}
}