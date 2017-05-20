<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {

	function ceklogin(){
		if(!$this->session->userdata('isLogin')){
			header('location:'.base_url().'login');
			exit(0);
		}
	}

	public function index()
	{	
		$session = $this->session->userdata('isLogin');
		$user = $this->session->userdata('username');
		$data['user'] = $this->modeladmin->userData($user);
		if($session == true)
		{
		$this->load->view('admin', $data);
		}else
		redirect('login');
	}		

	

	
}
