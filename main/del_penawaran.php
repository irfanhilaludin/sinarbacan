<?php
 include('dbcon.php');
dbcon(); 
$jum = count($_POST["id_pn"]);
if($jum<1){
echo"<script>alert('Gagal Menghapus, Pastikan anda telah memilih')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./?page=data_penawaran'>";
}else{
for ($x=0;$x<$jum;$x++){
$pel = $_POST["id_pn"][$x];


$query1=mysql_query("update tb_kontak_all set status_kontak = 'belum dihubungi' ,  report_kontak = '' where id_kontak = '$_POST[id_kon]'") or die (mysql_error());
			
$query=mysql_query("delete from tb_penawaran where id_penawaran='$pel'") or die (mysql_error());
}
if($query)
echo"<script>alert('Berhasil Menghapus Penawaran')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./?page=data_penawaran'>";
	}
?>