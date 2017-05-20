<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modeladmin extends Ci_Model {	
	public function AmbilDetailNilai($idjawaban) {
		$data = $this->db->query("select * from jawaban_detail a, soal b where a.id_soal=b.id_soal AND a.id_jawaban='$idjawaban'");
		return $data;
	}

	public function AmbilTotalNilai($idjawaban) {
		$data = $this->db->query("select * from jawaban where id_jawaban='$idjawaban'");
		return $data;
	}

	public function AmbilPaket() {
		$data = $this->db->query("select id_paket from jawaban_detail ");
	}

	public function AmbilJawabanABCD($kode = 0, $abcd) {
		$data = $this->db->query("select * from soal where id_soal = '$kode'")->result_array();
		if($abcd=='A'){
			return $data[0]['a'];
		}
		else if($abcd=='B'){
			return $data[0]['b'];
		}
		else if($abcd=='C'){
			return $data[0]['c'];
		}
		else if($abcd=='D'){
			return $data[0]['d'];
		}
	}					

	public function UpdateSoal($soal, $data)
	{
		$this->db->where('id_soal', $soal);
		$this->db->update('soal', $data);

	}

	function UpdateKonten($data){
        $this->db->where('id_soal',$data['id_soal']);
        $this->db->update('soal',$data);
    }

    //Mahasiswa	   

	function UpdateMhs($data){
        $this->db->where('id_mhs',$data['id_mhs']);
        $this->db->update('mahasiswa',$data);
    }

    //Peserta    

    public function getMHS($id){
        $this->db->where('nim',$id);
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }    


    //Peserta

    public function cek_user($data){
		$query = $this->db->get_where('user',$data);
		return $query;
	}

	public function userData($username) 
  { 
    $this->db->select('username'); 
    $this->db->select('nama'); 
    $this->db->where('username', $username); 
    $query = $this->db->get('user'); 
    return $query->row(); 
  }	
}