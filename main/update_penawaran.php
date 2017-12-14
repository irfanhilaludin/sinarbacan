<?php
 include('dbcon.php');
dbcon(); 



$query1=mysql_query("update tb_kontak_all set nama_kontak = '$_POST[nama_pel]' , alamat_kontak = '$_POST[alamat_pel]' , kota_kontak = '$_POST[kota_pel]',provinsi_kontak = '$_POST[provinsi_pel]', cp_kontak = '$_POST[cp_pel]' , telepon_kontak = '$_POST[telp_pel]', fax_kontak = '$_POST[fax_pel]', email_kontak = '$_POST[email_pel]' where id_kontak = '$_POST[id_pel]'") or die (mysql_error());


$query=mysql_query("update tb_penawaran set harga_penawaran = '$_POST[harga]' , pembayaran = '$_POST[pembayaran]' , tanggal_penawaran = '$_POST[tanggal_penawaran]', ket_penawaran = '$_POST[respon]' where id_penawaran = '$_POST[id_pen]'") or die (mysql_error());

if($query) 
echo"<script>alert('Penawaran Berhasil di Ubah')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./?page=data_penawaran'>";
?>