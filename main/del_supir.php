<?php
 include('dbcon.php');
dbcon(); 

$query=mysql_query("delete from tb_supir where id_supir='$_GET[id_supir]'") or die (mysql_error());

if($query)
echo"<script>alert('Berhasil Menghapus Supir dan Kernet')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./?page=data_supir'>";
?>