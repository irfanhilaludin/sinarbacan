<?php
 include('dbcon.php');
dbcon(); 

$query1=mysql_query("update tb_po set status_po ='tidak setuju' where id_po = '$_GET[id_po]'") or die (mysql_error());

$query=mysql_query("update tb_kontak_all set report_kontak = 'PO tidak setuju' where id_kontak = '$_GET[id_kontak]'") or die (mysql_error());

if($query) 
 echo"<script>alert('PO tidak di setujui')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./?page=data_pemesanan_pending'>";
    
?>