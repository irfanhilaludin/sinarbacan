<?php
 include('dbcon.php');
dbcon(); 



$query=mysql_query("update tb_penawaran set status_penawaran  = 'gagal kirim' where id_penawaran = '$_GET[id_penawaran]'") or die (mysql_error());



if($query)
echo"<script>alert('Penawaran Gagal')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./?page=data_penawaran_gagal'>";
?>