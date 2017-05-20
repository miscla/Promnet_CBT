<?php $this->load->view('include/head') ?>
<body>
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Halaman Daftar Akun</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                        <div class="row">
                        <p><a href="<?php echo base_url();?>user/create" class='btn btn-success'><i class='fa fa-plus'></i> Tambah Akun</a></p>
                <div class="col-md-9">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Daftar Akun
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Level</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=0; foreach($peserta as $pak) { $no++ ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $pak['nim']; ?></td>
                                            <td><?php echo $pak['nama']; ?></td>
                                            <td><?php echo $pak['username']; ?></td>
                                            <td><?php echo $pak['level']; ?></td>
                                            <td>
                                            <a class='btn btn-primary btn-xs' title='cetak' href="<?php echo base_url();?>user/cetakpes/<?php echo $pak['id_user'];?>"><span class="glyphicon glyphicon-file"></span></a>
                                            <a class='btn btn-info btn-xs' title='ubah' href="<?php echo base_url();?>user/edit/<?php echo $pak['id_user']; ?>"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a class='btn btn-danger btn-xs' title='hapus' onclick="return confirm('hapus?')" href="<?php echo base_url();?>user/delete/<?php echo $pak['id_user']; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
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