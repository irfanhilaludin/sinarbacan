<?php
 include('dbcon.php');
dbcon(); 


$query=mysql_query("update tb_penawaran set status_penawaran  = 'terkirim' where id_penawaran = '$_GET[id_penawaran]'") or die (mysql_error());

if($query){
	echo"<meta http-equiv='refresh' content='0;url=./?page=data_penawaran_pending'>";
	}
	?>