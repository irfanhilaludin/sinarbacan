<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Purchase Order</div>
                       
						
		  			</div>
                    
		  		</div>
                
		  	</div>
      <div class="content-box-large">
   <?php
		$pelanggan_query = mysql_query("select * from tb_kontak_all where id_kontak = '$_GET[id_kontak]'")or die(mysql_error());
		while($row_pel = mysql_fetch_array($pelanggan_query)){
	
		?>
<form action="tambah_pelanggan_po.php" enctype="multipart/form-data" method="post">
  <input name="id_user" type="hidden" value="<?php echo $row_pel['id_user']; ?>" />
  <input name="id_pel" type="hidden" value="<?php echo $row_pel['id_kontak']; ?>" />
  <input name="status" type="hidden" value="setuju" />
                    <!-- text input -->
                    
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%"  >
                       <tr>
    <td>Nomor PO</td>
    <td colspan="3"><input type="text" name="no_po" class="form-control" value="-"required /></td>
     </tr>
     
   <tr>
    <td>Nama Pemesan : </td>
    <td colspan="3"><input type="text" name="nama" class="form-control" value="<?php echo $row_pel['nama_kontak']; ?>"required /></td>
     </tr>
  
  <tr>
     <td>Alamat Pelanggan : </td>
    <td><input type="text" name="alamat" class="form-control" value="<?php echo $row_pel['alamat_kontak']; ?>"required /> </td>
    <td>Kota Pelanggan</td>
    <td><input type="text" name="kota" class="form-control" value="<?php echo $row_pel['kota_kontak']; ?>"required /></td>
      </tr>
      <tr>
    <td>Kirim Kepada : </td>
    <td colspan="3"><input type="text" name="nama_kontak_po" class="form-control" value="<?php echo $row_pel['nama_kontak']; ?>"required /></td>
     </tr>
  
      <tr>
     <td>Alamat Kirim</td>
    <td><input type="text" name="alamat_kirim" class="form-control"required /> </td>
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
    
    <div class="input-group date form_date1 col-md-10" data-date="" data-date-format="yyyy-mm-dd" data-link-field="tanggal_kirim" data-link-format="yyyy-mm-dd">
<input class="form-control" size="16" type="text" value="" name="tanggal_kirim" readonly>
<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
</div>

</td>
	<td>Barang Sampai Pukul :</td>
    <td>
     <div class="input-group date form_time col-md-10" data-date="" data-date-format="hh:ii" data-link-field="pukul_kirim" data-link-format="hh:ii">
<input class="form-control" size="16" type="text" value="" name="pukul_kirim" readonly>
<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
</div>
    
    </td>    
   
  </tr>
   <tr>
    <td>Purchasing</td>
    <td><input type="text" name="cp" class="form-control" value="<?php echo $row_pel['cp_kontak']; ?>"required /></td>
    <td>Penerima Barang</td>
    <td><input type="text" name="penerima_barang" class="form-control" value="-" /> </td>
  </tr>
   <tr>
    <td>No. Telpon Purchasing</td>
    <td><input type="text" name="telp" class="form-control" value="<?php echo $row_pel['telepon_kontak']; ?>"required /></td>
      <td>No. Telpon Penerima Barang</td>
    <td><input type="text" name="no_telp_penerima" class="form-control"  value="-"/></td>
  </tr>
  
  <tr>
 <td>Email Pelanggan</td>
    <td><input type="text" name="email" class="form-control" value="<?php echo $row_pel['email_kontak']; ?>" /></td>
    <td>No. Fax Pelanggan</td>
    <td> <input type="text" name="fax" class="form-control" value="<?php echo $row_pel['fax_kontak']; ?>" /></td>
  </tr>
   <tr>
    <td>Volume</td>
    <td> <input type="number" name="vol" class="form-control"  required /></td>
       <td>Harga PO</td>
    <td> <input type="number" name="harga" min=4  class="form-control" required /></td>
  </tr>
    
    <tr>
    <td>Fee Purchasing</td>
    <td> <input type="number" name="fee" class="form-control"  /></td>
    <td>NPWP : </td>
<td> <input type="text" name="npwp_po" id="npwp" class="form-control" value="<?php echo $row_pel['npwp_kontak']; ?>" /></td>
  </tr>
    <tr>
    <td>Pembayaran</td>
    <td colspan="2">   
    <div class="radio-group">
    <input name="pembayaran" type="radio" value="Cash Of Delivery" class="radio-box" checked="checked">COD
     <input name="pembayaran" type="radio" value="Cash Before Delivery" class="radio-box">CBD
      <input name="pembayaran" type="radio" value="1 Minggu" class="radio-box">1 Minggu
       <input name="pembayaran" type="radio" value="2 Minggu" class="radio-box">2 Minggu
        <input name="pembayaran" type="radio" value="3 Minggu" class="radio-box">3 Minggu
            <input name="pembayaran" type="radio" value="4 Minggu" class="radio-box">4 Minggu
</div>
</td>
<td>  
Tanggal Bayar : <div class="input-group date form_date2 col-md-12" data-date="" data-date-format="yyyy-mm-dd" data-link-field="jatuh_tempo" data-link-format="yyyy-mm-dd">
<input class="form-control" size="16" type="text" value="" name="jatuh_tempo" readonly>
<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
</div>
</td>
 </tr>
 <tr>
<td>Penanggung Jawab Pembayaran</td>
<td><input type="text" name="penanggung_bayar" class="form-control" value="-" /></td>
<td>No. Telpon Penanggung Jawab Pembayaran </td>
<td><input type="text" name="no_penanggung_bayar" class="form-control" value="-"/></td>
</tr>

   <tr>
    <td>Keterangan</td>
    <td  colspan="3"><textarea name="kelengkapan" class="form-control"  cols="" rows=""></textarea> 
    
   </td>
  </tr>
  
</table>

              <div>
                    <button type="submit" class="btn btn-success">Turun PO :D</button>
                  </div>


                  </form>
                  
                   <?php
				   
				  }
				  ?>
            </div>