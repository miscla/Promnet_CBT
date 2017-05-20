<?php $this->load->view('include/headsis') ?>
<body>           
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Nilai</h2>                           
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                
            <div class="row">
                <div class="col-md-12">                
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            NILAI   : <b><?php echo $user->nama; ?></b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            <th>No</th>                                            
                                            
                                            <th>Kode Paket</th>

                                            <th>Tanggal Tes</th>                            
                                                                                        
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

                                            <td><?php echo $kon['id_jawaban']; ?></td>

                                            <td><?php echo $kon['tgl_tes']; ?></td>

                                            <td><?php echo $kon['benar']; ?></td>                                                                                                                       
                                            <td><?php echo $kon['salah']; ?></td>                                                                                                                       
                                            <td><?php 
                                                        echo $kon['total_nilai']; ?></td> 
                                            <td width='5%' align='center'><a class='btn btn-warning btn-xs' title='detail' href="<?php echo base_url();?>jawaban/dnilai/<?php echo $kon['id_jawaban']; ?>"><span class="glyphicon glyphicon-eye-open"></a></span></td>
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