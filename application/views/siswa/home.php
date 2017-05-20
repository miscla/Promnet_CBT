<?php $this->load->view('include/headsis') ?>
<body>
           <!-- /. NAV TOP  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2></h2>   
                        <h3>Selamat Datang <?php echo $user->nama;?></h3>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
		  <div id="page-wrapper" >
		    <div id="inner">
			<div class="row">
			    
			
                    <div class="col-md-3  col-xs-4 col-xs-6">           
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body">
                                <center ><img src="<?php echo base_url();?>/assets/img/reading (3).png"></center>
                            </div>
                            <div class="panel-footer back-footer-red">
                                <a style="color:white" href="<?php echo base_url(); ?>siswa/paket">SOAL </a>
                            </div>
			    
                        </div>
                    </div>

                    <div class="col-md-3  col-xs-4 col-xs-6">           
                        <div class="panel panel-primary text-center no-boder bg-color-brown">
                            <div class="panel-body">
                                <center ><img src="<?php echo base_url();?>/assets/img/grades.png"></center>
                            </div>
                            <div class="panel-footer back-footer-brown">
                                <a style="color:white" href="<?php echo base_url(); ?>jawaban/nilai">NILAI </a>
                            </div>
                
                        </div>
                    </div>
		    
                    </div>
		    </div>
		    </div>
		      
                    </div>
			</div>
            </div>
            </div>
                
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
<?php $this->load->view('include/footer') ?>
   
</body>
</html>
