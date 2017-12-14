<?php
 include('dbcon.php');
dbcon(); 


$pelanggan_query = mysql_query("select * from tb_kontak_usul where id_kontak= '$_GET[id_kontak]' ")or die(mysql_error());
$row = mysql_fetch_array($pelanggan_query);

$user_query = mysql_query("select * from tb_user where id_user= '$row[id_user]' ")or die(mysql_error());
$row_user = mysql_fetch_array($user_query);

$query1=mysql_query("insert into tb_kontak_all(id_user, nama_kontak, alamat_kontak, kota_kontak,provinsi_kontak, cp_kontak, telepon_kontak, fax_kontak, email_kontak, status_kontak, tanggal_kontak,tanggal_bagi, pembuat) values ('$row_user[id_user]', '$row[nama_kontak]','$row[alamat_kontak]','$row[kota_kontak]','$row[provinsi_kontak]','$row[cp_kontak]','$row[telepon_kontak]','$row[fax_kontak]','$row[email_kontak]', 'belum dihubungi',NOW(), NOW(), '$row_user[nama_user]')") or die (mysql_error());


$query=mysql_query("update tb_kontak_usul set status_kontak = 'masuk database anda' where id_kontak= '$_GET[id_kontak]'") or die (mysql_error());

if($query)
header("location:index.php?page=data_usul");
?>