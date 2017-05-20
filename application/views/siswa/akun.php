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
        <div class="col-md-6">
         <h2>Halaman Peserta</h2>                          
       </div>
     </div>
     <!-- /. ROW  -->
     <hr />
     <div class="row">
      <div class="col-md-6">
        <!-- Form Elements -->
        <div class="panel panel-default">
          <div class="panel-heading">
            Tambah Akun Peserta
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <form role="form" action="<?php echo base_url(); ?>user/update" method="post">
                  <div class="form-group">
                    <label>Nis</label>
                    <div class="form-group">
                    <input class="form-control" name="nis" value="<?php echo $nis; ?>" readonly/>
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name="nama" value="<?php echo $nama; ?>" readonly/>
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" name="username" value="<?php echo $username; ?>"/>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" name="pass" value="<?php echo $pass; ?>"/>
                  </div>
                  <div class="form-group">
                    <label>Level</label>
                    <select class="form-control" name="level">
                      <option>siswa</option>
                      <option>admin</option>
                    </select>
                  </div>
                  <input type="hidden" class="form-control" name="id_user" value="<?php echo $id_user; ?>"/>
                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a class="btn btn-default" href="<?php echo base_url();?>user">Batal</a>
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
