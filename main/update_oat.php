<?php
 include('dbcon.php');
dbcon(); 

$query=mysql_query("update tb_oat set nama_kota = '$_POST[nama]', harga_oat = '$_POST[harga]',  vol_oat = '$_POST[vol]' where id_oat ='$_POST[id_oat]'") or die (mysql_error());

if($query)
header("location:index.php?page=data_oat");
?>