<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paket extends CI_Controller {

	function __construct()
	{
		parent::__construct();				
		$this->load->model('paket_model');
	}
	
	function ceklogin(){
		if(!$this->session->userdata('isLogin')){
			header('location:'.base_url().'login');
			exit(0);
		}
	}


	public function soal($id = 0)
	{
		$this->ceklogin();    	
    	$this->load->model('soal_model');
    	$this->load->model('jawaban_model');
    	 $paket = $this->jawaban_model->AmbilPaket($id)->row()->id_paket;
    	 $soal = $this->soal_model->Ambil($paket);
		$data = array(
			'soal'=>$this->soal_model->Ambil('order by id_soal asc')->result_array(),			
		);  

		$this->load->view('paket/index', $data);
	}

	public function index()
	{
		$this->ceklogin();
		$data = array(
			'paket'=>$this->paket_model->Ambil('order by id_paket asc')->result_array(),			
		);  

		$this->load->view('paket/index', $data);
	}

	public function create()
	{
		$this->ceklogin();
		$this->load->view('paket/create');
	}

	public function insert(){
		$this->ceklogin();
		$id_paket = '';
		$paket = $_POST['paket'];

		$data = array(
			'id_paket' => $id_paket,
			'paket' => $paket,
		);

		$hasil = $this->paket_model->Simpan('paket', $data);

		if($hasil>=1){
			redirect('paket');
		}
	}

	public function edit($kode = 0){
		$this->ceklogin();
		$data_paket = $this->paket_model->Ambil("where id_paket = '$kode'")->result_array();

		$data = array(
			'id_paket' => $data_paket[0]['id_paket'],
			'paket' => $data_paket[0]['paket'],
		);
		$this->load->view('paket/update', $data);
	}

	public function update(){
		$this->ceklogin();
		$paket = $this->input->post('id_paket');
		$data = array(
		 	'id_paket' => $this->input->post('id_paket'),
            'paket' => $this->input->post('paket'),
        );

        $this->paket_model->Rubah($paket, $data);
        redirect('paket');
	}

	public function delete($kode = 0){
		$this->ceklogin();
		$hasil = $this->paket_model->Hapus('paket',array('id_paket' => $kode));
		if($hasil == 1){
			redirect('paket');
		}
		else{
			echo "Mohon periksa kembali";
		}
	}
}