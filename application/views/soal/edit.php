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
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                   <h2>Halaman Tambah Soal</h2>                          
               </div>
           </div>
           <hr />
           <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tulis Soal
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form role="form" action="<?php echo base_url(); ?>soal/update" method="POST">
                                    <div class="form-group">
                                        <label>-- Pilih Paket Soal --</label>
                                        <select class="form-control" name="paket" style="width: 100;">
                                          <?php 
                                          foreach($paket as $kat){
                                            if(!in_array($kat['paket'],$label_post)){
                                              ?>
                                              <option value="<?php echo $kat['id_paket'] ?>"><?php echo $kat['paket'] ?></option>
                                              <?php } else { ?>
                                              <option selected="selected" value="<?php echo $kat['id_paket'] ?>"><?php echo $kat['paket'] ?></option>
                                              <?php } } ?>
                                          </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Soal</label>
                                        <textarea class="form-control" rows="3" name="soal"><?php echo $soal; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Jawaban A</label>
                                        <input class="form-control" name="a" value="<?php echo $a; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label>Jawaban B</label>
                                        <input class="form-control" name="b" value="<?php echo $b; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label>Jawaban C</label>
                                        <input class="form-control" name="c" value="<?php echo $c; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Jawaban D</label>
                                        <input class="form-control" name="d" value="<?php echo $d; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label>-- Pilih Jawaban --</label>
                                        <select class="form-control" name="kunci" value="<?php echo $kunci; ?>">
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            <option>D</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>-- Status --</label>
                                        <select class="form-control" name="status" value="<?php echo $status; ?>">
                                            <option>tampil</option>
                                            <option>tidak</option>
                                        </select>
                                    </div>
                                    <input type="hidden" class="form-control" name="id_soal" value="<?php echo $id_soal; ?>" />
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">Ubah</button>
                                        <a class="btn btn-default" href="<?php echo base_url();?>soal">Batal</a>
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
