<?php $this->load->view('include/head') ?>
<body>
           <!-- /. NAV TOP  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Halaman Mahasiswa</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                        <div class="row">
                <div class="col-md-12">
                <p><a href="<?php echo base_url();?>mahasiswa/create" class='btn btn-success'><i class='fa fa-plus'></i> Tambah Mahasiswa</a></p>
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             PENDAFTAR
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>TTL</th>
                                            <th>Kelamin</th>
                                            <th>Agama</th>
                                            <th>Alamat</th>
                                            <th>Jurusan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=0; foreach($mhs as $kon) { $no++?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $kon['nim']; ?></td>
                                            <td><?php echo $kon['nama']; ?></td>
                                            <td><?php echo $kon['ttl']; ?></td>
                                            <td><?php echo $kon['jk']; ?></td>
                                            <td><?php echo $kon['agama']; ?></td>
                                            <td><?php echo $kon['alamat']; ?></td>
                                            <td><?php echo $kon['jurusan']; ?></td>
                                            <td>
                                            <a class='btn btn-primary btn-xs' title='cetak' target='_blank' href="<?php echo base_url();?>mahasiswa/cetak/<?php echo $kon['id_mhs']; ?>"><span class="glyphicon glyphicon-file"></span></a>
                                            <a class='btn btn-warning btn-xs' title='lihat' href="<?php echo base_url();?>mahasiswa/lihat/<?php echo $kon['id_mhs']; ?>"><span class="glyphicon glyphicon-eye-open"></a>
                                            <a class='btn btn-info btn-xs' title='ubah' href="<?php echo base_url();?>mahasiswa/edit/<?php echo $kon['id_mhs']; ?>"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a class='btn btn-danger btn-xs' title='hapus' onclick="return confirm('Apakah Anda Yakin Ingin menghapus?')" href="<?php echo base_url();?>mahasiswa/delete/<?php echo $kon['id_mhs']; ?>"><span class="glyphicon glyphicon-trash"></span></a>
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
