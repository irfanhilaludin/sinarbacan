<?php
 include('dbcon.php');
dbcon(); 
		
		
		
$query=mysql_query("insert into tb_supir (nama_supir, no_ktp, no_hp , level) values ('$_POST[nama]', '$_POST[ktp]' , '$_POST[hp]' , '$_POST[level]')") or die (mysql_error());

if($query)
header("location:index.php?page=data_supir");



?>