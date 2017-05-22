<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ujian Online</title>
    <link href="<?php echo base_url();?>assets2/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets2/font-awesome/css/font-awesome.css" rel="stylesheet" />
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets2/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets2/css/style-responsive.css" rel="stylesheet">
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
                <a class="navbar-brand" href="<?php echo base_url(); ?>">Selamat Datang</a>
                <a style="padding-left: 100px;" class="navbar-brand" href="<?php echo base_url();?>soal">Soal</a>
                <a class="navbar-brand" href="<?php echo base_url();?>mahasiswa">Identitas Mahasiswa</a>
                <a class="navbar-brand" href="<?php echo base_url();?>user">Daftar Akun</a>
                <a class="navbar-brand" href="<?php echo base_url();?>jawaban">Lihat Nilai</a>
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
          <section class="wrapper">   
                      <div class="row mt">
                      <!-- SERVER STATUS PANELS -->
                        <div class="col-md-4 col-sm-4 mb">
                            <div class="white-panel pn donut-chart">
                                <div class="white-header">
                                    <h5>INFORMASI</h5>
                                </div>
                                <div class="row">
                                    Selamat Datang di Ujian Online.</br>
                                    Login Sebagai ADMIN.
                                </div>
                                <canvas id="serverstatus01" height="120" width="120"></canvas>
                                
                            </div><! --/grey-panel -->
                        </div><!-- /col-md-4-->
                        
                        <div class="col-md-4 col-sm-4 mb">
                            <div class="white-panel pn donut-chart">
                                <div class="white-header">
                                    <h5>KETENTUAN</h5>
                                </div>
                                <div class="row">
                                    Selamat Datang di Ujian Online.</br>
                                    Login Sebagai ADMIN.
                                </div>
                                <canvas id="serverstatus01" height="120" width="120"></canvas>
                                
                            </div><! --/grey-panel -->
                        </div><!-- /col-md-4-->
                        
                        <div class="col-md-4 col-sm-4 mb">
                            <div class="white-panel pn donut-chart">
                                <div class="white-header">
                                    <h5>INFORMASI LAIN</h5>
                                </div>
                                <div class="row">
                                    Selamat Datang di Ujian Online.</br>
                                    Login Sebagai ADMIN.
                                </div>
                                <canvas id="serverstatus01" height="120" width="120"></canvas>
                                
                            </div><! --/grey-panel -->
                        </div><!-- /col-md-4-->
                        

                    </div><!-- /row -->
                    
                                    
                    <div class="row">
                        <!-- TWITTER PANEL -->
                        <div class="col-md-12 mb">
                            <div class="darkblue-panel pn">
                                <div class="darkblue-header">
                                    <h1>PERHATIAN</h1>
                                    <h5>Jangan Lupa untuk Memvalidasi data siswa yang telah Mendaftar, dan daftarkan peserta</h5></br>
                                    <h5>dengan ketentuan NIS sebagai username dan password</h5>
                                </div>
                                <canvas id="serverstatus02" height="120" width="120"></canvas>
                        
                                <footer>
                                   
                                </footer>
                            </div><! -- /darkblue panel -->
                        </div><!-- /col-md-4 -->
                          
          </section>


                
    
    <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
      
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
   
    
   
</body>
</html>
