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
               </div>
           </div>
           <!-- /. ROW  -->
           <hr />                
                <p><a class="btn btn-success" href="<?php echo base_url();?>mahasiswa">Kembali</a></p>
           <hr />
           <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Identitas Mahasiswa
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form role="form" action="<?php echo base_url(); ?>mahasiswa/insert" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>NIM</label>
                                        <input class="form-control" name="nim" />
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input class="form-control" name="nama" />
                                    </div>
                                    <div class="form-group">
                                        <label>TTL</label>
                                        <input class="form-control" name="ttl" />
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jk">
                                            <option>Laki-Laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select class="form-control" name="agama">
                                            <option>Islam</option>
                                            <option>Kristen</option>
                                            <option>Hindu</option>
                                            <option>Budha</option>
                                            <option>konghucu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat Lengkap</label>
                                        <input class="form-control" name="alamat" />
                                    </div>
                                    <div class="form-group">
                                        <label>Jurusan</label>
                                        <input class="form-control" name="jurusan" />
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan </button>
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
    
        <?php $this->load->view('include/footer') ?>

    </body>
    </html>
