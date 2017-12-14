<div class="row">
<div class="col-md-12 panel-warning">
<div class="content-box-header panel-heading">
<div class="panel-title ">
Data Pemesanan

</div>


</div>

</div>

</div>
<div class="content-box-large">
<?php
$pen_query = mysql_query("select * , DATE_FORMAT(tanggal_kirim,'%d-%m-%Y') as TANGGAL from tb_po where id_po = '$_GET[id_po]'")or die(mysql_error());
while($row_pen = mysql_fetch_array($pen_query)){

$pelanggan_query = mysql_query("select * from tb_kontak_all where id_kontak = '$row_pen[id_kontak]'")or die(mysql_error());
while($row_pel = mysql_fetch_array($pelanggan_query)){

?>
<form action="konfirmasi_po.php" enctype="multipart/form-data" method="post">
<input name="id_po" type="hidden" value="<?php echo $row_pen['id_po']; ?>" />
<input name="id_user" type="hidden" value="<?php echo $row_pel['id_user']; ?>" />
<input name="id_pel" type="hidden" value="<?php echo $row_pen['id_kontak']; ?>" />
<input name="status" type="hidden" value="pending" />
<!-- text input -->

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%"  >
<tr>
<td>Nama Pemesan</td>
<td ><input type="text" name="nama" class="form-control" value="<?php echo $row_pel['nama_kontak']; ?>"required /></td>
</tr>

<tr>
<td>Kirim Kepada PT</td>
<td ><input type="text" name="nama_kontak_po" class="form-control" value="<?php echo $row_pel['nama_kontak']; ?>"required /></td>
</tr>

<tr>
<td>Alamat Kirim</td>
<td><input type="text" name="alamat_kirim" class="form-control" value="<?php echo $row_pen['alamat_kirim']; ?>" /> </td>
</tr>

<tr>
<td>Kota kirim (OAT)</td>
<td>
<select name="oat" class="form-control">
<option value="0">Non OAT</option>
<?php  
$oat = mysql_query("select * from tb_oat")or die(mysql_error());
while($row_oat = mysql_fetch_array($oat)){

?>
<option value="<?php echo $row_oat['id_oat']; ?>"><?php echo $row_oat['nama_kota']; ?> (<?php echo $row_oat['vol_oat']; ?>)</option>

<?php

}
?>

</select>
</td>

</tr>
<tr>
<td>Tanggal Kirim</td>
<td>
<input class="form-control" size="16" type="text" value="<?php echo $row_pen['TANGGAL']; ?>" name="tanggal_kirim" readonly>


</td>
</tr>

<tr>
<td>Barang Sampai Pukul :</td>
<td>
<div class="input-group date form_time col-md-6" data-date="" data-date-format="hh:ii" data-link-field="pukul_kirim" data-link-format="hh:ii">
<input class="form-control" size="16" type="text" value="<?php echo $row_pen['pukul_kirim']; ?>" name="pukul_kirim" readonly>
<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
</div>

</td>    

</tr>
<tr>
<td>Bag Purchasing</td>
<td><input type="text" name="cp" class="form-control" value="<?php echo $row_pel['cp_kontak']; ?>"required /></td>
</tr>
<tr>
<td>No. Telpon Purchasing</td>
<td><input type="text" name="telp" class="form-control" value="<?php echo $row_pel['telepon_kontak']; ?>"required /></td>
</tr>
<tr>
<td>Bag Penerima Barang</td>
<td><input type="text" name="penerima_barang" class="form-control" value="<?php echo $row_pen['penerima_barang']; ?>" required /> </td>
</tr>


<tr>
<td>No. Telpon Penerima Barang</td>
<td><input type="text" name="no_telp_penerima" class="form-control" value="<?php echo $row_pen['no_telp_penerima']; ?>"  required /></td>
</tr>

<tr>
<td>Volume</td>
<td> <input type="number" name="vol_po" class="form-control" value="<?php echo $row_pen['vol_po']; ?>" required /></td>
</tr>

<tr>
<td>Harga PO</td>
<td> <input type="number" name="harga_po" min=4  class="form-control" value="<?php echo $row_pen['harga_po']; ?>" required /></td>
</tr>

<tr>
<td>Fee Purchasing</td>
<td > <input type="number" name="fee_po" class="form-control" value="<?php echo $row_pen['fee_po']; ?>"  required /></td>
</tr>

<tr>
<td>NPWP : </td>
<td> <input type="text" name="npwp_po" id="npwp" class="form-control" value="0" required /></td>

</tr>
<tr>
<td>Penanggung Jawab Pembayaran</td>
<td><input type="text" name="penanggung_bayar" class="form-control" /></td>
</tr>

<tr>
<td>No. Telpon Penanggung Jawab Pembayaran </td>
<td><input type="text" name="no_penanggung_bayar" class="form-control" /></td>
</tr>
<tr>
<td>Pembayaran</td>
<td colspan="3">   
<div class="radio-group">
<input name="pembayaran_po" type="radio" value="Cash Of Delivery" class="flat" checked="checked">COD
<input name="pembayaran_po" type="radio" value="Cash Before Delivery" class="flat">CBD
<input name="pembayaran_po" type="radio" value="1 Minggu" class="flat">1 Minggu
<input name="pembayaran_po" type="radio" value="2 Minggu" class="flat">2 Minggu
<input name="pembayaran_po" type="radio" value="3 Minggu" class="flat">3 Minggu
<input name="pembayaran_po" type="radio" value="4 Minggu" class="flat">4 Minggu
</div>
</td>
</tr>
<tr>
<td>Jatuh Tempo</td>
<td>   
<div class="input-group date form_date2 col-md-6" data-date="" data-date-format="yyyy-mm-dd" data-link-field="jatuh_tempo" data-link-format="yyyy-mm-dd">
<input class="form-control" size="16" type="text" value="" name="jatuh_tempo" readonly>
<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
</div>
</td>
</tr>
<tr>
<td>Keterangan</td>
<td><textarea name="kelengkapan_po" class="form-control"  cols="" rows=""><?php echo $row_pen['kelengkapan_po']; ?></textarea> 

</td>
</tr>

</table>

<div>
<button type="submit" class="btn btn-success">Setujui</button>
<a href="gagal_po.php?id_po=<?php echo $row_pen['id_po'];?>&id_kontak=<?php echo $row_pen['id_kontak'];?>" class="btn btn-danger btn-xs">Tidak Setuju</a>

</div>


</form>

<?php
}
}
?>
</div>