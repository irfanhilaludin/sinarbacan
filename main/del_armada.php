<?php
 include('dbcon.php');
dbcon(); 

$query=mysql_query("delete from tb_mobil where id_mobil='$_GET[id_mobil]'") or die (mysql_error());

if($query)
echo"<script>alert('Berhasil Menghapus Armada')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./?page=data_armada'>";
?>