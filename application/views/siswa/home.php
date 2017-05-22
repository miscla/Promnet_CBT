<?php $this->load->view('include/headsis') ?>
<body>
           <!-- /. NAV TOP  -->
        <div id="" >
            <div style="margin:5px 20px 10px 0px; padding:20px;">
                <div class="row">
                    <div class="col-md-12" style="padding-top: 100px;">
                    </div>
                </div>              
                 <!-- /. ROW  -->
                      <div class="row mt">
                          </div><!-- /row -->
                    
                                    
                    <div class="row">
                        <!-- TWITTER PANEL -->
                        <div class="col-md-12">
                            <div class="darkblue-panel pn">
                                <div class="darkblue-header">
                                    <h1 style="color: white;">Selamat Datang <?php echo $user->nama;?></h1>
                                    <h2 style="color: white;">Silahkan memulai mengerjakan soal atau melihat nilai</h2>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-offset-2 col-md-4">
                                        <a href="<?php echo base_url(); ?>siswa/paket"><button class="btn btn-theme btn-block" type="submit">SOAL</button></a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="<?php echo base_url(); ?>jawaban/nilai"><button class="btn btn-theme btn-block" type="submit">NILAI</button></a>
                                    </div>
                                </div>
                                <canvas id="serverstatus02" height="120" width="120"></canvas>
                            </div>
                        </div><!-- /col-md-4 -->      
          </div>
                
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
<?php $this->load->view('include/footer') ?>
   
</body>
</html>
