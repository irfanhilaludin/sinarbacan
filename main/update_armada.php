<?php
 include('dbcon.php');
dbcon(); 

$query=mysql_query("update tb_mobil set nopol = '$_POST[nopol]' , ukuran_mobil = '$_POST[vol]' where id_mobil ='$_POST[id_mobil]'") or die (mysql_error());

if($query)
echo"<script>alert('Berhasil Mengubah Data Armada')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./?page=data_armada'>";
?>