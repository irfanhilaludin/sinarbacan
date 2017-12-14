<?php
include('dbcon.php');
dbcon(); 

	
	
$id_kirim = $_POST['id_pen'];
$query1=mysql_query("update tb_po set status_kirim ='sudah kirim' where id_po = '$_POST[id_pen]' ") or die (mysql_error());

$query=mysql_query("insert into tb_kirim_po (id_po, id_kontak, id_supir, id_kernet, id_user , id_tanki, harga_oat, tanggal_do, segel_atas1, segel_atas2 , segel_atas3, segel_atas4, segel_bawah1, segel_bawah2) values ('$_POST[id_pen]', '$_POST[id_pel]',  '$_POST[sopir]',  '$_POST[kernet]','$_POST[id_user]','$_POST[mobil]', '$_POST[oat]', NOW(), '$_POST[segel_atas1]','$_POST[segel_atas2]','$_POST[segel_atas3]', '$_POST[segel_atas4]', '$_POST[segel_bawah1]', '$_POST[segel_bawah2]')") or die (mysql_error());
 

if($query) {
echo"<script>alert('Data Pengiriman Sudah Masuk, Silahkan Cetak')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./?page=data_pengiriman_belum'>";

}else {
echo"<script>alert('Gagal Menambah Data Pengiriman')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./?page=data_pengiriman'>";
}
?>