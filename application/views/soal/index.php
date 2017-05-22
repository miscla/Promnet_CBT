<?php $this->load->view('include/head') ?>
<body>
           <!-- /. NAV TOP  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12" style="padding-top: 20px;">
                     <h2>Halaman Soal</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />

                <ul class="nav nav-pills" role="tablist">
                  <li><a href="<?php echo base_url();?>paket">Paket Soal</a></li>
                  <li class="active"><a href="#">Soal</a></li>                
                </ul> 

                <br>
                
            <div class="row">
                <div class="col-md-12">
                <p><a href="<?php echo base_url();?>soal/create" class='btn btn-success'><i class='fa fa-plus'></i> Tambah Soal</a></p>
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             SOAL
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Soal</th>
                                            <th>Kode Paket</th>
                                            <th>Jawaban A</th>
                                            <th>Jawaban B</th>
                                            <th>Jawaban C</th>
                                            <th>Jawaban D</th>
                                            <th>Kunci</th>
                                            <th>Stasus</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=0; foreach($soal as $kon) { $no++?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $kon['soal']; ?></td>
                                            <td><?php echo $kon['paket']; ?></td>
                                            <td><?php echo $kon['a']; ?></td>
                                            <td><?php echo $kon['b']; ?></td>
                                            <td><?php echo $kon['c']; ?></td>
                                            <td><?php echo $kon['d']; ?></td>
                                            <td><?php echo $kon['kunci']; ?></td>
                                            <td><?php echo $kon['status']; ?></td>                                           
                                            <td width='6%'>
                                            <a class='btn btn-info btn-xs' title='ubah' href="<?php echo base_url();?>soal/edit/<?php echo $kon['id_soal']; ?>"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a class='btn btn-danger btn-xs' title='hapus' onclick="return confirm('hapus?')" href="<?php echo base_url();?>soal/delete/<?php echo $kon['id_soal']; ?>"><span class="glyphicon glyphicon-trash"></span></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            </div>
            </div>
            
<?php $this->load->view('include/footer') ?>
</body>
</html>
