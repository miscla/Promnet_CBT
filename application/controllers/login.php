<?php if(!defined('BASEPATH')) exit('Hacking Attempt: Get out of the system ..!');

  class Login extends CI_Controller
  {  
    function __construct()
    {
      parent::__construct();        
      $this->load->model('user_model');
    }

    public function index()
    {
      $session = $this->session->userdata('isLogin');
      
      if($session == FALSE)
      {
        redirect('login/login_form');
      }else
      {
        redirect('home');
      }
    }
    
    
    public function login_form()
    {
      $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean');
      $this->form_validation->set_rules('pass', 'Pass', 'required||xss_clean');
      $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
      
      if($this->form_validation->run()==FALSE)
      {
        $this->load->view('login/login_form');
      }else
      {
       $username = $this->input->post('username');
       $pass = $this->input->post('pass');
       $level = $this->input->post('level');
       $cek = $this->user_model->takeUser($username, $pass);
       if($cek <> 0)
       {
        $this->session->set_userdata('isLogin', TRUE);
        $this->session->set_userdata('username',$username);
        $this->session->set_userdata('level',$this->user_model->AmbilLevel($username));
        
        redirect('home');
      }else
      {
       echo " <script>
       alert('Periksa lagi nama dan password !!!');
       history.go(-1);
     </script>";        
   }
 }  
}

public function logout()
{
 $this->session->sess_destroy();
 
 redirect('login/login_form');
}

}
?>