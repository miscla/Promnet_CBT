<?php if(!defined('BASEPATH')) exit('Hacking Attempt: Get out of the system ..!');

class Home extends CI_Controller
{  
  
  public function index()
  {
    if($this->session->userdata('isLogin') == FALSE)
    {
      redirect('login/login_form');
    }else
    {
      
      $user = $this->session->userdata('username');
      
      $data['level'] = $this->session->userdata('level');        
      $data['user'] = $this->modeladmin->userData($user);
      
      $this->load->view('home', $data);
    }
  } 
  
}
?>