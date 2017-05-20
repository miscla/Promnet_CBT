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
                <a class="navbar-brand" href="index.html">admin</a> 
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
                   <h2>Halaman Edit Mahasiswa</h2>                          
               </div>
           </div>
           <!-- /. ROW  -->
           <hr />
           <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Mahasiswa
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form role="form" action="<?php echo base_url(); ?>mahasiswa/update" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>NIM</label>
                                        <input class="form-control" name="nim" value="<?php echo $nim; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input class="form-control" name="nama" value="<?php echo $nama; ?>" />
                                    </div>
                                   <div class="form-group">
                                        <label>TTL</label>
                                        <input class="form-control" name="ttl" value="<?php echo $ttl; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jk" value="<?php echo $jk; ?>">
                                            <option>Laki-Laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select class="form-control" name="agama" value="<?php $agama; ?>">
										<option>Budha</option>
										<option>hindu</option>
										<option>Islam</option>
										<option>Kristen</option>
										<option>Konghucu</option>
										</select>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat Lengkap</label>
                                        <input class="form-control" name="alamat" value="<?php echo $alamat; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Jurusan</label>
                                        <input class="form-control" name="jurusan" value="<?php echo $jurusan; ?>" />
                                    </div>
                                    <input type="hidden" class="form-control" name="id_mhs" value="<?php echo $id_mhs; ?>" />
                                    <button type="submit" class="btn btn-primary">Ubah </button>
                                    <a class="btn btn-default" href="<?php echo base_url();?>mahasiswa">Batal</a>
                                </form>
                            </div>
                            </div>
                            <!-- End Form Elements -->
                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                        </div>
                        </div>
                    </div>
                    <!-- /. ROW  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <?php $this->load->view('include/footer') ?>

    </body>
    </html>
