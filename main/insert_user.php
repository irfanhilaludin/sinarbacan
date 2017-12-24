<?php
 include('dbcon.php');
dbcon(); 
/*$device_query = mysql_query("select * from tb_user where username_user like  '%".$_POST['username']."%' ")or die(mysql_error());
		
$banyake =mysql_num_rows($device_query);

if($banyake >0){

echo"<script>alert('Username sudah Ada, gunakan username lain')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./?page=data_user'>";


}else{}
		*/
		
		
		
$query=mysql_query("insert into tb_user (kode_user, username_user, password_user , nama_user, level_user, hp_user, kota) values ('$_POST[kode]' , '$_POST[username]' , '$_POST[pass]' , '$_POST[nama]','$_POST[level]', '$_POST[hp]', '$_POST[kota]')") or die (mysql_error());
if($query)
header("location:index.php?page=data_user");



?>