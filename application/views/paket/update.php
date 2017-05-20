<?php $this->load->view('include/head') ?>
<body>
  <div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Binary admin</a> 
      </div>
      <div style="color: white;
      padding: 15px 50px 5px 50px;
      float: right;
      font-size: 16px;">
      <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> 
    </div>
  </nav>   
  <!-- /. NAV TOP  --> 
  <!-- /. NAV SIDE  -->
  <div id="page-wrapper" >
    <div id="page-inner">
      <div class="row">
        <div class="col-md-12">
         <h2>Halaman Paket Soal</h2>                          
       </div>
     </div>
     <!-- /. ROW  -->
     <hr />
     <div class="row">
      <div class="col-md-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
          <div class="panel-heading">
            Ubah Paket Soal
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <form role="form" action="<?php echo base_url(); ?>paket/update" method="post">
                  <div class="form-group">
                    <label>Paket</label>
                    <input class="form-control" name="paket" value="<?php echo $paket; ?>" />
                  </div>
                  <input type="hidden" class="input-xlarge" id="id_paket" value="<?php echo $id_paket; ?>" name="id_paket">
                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    <a class="btn btn-default" href="<?php echo base_url();?>paket">Batal</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- End Form Elements -->
    </div>
  </div>
  <!-- /. ROW  -->
  <!-- /. ROW  -->
</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<?php $this->load->view('include/footer') ?>

</body>
</html>
