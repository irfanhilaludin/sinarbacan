<?php
 include('dbcon.php');
dbcon(); 
$tgl = $_POST['tanggal_kirim'];
$tempo = $_POST['jatuh_tempo'];

$query1=mysql_query("update tb_kontak_all set report_kontak = 'PO' where id_kontak = '$_POST[id_pel]'") or die (mysql_error());

$query=mysql_query("update tb_po set nama_kontak_po = '$_POST[nama_kontak_po]' , npwp = '$_POST[npwp_po]' , penerima_barang = '$_POST[penerima_barang]' ,  no_telp_penerima = '$_POST[no_telp_penerima]' , penanggung_bayar = '$_POST[penanggung_bayar]' , no_penanggung_bayar = '$_POST[no_penanggung_bayar]' , harga_po = '$_POST[harga_po]' ,vol_po = '$_POST[vol_po]' ,fee_po = '$_POST[fee_po]' , id_oat = '$_POST[oat]' , alamat_kirim = '$_POST[alamat_kirim]' , pembayaran_po = '$_POST[pembayaran_po]' , jatuh_tempo = '$tempo' , status_po ='setuju' , kelengkapan_po = '$_POST[kelengkapan_po]'  where id_po = '$_POST[id_po]'") or die (mysql_error());


if($query) {
echo"<script>alert('Pemesanan Berhasil disetujui')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./?page=data_pemesanan_setuju'>";
	}else{
	echo"<script>alert('Pemesanan Gagal')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./?page=data_pemesanan_setuju'>";
	}
?>