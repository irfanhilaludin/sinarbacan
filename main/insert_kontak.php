
<?php
 include('dbcon.php');
dbcon(); 


$query=mysql_query("insert into tb_kontak_all (kode_kontak, nama_kontak, alamat_kontak, kota_kontak, Provinsi_kontak, cp_kontak, telepon_kontak,  fax_kontak, email_kontak, status_kontak, tanggal_kontak, pembuat) values ('$_POST[kode_pel]', '$_POST[nama_pel]','$_POST[alamat_pel]','$_POST[kota_pel]','$_POST[provinsi_pel]','$_POST[purchasing_pel]','$_POST[telp_pel]', '$_POST[fax_pel]','$_POST[email_pel]', 'belum dihubungi',NOW(), 'admin')") or die (mysql_error());

if($query){
header("location:index.php?page=tambah_kontak");

}

?>