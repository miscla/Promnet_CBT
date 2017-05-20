<?php $this->load->view('include/head') ?>
<body>
  <div id="wrapper">  
  <div id="page-wrapper" >
    <div id="page-inner">
      <div class="row">
        <div class="col-md-6">
         <h2>Halaman Peserta</h2>                          
       </div>
     </div>
     <hr />
     <div class="row">
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            Tambah Akun Peserta
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <form role="form" action="<?php echo base_url(); ?>user/insert" method="post">
                  <div class="form-group">
                    <label>NIM</label>
                    <select id="nim" tabindex="5" class="chzn-select form-control" name="nim" value="" data-placeholder="Cari NIM..">
                      <option value=""></option>
                      <?php
                      if(isset($data_mhs)){
                        foreach($data_mhs as $row){
                          ?>
                          <option value="<?php echo $row->nim?>"><?php echo $row->nim?></option>
                          <?php
                        }
                      }
                      ?>
                    </select>
                  <div id="detail_mhs" name="detail_mhs"></div>
                  <br>
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
    </div>
  </div>
</div>
</div>
</div>
<script type="text/javascript">
    $("#nim").change(function(){
        var nim = $("#nim").val();
        $.ajax({
            type: "POST",
            url : "<?php echo base_url('user/get_detail_mhs'); ?>",
            data: "nim="+nim,
            cache:false,
            success: function(data){
                $('#detail_mhs').html(data);
                document.frm.add.disabled=false;
            }
        });
    });

</script>
<?php $this->load->view('include/footer') ?>

</body>
</html>
