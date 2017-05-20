<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman User</title>

    <link href="<?php echo base_url();?>/assets/img/favicon.png" rel="shortcut icon"/>
    
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
     
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
       
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/chosen.css" rel="stylesheet"/>
    <style type="text/css">
        .chzn-container-single .chzn-search input{
            width: 100%;
        }
    </style>

<!-- BOOTSTRAP SCRIPTS -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<script src="<?php echo base_url();?>assets/js/chosen.jquery.js"></script>

<script type="text/javascript">
        $(function(){
            $('.chzn-select').chosen();
            $('.chzn-select-deselect').chosen({allow_single_deselect:true});
        });

    </script>
    
</head>
<div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>siswa">Halaman User</a>
            </div>
     </nav>
     <!-- /#page-wrapper -->
 </div>
<body>           
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Hasil Tes </h2>                           
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <hr />                
            <div class="row">
                <div class="col-md-12">                
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Hasil Tes No. <?php echo $kode; ?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php $total=0; $no=0; foreach($nilai as $kon) { 
                                    $total += $kon['nilai'];
                                    $jawaban = strtolower($kon['jawaban']);
                                    $no++?>

                                    <p><?php echo $no.". ".$kon['soal'];?></p>                                    
                                    <?php if($kon['jawaban']== $kon['kunci']) { ?>
                                        <p><b>Jawaban : <?php echo $kon['jawaban']." (".$kon[$jawaban].") <span class='label label-primary'>Benar</span>";?></b></p>
                                    <?php } else { ?>
                                        <p><b>Jawaban : <?php echo $kon['jawaban']." (".$kon[$jawaban].") <span class='label label-danger'>Salah</span> Kunci : ".$kon['kunci']." (".$kon[$jawaban].")";?></b></p>
                                    <?php } ?>
                                    <hr>
                                <?php } ?>           

                                <?php echo "<h1>Nilai Anda $total_nilai</<h1>" ?>                     
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