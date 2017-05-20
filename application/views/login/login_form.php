<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Login - Sistem Ujian Online</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <link href="<?php echo base_url();?>/assets/img/favicon.png" rel="shortcut icon"/>  
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/login.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min3.css" />             
  </head>
  
  <body>
    <div class="container" style="margin-top:50px;">
      <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">           
          <div class="account-wall">       
            <center ><img src="<?php echo base_url();?>/assets/img/user.png"></center>
            <h1 class="text-center login-title">SISTEM UJIAN ONLINE</h1>
            
            <form class="form-signin" action="<?php echo base_url();?>index.php/login/login_form" method="post">
              <input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
              <input type="password" class="form-control" placeholder="Password" name="pass" drequired>
              <button class="btn btn-primary btn-blockn" type="submit">Login</button>                
            </form>
          </div>            
        </div>
      </div>
    </div>

  </body>
  <footer>
    <div style="text-align: center; padding-top: 10px; margin-top: 50px; margin-bottom: 20px">
      &copy; 2017 Nur Haifa Aprianti & Nurul Audina 
    </div>
  </footer>
</html>