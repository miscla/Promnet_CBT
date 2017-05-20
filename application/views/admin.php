<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ujian Online</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
</head>
<body>
<div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">Selamat Datang <?php echo $user->nama;?></a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown user-dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin<b class="caret"></b></a>
                     <ul class="dropdown-menu">
                         
                         <li class="divider"></li>
                         <li><a href="<?php echo base_url(); ?>login/logout" onclick="return confirm('Anda ingin keluar ?');"><i class="fa fa-power-off"></i> Keluar</a></li>
                     </ul>
                 </li>
             </ul>
             <ul></ul>
         </div>
     </nav>
     <!-- /#page-wrapper -->
 </div>
           <!-- /. NAV TOP  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-6">           
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body">
                                <center ><img src="<?php echo base_url();?>/assets/img/reading (3).png"></center>
                            </div>
                            <div class="panel-footer back-footer-red">
                                <a style="color:white" href="<?php echo base_url();?>soal">SOAL</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">           
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <center ><img src="<?php echo base_url();?>/assets/img/team.png"></center>
                            </div>
                            <div class="panel-footer back-footer-green">
                                <a style="color:white" href="<?php echo base_url();?>mahasiswa">IDENTITAS MAHASISWA</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">           
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <center ><img src="<?php echo base_url();?>/assets/img/man.png"></center>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                <a style="color:white" href="<?php echo base_url();?>user">DAFTAR AKUN</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">           
                        <div class="panel panel-primary text-center no-boder bg-color-brown">
                            <div class="panel-body">
                                <center ><img src="<?php echo base_url();?>/assets/img/grades.png"></center>
                            </div>
                            <div class="panel-footer back-footer-brown">
                                <a style="color:white" href="<?php echo base_url();?>jawaban">LIHAT NILAI</a>
                            </div>
                        </div>
                    </div>
			</div>
            </div>
            </div>
                
    
    <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
      
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
   
    
   
</body>
</html>
