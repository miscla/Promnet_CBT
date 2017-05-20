<?php $this->load->view('include/head') ?>
<body>
    <div id="wrapper">  
    <!-- /. NAV TOP  --> 
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                   <h2>Halaman Lihat Mahasiswa</h2>                          
               </div>
           </div>
           <!-- /. ROW  -->
           <hr />
           <p><a class="btn btn-success" href="<?php echo base_url();?>mahasiswa">Kembali</a></p>
           <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Lihat Mahasiswa
                    </div>
                    <div class="panel-body">
                            <table class="table table-striped">
                                <tr><th width='30%'>NIM</th><td><?php echo $nim; ?></td></tr>                                
                                <tr><th width='30%'>Nama</th><td><?php echo $nama; ?></td></tr>                                
                                <tr><th width='30%'>Tempat, Tangal Lahir</th><td><?php echo $ttl;?></td></tr>                                
                                <tr><th width='30%'>Jenis Kelamin</th><td><?php echo $jk; ?></td></tr>                                
                                <tr><th width='30%'>Agama</th><td><?php echo $agama; ?></td></tr>                                
                                <tr><th width='30%'>Alamat</th><td><?php echo $alamat; ?></td></tr>                                 
                                <tr><th width='30%'>Jurusan</th><td><?php echo $jurusan; ?></td></tr>                                
                            </tr>                                
                            </table>

        <?php $this->load->view('include/footer') ?>

    </body>
    </html>