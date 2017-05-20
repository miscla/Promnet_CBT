<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();				
		$this->load->model('mahasiswa_model');
	}
	
	function ceklogin(){
		if(!$this->session->userdata('isLogin')){
			header('location:'.base_url().'login');
			exit(0);
		}
	}

	public function index(){
		$this->ceklogin();
		$data = array(
			'mhs' => $this->mahasiswa_model->Ambil('order by id_mhs desc')->result_array(),
		);
		$this->load->view('mahasiswa/index', $data);
	}	

	public function create(){
		$this->ceklogin();
		$this->load->view('mahasiswa/create');
	}

	public function insert(){
		$config =array(
			'upload_path' => './images',
			'allowed_types' => 'gif|jpg|png|jpeg',
			'max_size' => '200000',
			);
			$this->load->library('upload', $config);
			$this->upload->do_upload('file_upload');
			$upload_data = $this->upload->data();
		$this->ceklogin();
		$id_mhs = '';
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$ttl = $_POST['ttl'];
		//$tanggal_lahir = $_POST['tanggal_lahir'];
		$jk = $_POST['jk'];
		$agama = $_POST['agama'];
		$alamat = $_POST['alamat'];
		$jurusan = $_POST['jurusan'];
		

		$data = array(
			'id_mhs' => $id_mhs,
			'nim' => $nim,
			'nama' => $nama,
			//'tempat' => $tempat,
			'ttl' => $ttl,
			'jk' => $jk,
			'agama' => $agama,
			'alamat' => $alamat,
			'jurusan' => $jurusan,
			);

		$hasil = $this->mahasiswa_model->Simpan('mahasiswa', $data);

		if($hasil>=1){
			redirect('mahasiswa');
		}

		$this->ceklogin();
		$id_user = '';
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$username = $_POST['nim'];
		$pass = $_POST['nim'];
		$level = 'siswa';

		$data = array(
			'id_user' => $id_user,
			'nim' => $nim,
			'nama' => $nama,
			'username' => $username,
			'pass' => $pass,
			'level' => $level,
			
			);

		$hasil = $this->user_model->Simpan('user', $data);

		if($hasil>=1){
			redirect('user');
		}
	}

	public function insert_user(){
    	$this->ceklogin();
		$id_user = '';
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$username = $_POST['nim'];
		$pass = $_POST['nim'];
		$level = 'siswa';

		$data = array(
			'id_user' => $id_user,
			'nim' => $nim,
			'nama' => $nama,
			'username' => $username,
			'pass' => $pass,
			'level' => $level,
			
			);

		$hasil = $this->user_model->Simpan('user', $data2);

		if($hasil>=1){
			redirect('user');
		}
	}

	public function cetak($kode = 0)
	{
		$this->ceklogin();
			$mhs = $this->mahasiswa_model->Ambil("where id_mhs='$kode'")->result_array();
			
			$data = array(
			'id_mhs' => $mhs[0]['id_mhs'],
			'nim' => $mhs[0]['nim'],
			'nama' => $mhs[0]['nama'],
			//'tempat' => $mhs[0]['tempat'],
			'ttl' => $mhs[0]['ttl'],
			'jk' => $mhs[0]['jk'],
			'agama' => $mhs[0]['agama'],
			'alamat' => $mhs[0]['alamat'],
			'jurusan' => $mhs[0]['jurusan'],
		);		
		$this->load->library('fpdf');	
		$this->load->view('mahasiswa/cetak', $data);
	}

	public function lihat($kode = 0){
		$this->ceklogin();
		$data_soal = $this->mahasiswa_model->Ambil("where id_mhs = '$kode'")->result_array();

		$data = array(
			'id_mhs' => $data_soal[0]['id_mhs'],
			'nim' => $data_soal[0]['nim'],
			'nama' => $data_soal[0]['nama'],
			//'tempat' => $data_soal[0]['tempat'],
			'ttl' => $data_soal[0]['ttl'],
			'jk' => $data_soal[0]['jk'],
			'agama' => $data_soal[0]['agama'],
			'alamat' => $data_soal[0]['alamat'],
			'jurusan' => $data_soal[0]['jurusan'],
		);
		$this->load->view('mahasiswa/lihat', $data);
	}

	public function edit($kode = 0){
		$this->ceklogin();
		$data_soal = $this->mahasiswa_model->Ambil("where id_mhs = '$kode'")->result_array();

		$data = array(
			'id_mhs' => $data_soal[0]['id_mhs'],
			'nim' => $data_soal[0]['nim'],
			'nama' => $data_soal[0]['nama'],
			//'tempat' => $data_soal[0]['tempat'],
			'ttl' => $data_soal[0]['ttl'],
			'jk' => $data_soal[0]['jk'],
			'agama' => $data_soal[0]['agama'],
			'alamat' => $data_soal[0]['alamat'],
			'jurusan' => $data_soal[0]['jurusan'],
		);
		$this->load->view('mahasiswa/edit', $data);
	}

	public function update(){
		$config=array(
			'upload_path' =>'./images',
			'allowed_types' =>'gif|jpg|png|jpeg',
			'max_size' => '200000',
			);
		$this->load->library('upload', $config);
		$this->upload->do_upload('file_upload');
		$upload_data=$this->upload->data();
		$file_name=$upload_data['file_name'];
		$this->ceklogin();
		 $data = array(
		 	'id_mhs' => $this->input->post('id_mhs'),
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            //'tempat' => $this->input->post('tempat'),
            'ttl' => $this->input->post('ttl'),
            'jk' => $this->input->post('jk'),
          	'agama' => $this->input->post('agama'),
            'alamat' => $this->input->post('alamat'),
            'jurusan' => $this->input->post('jurusan'),
        );

      	$this->mahasiswa_model->Rubah($data);
      	if($res>=1){
      		header('location:'.base_url().'mahasiswa/mahasiswa/edit/1');
      	}else{
      		header('location:'.base_url().'mahasiswa/mahasiswa/edit/0');
      	
      }		
	}

	public function delete($kode = 0){
		$this->ceklogin();
		$hasil = $this->mahasiswa_model->Hapus('mahasiswa',array('id_mhs' => $kode));
		if($hasil == 1){
			redirect('mahasiswa');
		}else{
			echo "Terdapat kesalahan";
		}
	}
}
