<?php
 include('dbcon.php');
dbcon(); 

$query=mysql_query("update tb_user set level_user ='keluar' where id_user='$_GET[id_user]'") or die (mysql_error());

if($query)
header("location:index.php?page=data_user");
?>