<?php
 include('dbcon.php');
dbcon(); 

$query=mysql_query("delete from tb_oat where id_oat='$_GET[id_oat]'") or die (mysql_error());

if($query)
echo"<script>alert('Berhasil Menghapus OAT ')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./?page=data_oat'>";
?>