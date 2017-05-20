<?php
class cekJawaban extends CI_Controller { 
    
    function hasiltes(){
	$datastring = "Login: %d-%m-%Y pukul %h-%i %a";
	$time = time();
	$data_atas = array();
	$session = isset($_SESSION['username']) ? $_SESSION['username']:'';
	if($session!=""){
	    $pecah=explode("|",$session);
	    $data_atas["no_reg"]=$pecah[0];
	    $data_atas["nama"]=$pecah[1];
	}
	$nama=$data_atas["nama"];
	$data_atas["tanggal"]=mdate($datastring,$time);
	$data=array();
	$jumlah = $this->input->post('banyak_soal');
	$jawaban = $this->input->post('pilih');
	$soal = $this->input->post('id_soal');
	$session=isset($_SESSION['username']) ? $_SESSION['username']:'';
	if($session!=""){
	    $pecah = explode("|",$session);
	    $username=$pecah[0];
	}
	$query=$this->modeladmin->Hitung_Hasil($id_soal, $id_hasil);
		$data["hit_hasil"]=$query;
		$benar=0;
		$salah=0;
		foreach($query->result() as $hasil)
		{
			$jwb=$jawaban;
			$id=$hasil->id_soal;
			if($jwb[$id]==$hasil->kunci)
			{
				$benar++;
			}
			else {
				$salah++;
			}
		}
		$nilai=sprintf("%2.1f",$benar/$jumlah*100);
		if($nilai<60){
			$pesan="Belajarlah lebih baik lagi, sehingga bisa sukses di kemudian hari.";
		}
		else{
			$pesan="Selamat dan tingkatkan lagi.";
		}
		$datainput=array();
		$datainput["id_soal"]=$this->input->post('id_soal');
		$datainput["username"]=$data_atas["username"];
		$datainput["salah"]=$salah;
		$datainput["benar"]=$benar;
		$datainput["hasil"]=$nilai;
		if ($no_reg=="" AND $id_soal==""){
			echo "Soal belum dikerjakan!";
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/cekjawaban/kategorisoal'>";
		}
		else{
			$this->modeladmin->Simpan_Hasil($datainput);
		?>
		<script type="text/javascript" language="javascript">
		alert("<?php echo $data_atas["nama"]; ?> telah mengikuti ujian <?php echo $matkul; ?>\n- Dengan total jawaban benar <?php echo $benar; ?> dan total jawaban salah <?php echo $salah; ?>.\n- Anda memperoleh nilai <?php echo $nilai; ?>\n- Pesan : <?php echo $pesan; ?>");
		</script>
		<?php
		echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/cekjawaban/kategorisoal'>";
		}
	}

	function lihatnilai(){
		$page=$this->uri->segment(3);
		$limit_ti=15;
		if(!$page){
		$offset_ti = 0;
		}else{
		$datestring = "Login : %d-%m-%y pukul %h:%i %a";
		$time = time();
		$data = array();
		$tanggal = mdate($datestring, $time);
		$session = isset($_SESSION['username']) ? $_SESSION['username']:'';
		}
		if($session=""){
		$pecah=explode("|",$session);
		$username=$pecah[0];
		$no_reg=$username;
		$nama=$pecah[1];
		$this->load->model('modeladmin');
		$this->load->library('pagination');	
		$query=$this->modeladmin->Lihat_Nilai($limit,$offset);
		
		$tot_hal = $this->modeladmin->Total_Nilai($username);
		$config['base_url'] = base_url() . '/index.php/siswa/lihatnilai';
		$config['total_rows'] = $tot_hal->num_rows();
		$config['per_page'] = $limit;
		$this->pagination->initialize($config);
		$paginator=$this->pagination->create_links();

		$data = array('query' => $query,'paginator'=>$paginator, 'page'=>$page, 'no_reg'=>$no_reg, 'nama'=>$nama,);
		$this->load->view('siswa/lembarsoal',$data);
		$this->load->view('siswa/lihatnilai',$data);
		}
	} 

    
    function kategorisoal()
	{
		$this->load->model('modeladmin');
		$this->load->library('Pagination');		
		$page=$this->uri->segment(3);
		$limit_ti=1;
		if(!$page):
		$offset_ti = 0;
		else:
		$offset_ti = $page;
		endif;
		$datestring = "Login : %d-%m-%Y pukul %h:%i %a";
		$time = time();
		$data_atas = array();
		$session=isset($_SESSION['username']) ? $_SESSION['username']:'';
		if($session!=""){
		$pecah=explode("|",$session);
		$data_atas["nama"]=$pecah[1];
		}
		$query=$this->modeladmin->Total_Soal($limit_ti,$offset_ti);
		$total_soal = $query->num_rows();
		$tot_hal = $this->modeladmin->Total_Soal();
		$config['base_url'] = base_url() .'/index.php/cekjawaban/kategorisoal';
		$config['total_rows'] = $tot_hal->num_rows();
		$config['per_page'] = $limit_ti;
		$config['uri_segment'] = 3;
		$this->pagination->initialize($config);
		$paginator=$this->pagination->create_links();

		$data = array('query' => $query,'paginator'=>$paginator, 'page'=>$page);
		$this->load->view('siswa/lembarsoal');
	}
}
?>