<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Login - Sistem Ujian Online</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>/assets2/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets2/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets2/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets2/css/style-responsive.css" rel="stylesheet">
      
  </head>
  
  <body>
  <div id="login-page">
      <div class="container">
          <form class="form-login" action="<?php echo base_url();?>index.php/login/login_form" method="post">
            <h2 class="form-login-heading">UJIAN BERBASIS KOMPUTER</h2>
            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
                <br>
                <input type="password" class="form-control" placeholder="Password" name="pass" drequired>
                <br>
                <button class="btn btn-theme btn-block" type="submit"> SIGN IN</button>
                <br>

            </div>
  
    
          </form>     
      
      </div>
    </div>

  <footer>
    <div style="text-align: center; padding-top: 10px; margin-top: 50px; margin-bottom: 20px">
      &copy; 2017 Nur Haifa Aprianti & Nurul Audina 
    </div>
  </footer>
</html>