<?php
 include('dbcon.php');
dbcon(); 

$query1=mysql_query("DELETE FROM tb_po WHERE id_po='$_GET[id_po]'") or die (mysql_error());


if($query)
echo"<script>alert('Berhasil Menghapus Penawaran')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./?page=data_pemesanan'>";
	
?>




//if($query)
//header("location:index.php?page=data_pemesanan");
?>