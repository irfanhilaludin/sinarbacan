<?php
 include('dbcon.php');
dbcon(); 

$query=mysql_query("update tb_user set username_user = '$_POST[username]' , password_user = '$_POST[pass]', nama_user = '$_POST[nama]',hp_user = '$_POST[hp]' where id_user ='$_POST[id_user]'") or die (mysql_error());

if($query)
header("location:index.php?page=data_user");
?>