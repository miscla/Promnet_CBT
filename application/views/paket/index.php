<?php $this->load->view('include/head') ?>
<body>
           <!-- /. NAV TOP  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Halaman Soal</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />

                  <ul class="nav nav-pills" role="tablist">
                  <li class="active"><a href="#">Paket Soal</a></li>                
                  <li><a href="<?php echo base_url();?>soal">Soal</a></li>
                </ul> 

                <br>

                    <div class="row">
                    <div class="col-md-6">
                  <!--   Kitchen Sink -->
                  <p><a href="<?php echo base_url();?>paket/create" class='btn btn-success'><i class='fa fa-plus'></i> Tambah Paket Soal</a></p>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Paket Soal
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Paket</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=0; foreach($paket as $pak) { $no++ ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $pak['id_paket']; ?></td>
                                            <td><?php echo $pak['paket']; ?></td>
                                            <td><a class='btn btn-info btn-xs' title='ubah' href="<?php echo base_url();?>paket/edit/<?php echo $pak['id_paket']; ?>"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a class='btn btn-danger btn-xs' title='hapus' onclick="return confirm('Anda yakin ?')" href="<?php echo base_url();?>paket/delete/<?php echo $pak['id_paket']; ?>"><span class="glyphicon glyphicon-trash"></span></a>
                                            </td>
                                        <tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>
			
<?php $this->load->view('include/footer') ?>
</body>
</html>
