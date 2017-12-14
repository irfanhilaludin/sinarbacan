   <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Isi Data Pengiriman</h2>
                        
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
   <?php

	$pen_query = mysql_query("select * from tb_kirim_po where id_po = '$_GET[id_kirim]'")or die(mysql_error());
		while($row_pen = mysql_fetch_array($pen_query)){
		
		$pelanggan_query = mysql_query("select * from tb_kontak_all where id_kontak = '$row_pen[id_kontak]'")or die(mysql_error());
		while($row_pel = mysql_fetch_array($pelanggan_query)){
	
		?>
<form action="insert_segel.php" enctype="multipart/form-data" method="post"">
  <input name="id_pen" type="hidden" value="<?php echo $row_pen['id_po']; ?>" />
  <input name="id_user" type="hidden" value="<?php echo $row_pel['id_user']; ?>" />
  <input name="id_pel" type="hidden" value="<?php echo $row_pel['id_kontak']; ?>" />
  <input name="status" type="hidden" value="pending" />
                    <!-- text input -->
                    
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%"  >
   <tr>
    <td>Nama Pelanggan</td>
    <td colspan="3"><input type="text" name="nama" class="form-control" value="<?php echo $row_pel['nama_kontak']; ?>"required /></td>
     </tr>
     
      <tr>
     <td>Alamat Kirim</td>
    <td colspan="3"><input type="text" name="alamat_kirim" class="form-control" value="<?php echo $row_pen['alamat_kirim']; ?>"required /> </td>
  </tr>
    <tr>
    <td>Volume</td>
    <td colspan="3"><?php echo $row_pen['vol_kirim']; ?></td>
    </tr>
  <tr>
    <td>Tanggal Kirim</td>
    <td colspan="3"><?php echo $row_pen['tanggal_kirim']; ?></td>
    </tr>
    <tr>
    
	<td>Pukul Kirim</td>
    <td colspan="3"><?php echo $row_pen['jam_kirim']; ?> WIB</td>    
   
  </tr>
   <tr>
    <td>Penerima Barang</td>
    <td colspan="3"><input type="text" name="penerima_barang" class="form-control" value="<?php echo $row_pen['penerima_barang']; ?>" required /> </td>
    </tr>
    <tr>
    
          <td>No. Telpon Penerima Barang</td>
    <td colspan="3"><input type="text" name="no_telp_penerima" class="form-control" value="<?php echo $row_pen['no_telp_penerima']; ?>" /></td>
  </tr>
   <tr>
<td  rowspan="2" >Segel Atas</td>
<td  ><input type="text" name="segel_atas1" class="form-control" placeholder="Segel Atas Pertama Wajib di isi" required/></td>
 <td ><input type="text" name="segel_atas2" class="form-control" placeholder="Segel Atas Kedua"/></td>
  </tr>
    <tr>
   
    <td ><input type="text" name="segel_atas3" class="form-control" placeholder="Segel Atas Ketiga"/></td>
    <td ><input type="text" name="segel_atas4" class="form-control" placeholder="Segel Atas Kempat"/></td>
  </tr>
  
   <tr>
<td>Segel Bawah</td>
<td colspan="1" ><input type="text" name="segel_bawah1" class="form-control" placeholder="Segel Bawah Pertama Wajib di isi" required/></td>
    <td colspan="2" ><input type="text" name="segel_bawah2" class="form-control" placeholder="Segel Bawah Kedua" /></td>
  </tr>
  
 
    <tr>
       <td>No Pol Mobil :</td>
    <td colspan="3"> <input type="text" name="mobil"  class="form-control" required /></td>
  </tr>
    
    <tr>
    <td>Sopir</td>
    <td colspan="3">    <select name="sopir" class="select2_single form-control" tabindex="-1">
    
    <?php
    $sopir = mysql_query("select * from tb_supir where level = 'sopir'")or die(mysql_error());
		while($row_sopir = mysql_fetch_array($sopir)){
    ?>
    <option value="<?php echo $row_sopir['nama_supir']; ?>" class=""><?php echo $row_sopir['nama_supir']; ?></option>
    <?php
    }	
	
	
	?>
    </select>
    </td>
    </tr>
    <tr>
    <td>Kernet </td>
     <td colspan="3">
       <select name="kernet" class="form-control">
           <option>-</option>
    <?php
    $kernet = mysql_query("select * from tb_supir where level = 'sopir'")or die(mysql_error());
		while($row_kernet = mysql_fetch_array($kernet)){
    ?>
    <option value="<?php echo $row_kernet['nama_supir']; ?>" class=""><?php echo $row_kernet['nama_supir']; ?></option>
    <?php
    }	
	
	
	?>
    </select>
     
     
     
     </td>
  </tr>
  
  <tr>
    <td>Keterangan</td>
    <td  colspan="2"><textarea name="kelengkapan" class="form-control"  cols="" rows=""><?php echo $row_pel['kelengkapan_po']; ?></textarea> </td>
    </tr>
    <tr>
    
      <td colspan="3" align="right">
                    <button type="submit" class="btn btn-success btn-lg fa fa-print" >Simpan</button>
                  </td>

   </td>
  </tr>
  
</table>

            

                  </form>
                  
                   <?php
				   }
				  }
				  ?>
				 </div>
                
          </div>
          </div>