<?php
 include('dbcon.php');
dbcon(); 
$jum = count($_POST["id_kon"]);
if($jum<1){
echo"<script>alert('Gagal Menghapus, Pastikan anda telah memilih')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./?page=data_kontak'>";
}else{
for ($x=0;$x<$jum;$x++){
$pel = $_POST["id_kon"][$x];

$query=mysql_query("delete from tb_kontak_all where id_kontak='$pel'") or die (mysql_error());
}
if($query)
echo"<script>alert('Berhasil Menghapus, Semoga Anda Tidak Menyesal ')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./?page=data_kontak'>";
}
?>