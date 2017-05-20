<?php $this->load->view('include/head') ?>
<body>
  <div id="wrapper">    
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
            Tambah Paket Soal
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <form role="form" action="<?php echo base_url(); ?>paket/insert" method="post">
                  <div class="form-group">
                    <label>Paket</label>
                    <input class="form-control" name="paket" required/>
                  </div>
                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Simpan</button>                    
                    <a class="btn btn-default" href="<?php echo base_url();?>paket">Batal</a>
                  </div> 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<?php $this->load->view('include/footer') ?>

</body>
</html>
