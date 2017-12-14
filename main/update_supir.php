<?php
 include('dbcon.php');
dbcon(); 

$query=mysql_query("update tb_supir set nama_supir = '$_POST[nama]' , no_ktp = '$_POST[ktp]' , no_hp = '$_POST[hp]' where id_supir ='$_POST[id_supir]'") or die (mysql_error());

if($query)
echo"<script>alert('Berhasil Mengubah Data Supir dan Kernet')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./?page=data_supir'>";
?>