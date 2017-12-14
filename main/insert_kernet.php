<?php
 include('dbcon.php');
dbcon(); 
		
		
		
$query=mysql_query("insert into tb_kernet (nama_kernet, no_ktp, no_hp ) values ('$_POST[nama]', '$_POST[ktp]' , '$_POST[hp]')") or die (mysql_error());

if($query)
header("location:index.php?page=data_kernet");



?>