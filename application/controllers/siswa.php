<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function index()
	{
		$this->load->model('user_model');
		$session = $this->session->userdata('isLogin');
		$user = $this->session->userdata('username');
		$data['user'] = $this->user_model->userData($user);
		if($session == true)
		{
			$this->load->view('siswa/home', $data);
		}else
		redirect('login');
	}

	public function paket()
	{	
		$this->load->model('paket_model');
		$data = array(
			'paket'=>$this->paket_model->Ambil('order by id_paket asc')->result_array(),
		);  
		
			$this->load->view('siswa/index', $data);
		
	}


	public function edit($kode = 0){
		$this->ceklogin();
		$data_soal = $this->user_model->Ambil("where id_user = '$kode'")->result_array();

		$data = array(
			'id_user' => $data_soal[0]['id_user'],
			'nim' => $data_soal[0]['nim'],
			'nama' => $data_soal[0]['nama'],
			'username' => $data_soal[0]['username'],
			'pass' => $data_soal[0]['pass'],
			'level' => $data_soal[0]['level'],
		);
		$this->load->view('siswa/akun', $data);
	}

	function ceklogin(){
		if(!$this->session->userdata('isLogin')){
			header('location:'.base_url().'login');
			exit(0);
		}
	}		              
}	
