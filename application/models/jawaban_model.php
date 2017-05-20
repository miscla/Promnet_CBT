<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jawaban_model extends Ci_Model {

  public function Ambil() {
    $data = $this->db->query('select * from jawaban, mahasiswa where jawaban.id_mhs=mahasiswa.id_mhs');
    return $data;
  }

  public function AmbilPaket($id) {
    $data = $this->db->query("select * from jawaban where id_jawaban='$id'");
    return $data;
  }

  public function AmbilNilai2($idmhs) {
    $data = $this->db->query("select * from jawaban, mahasiswa where jawaban.id_mhs=mahasiswa.id_mhs AND jawaban.id_mhs='$idmhs'");
    return $data;
  }

  public function Simpan($tabel, $data){
    $res = $this->db->insert($tabel, $data);
    return $res;
  }

  public function Rubah($soal,$data)
  {
    $this->db->where('id_soal',$soal);
    $this->db->update('soal',$data);

  }

  public function Hapus($table,$where){
    return $this->db->delete($table,$where);
  }

  public function UpdateTotalNilai($id_jawaban,$data)
  {
    $this->db->where('id_jawaban',$id_jawaban);
    $this->db->update('jawaban',$data);

  }
}