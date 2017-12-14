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
		
		
		
$query=mysql_query("insert into tb_mobil (nopol, jenis_mobil, ukuran_mobil) values ('$_POST[nopol]' , 'Tanki' , '$_POST[vol]')") or die (mysql_error());

if($query)
echo"<script>alert('Berhasil Menambah Armada')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./?page=data_armada'>";

?>