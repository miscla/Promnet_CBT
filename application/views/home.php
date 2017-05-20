<html>
<head>
<title>Administration</title>
<style>
body
{
font-family:Times New Roman;
}
</style>
</head>
<body>
 <?php
  if($level == "admin")
  {
 ?>
 <h2><?php redirect('client'); ?> <?php echo anchor('login/logout', 'Logout');?></h2>
 <?php
 }else
 {
  ?>
  <h2><?php redirect('siswa'); ?> <?php echo anchor('login/logout', 'Logout');?></h2>
  <?php
 }
 ?></body>
</html>