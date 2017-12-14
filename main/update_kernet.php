<?php
 include('dbcon.php');
dbcon(); 

$query=mysql_query("update tb_kernet set nama_kernet = '$_POST[nama]' , no_ktp = '$_POST[ktp]' , no_hp = '$_POST[hp]' where id_kernet ='$_POST[id_kernet]'") or die (mysql_error());

if($query)
echo"<script>alert('Berhasil Mengubah Data Kernet')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./?page=data_kernet'>";
?>