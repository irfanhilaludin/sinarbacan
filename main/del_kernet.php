<?php
 include('dbcon.php');
dbcon(); 

$query=mysql_query("delete from tb_kernet where id_kernet='$_GET[id_kernet]'") or die (mysql_error());

if($query)
echo"<script>alert('Berhasil Menghapus Kernet')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./index.php?page=data_kernet'>";
?>