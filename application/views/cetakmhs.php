<h1 style="text-align:center">formulir pendaftaran</h1>
<br/>
<table border="1">
	<tr style="background-color: red">
        <tr><th>NIM</th></tr>
        <tr><th>Nama Lengkap</th></tr>
        <tr><th>Tempat tanggal Lahir</th></tr>
        <tr><th>Jenis Kelamin</th></tr>
        <tr><th>Agama</th></tr>
        <tr><th>Jurusan</th></tr>
    </tr>
    
    <?php
    	$query = $this->modeladmin->cetakmhs();
		
		foreach($query->result() as $row):
	?>
    
    <tr>
        <td><?php echo $row->nim;?></td>
        <td><?php echo $row->nama;?></td>
        <td><?php echo $row->ttl;?></td>
        <td><?php echo $row->jk;?></td>
        <td><?php echo $row->agama;?></td>
        <td><?php echo $row->alamat;?></td>
        <td><?php echo $row->jurusan;?></td>
    </tr>
    
    <?php
		endforeach;
   	?>
</table>