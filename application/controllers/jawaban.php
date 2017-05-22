<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jawaban extends CI_Controller {

	function __construct()
	{
		parent::__construct();				
		$this->load->model('jawaban_model');
	}
	
	function ceklogin(){
		if(!$this->session->userdata('isLogin')){
			header('location:'.base_url().'login');
			exit(0);
		}
	}

	public function index()
	{
		$this->ceklogin();
		$data = array(
			'nilai'=>$this->jawaban_model->Ambil()->result_array(),			
		);  

		$this->load->view('jawaban/index', $data);
	}	


	public function cetak()
	{
		$this->ceklogin();
		$data = array(
			'nilai'=>$this->jawaban_model->Ambil()->result_array(),			
		);		
		$this->load->library('fpdf');	
		$this->load->view('jawaban/cetak', $data);
	}

	public function nilai()
	{
		$this->ceklogin();	
		$this->load->model('user_model');	
		$this->load->model('mahasiswa_model');	
		$user = $this->session->userdata('username');		
		$user = $this->user_model->userData($user);	

		$user2 = $this->session->userdata('username');	
        $nim = $this->user_model->AmbilNim($user2);
        $idMhs = $this->mahasiswa_model->AmbilIdMhs($nim);

		$data = array(
			'nilai'=>$this->jawaban_model->AmbilNilai2($idMhs)->result_array(),
			'user' =>$user,			
		);  

		$this->load->view('jawaban/nilai', $data);
	}

	public function dnilai($kode = 0){
		//$this->ceklogin();		
		
		$data = array(
			'nilai'=>$this->modeladmin->AmbilDetailNilai($kode)->result_array(),				
			'total_nilai'=>$this->modeladmin->AmbilTotalNilai($kode)->row()->total_nilai,
			'kode'=>$kode,				
		);
		$this->load->view('jawaban/dnilai', $data);
	}

	public function dnilai2($kode = 0){
		//$this->ceklogin();		

		$data = array(
			'nilai'=>$this->modeladmin->AmbilDetailNilai($kode)->result_array(),				
			'total_nilai'=>$this->modeladmin->AmbilTotalNilai($kode)->row()->total_nilai,
			'kode'=>$kode,				
		);
		$this->load->view('jawaban/dnilai2', $data);
	}

	public function daftar(){
		$this->ceklogin();
		$this->load->model('user_model');
		$this->load->model('mahasiswa_model');

		$user = $this->session->userdata('username');
        $nim = $this->user_model->AmbilNim($user);
        $idMhs = $this->mahasiswa_model->AmbilIdMhs($nim);


		$data = array(			
			'id_mhs' => $idMhs,
			'tgl_tes' =>date("Y-m-d"),
			//'id_paket' => $id_paket,			
		);
		$this->jawaban_model->Simpan('jawaban', $data);
		$id=mysql_insert_id();
		//echo $id;
		redirect('jawaban/soal/'.$id);
	}

	public function soal($id = 0){		
    	$this->ceklogin();    	
    	$this->load->model('soal_model');
    	//$this->load->model('jawaban_model');
    	//$paket = $this->jawaban_model->AmbilPaket($id)->row()->id_paket;
    	 $soal = $this->soal_model->Ambil($paket);
    	//$soal = $this->soal_model->Ambil();
    	//$id = mysql_insert_id();        
        $data = array(
			"soal" => $soal->result_array(),
			"total_soal" =>$soal->num_rows(),
			"id_jawaban" => $id,
		);

        $this->load->view('jawaban/soal', $data);       
    }

    public function jawab(){
        $this->ceklogin();   
        $this->load->model('soal_model');    
        $this->load->model('user_model');    
        $this->load->model('jawaban_detail_model');    
        $id_jawaban = $this->input->post('id_jawaban'); 
        
        $jawaban=$_POST["jawaban"];
		$id_soal=$_POST["soal"];
		$jumlah=$_POST['jumlah_soal'];

        for ($i=0;$i<$jumlah;$i++){   		

        	$nomor=$id_soal[$i];
        	$jawaban[$nomor];		    

        	$data = array(
				'id_jawaban' => $id_jawaban,						
				'id_soal' => $nomor,						
				'id_paket' => $this->soal_model->AmbilPaket2($nomor),						
				'jawaban' => $jawaban[$nomor],						
				'kunci' =>$this->soal_model->AmbilJawaban($nomor),						
			);
			$this->jawaban_detail_model->Simpan('jawaban_detail', $data);
		}

        $sql = $this->jawaban_detail_model->AmbilHasilTes("where id_jawaban = $id_jawaban ");			
		$jumlah= $sql->num_rows();
		$benar=0;
		$salah=0;
		$total_nilai=0;

		foreach($sql->result_array() as $data) {
				$id_jawaban_detail = $data['id_jawaban_detail'];
				if($data['jawaban']==$data['kunci']){
						$benar++;						
				}else{
					$salah++;
				}
		}

		$total_nilai = ($benar/$jumlah)*100;
		$data = array(
		 	'benar' => $benar,
            'salah' => $salah,
            'total_nilai' => $total_nilai,
    	);		
	
		$this->jawaban_model->UpdateTotalNilai($id_jawaban, $data);

		$data2 = array(
		 	'status' => 2,            
    	);		
    	$username = $this->session->userdata('username');

		$this->user_model->UpdateStatusUser($username, $data2);

		redirect('jawaban/dnilai/'.$id_jawaban);
    }
}