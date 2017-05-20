<?php $this->load->view('include/head') ?>
<body>           
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Halaman Nilai</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                
            <div class="row">
                <div class="col-md-12">   
                    <p><a href="<?php echo base_url();?>jawaban/cetak" class='btn btn-danger' target='_blank'><i class='fa fa-print'></i> Cetak</a></p>             
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            NILAI MAHASISWA
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>                                            
                                            
                                             <th>ID Paket</th>                                            

                                            <th>Tanggal Tes</th>                                            
                                            
                                            <th>Mahasiswa</th>                                                                                        
                                            <th>Benar</th>                                                                                        
                                            <th>Salah</th>                                                                                        
                                            <th>Nilai</th>   
                                            <th>Aksi</th>                                                                                     
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=0; foreach($nilai as $kon) { $no++?>
                                        <tr>
                                            <td><?php echo $no; ?></td>

                                            <td><?php echo $kon['id_paket']; ?></td>

                                            <td><?php echo $kon['tgl_tes']; ?></td>                                                                            
                                            <td><?php echo $kon['nama']; ?></td>                                                                                                                       
                                            <td><?php echo $kon['benar']; ?></td>                                                                                                                       
                                            <td><?php echo $kon['salah']; ?></td>                                                                                                                       
                                            <td><?php echo $kon['total_nilai']; ?></td>                                                                                                                       
                                            <td width='5%' align='center'><a class='btn btn-warning btn-xs' title='detail' href="<?php echo base_url();?>jawaban/dnilai2/<?php echo $kon['id_jawaban']; ?>"><span class="glyphicon glyphicon-eye-open"></a></span></td>
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