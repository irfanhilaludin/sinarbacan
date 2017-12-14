<div class="row">
		  		<div class="col-md-12 panel-success">
   
  <div class="content-box-header panel-heading">
	  					<div class="panel-title ">Edit Penawaran</div>
                       						
		  			</div>
                 
                    
		  			<div class="content-box-large box-with-header">
                          <?php
	$pen_query = mysql_query("select * from tb_penawaran where id_penawaran = '$_GET[id_penawaran]'")or die(mysql_error());
		while($row_pen = mysql_fetch_array($pen_query)){
		
		$pelanggan_query = mysql_query("select * from tb_kontak_all where id_kontak = '$row_pen[id_kontak]'")or die(mysql_error());
		while($row_pel = mysql_fetch_array($pelanggan_query)){
	
		
		
		?>
<form role="form" action="update_penawaran.php" enctype="multipart/form-data" method="post">
  <input name="id_pen" type="hidden" value="<?php echo $row_pen['id_penawaran']; ?>" />
  <input name="id_pel" type="hidden" value="<?php echo $row_pel['id_kontak']; ?>" />
                    <!-- text input -->
                    
                    <table class="table">
   <tr>
    <td>Nama Pelanggan</td>
    <td> <input type="text" class="form-control" placeholder="Masukan Nama" name="nama_pel" value="<?php echo $row_pel['nama_kontak']; ?>" /></td>
  </tr>
   <tr>
    <td>Alamat Pelanggan</td>
    <td> <input type="text" class="form-control" placeholder="Masukan Alamat ..." name="alamat_pel" value="<?php echo $row_pel['alamat_kontak']; ?>" /> </td>
  </tr>
   <tr>
    <td>Kota Pelanggan</td>
    <td> <input type="text" class="form-control" placeholder="Masukan Kota ..." name="kota_pel" value="<?php echo $row_pel['kota_kontak']; ?>"></td>
    
    </tr>
   <tr>
   <td>Provinsi Pelanggan</td>
    <td> <input type="text" class="form-control" placeholder="Masukan provinsi ..." name="provinsi_pel" value="<?php echo $row_pel['provinsi_kontak']; ?>"></td>
    
    
  </tr>
   <tr>
    <td>Kontak Person Pelanggan</td>
    <td><input type="text" class="form-control" placeholder="Masukan Contak Person ..." name="cp_pel" value="<?php echo $row_pel['cp_kontak']; ?>"></td>
  </tr>
   <tr>
    <td>No. Telpon Pelanggan</td>
    <td> <input type="text" class="form-control" placeholder="Masukan Telepon ..." name="telp_pel" value="<?php echo $row_pel['telepon_kontak']; ?>"></td>
  </tr>
  
  <tr>
    <td>No. Fax Pelanggan</td>
    <td> <input type="text" class="form-control" placeholder="Masukan fax ..." name="fax_pel" value="<?php echo $row_pel['fax_kontak']; ?>"></td>
  </tr>
   <tr>
    <td>Email Pelanggan</td>
    <td> <input type="text" class="form-control" placeholder="Masukan Email ..." name="email_pel" value="<?php echo $row_pel['email_kontak']; ?>"></td>
  </tr>
     <tr>
    <td>Tanggal Penawaran</td>
    <td>  <div class="input-group date form_date1 col-md-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="tanggal_penawaran" data-link-format="yyyy-mm-dd">
<input class="form-control" size="16" type="text" value="" name="tanggal_penawaran" readonly>
<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
</div></td>
  </tr>
   <tr>
    <td>Harga</td>
    <td> <input type="number" name="harga" value="<?php echo $row_pen['harga_penawaran']; ?>"/></td>
  </tr>
    <tr>
    <td>Pembayaran</td>
    <td> <div class="form-group">
<label class="radio-inline"><input type="radio" name="pembayaran" value = "Cash On Delivery" checked >COD</label>
<label class="radio-inline"><input type="radio" name="pembayaran" value = "Cash Before Delivery">CBD</label>
<label class="radio-inline"><input type="radio" name="pembayaran" value = "1 Minggu">1 Minggu</label>
<label class="radio-inline"><input type="radio" name="pembayaran" value = "2 Minggu">2 Minggu</label>
<label class="radio-inline"><input type="radio" name="pembayaran" value = "3 Minggu">3 Minggu</label>
<label class="radio-inline"><input type="radio" name="pembayaran" value = "4 Minggu">4 Minggu</label>
					  
                    </div></td>
  </tr>
  <tr>
    <td>Keterangan</td>
    <td> <input type="text" name="respon" value="<?php echo $row_pen['ket_penawaran']; ?>"/></td>
  </tr>
</table>

              <div>
                    <button type="submit" class="btn btn-blue">Update</button>
                  </div>


                  </form>
                  
                   <?php
				   }
				  }
				  ?>
            </div></div>

        </div>
        