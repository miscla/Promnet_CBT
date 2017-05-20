<?php $this->load->view('include/headsis') ?>
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
                                            <td><a class='btn btn-info btn-xs' title='kerjakan' href="<?php echo base_url(); ?>jawaban/daftar/<?php echo $pak['id_paket']; ?>" onclick="return confirm(' Apakah anda sudah siap mengikuti ujian?');"><span class="glyphicon glyphicon-edit" ></span></a>
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
