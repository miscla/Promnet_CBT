<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa_model extends Ci_Model {

  public function Ambil($where= "") {
      $data = $this->db->query('select * from mahasiswa '.$where);
      return $data;
  }

  public function Simpan($tabel, $data){
    $res = $this->db->insert($tabel, $data);
    return $res;
  }

  public function Rubah($data)
  {
    $this->db->where('id_mhs',$data['id_mhs']);
    $this->db->update('mahasiswa',$data);

  }

  public function Hapus($table,$where){
    return $this->db->delete($table,$where);
  }

  public function AmbilIdMhs($nim = '') {
    $data = $this->db->query("select * from mahasiswa where nim = '$nim'")->result_array();
    return $data[0]['id_mhs'];
  }
}