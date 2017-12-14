<?php
 include('dbcon.php');
dbcon(); 
		
		
		
$query=mysql_query("insert into tb_oat (nama_kota, harga_oat, vol_oat) values ('$_POST[nama]', '$_POST[harga]' , '$_POST[vol]')") or die (mysql_error());

if($query)
header("location:index.php?page=data_oat");



?>