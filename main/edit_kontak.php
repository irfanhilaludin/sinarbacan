<div class="row">
<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
                  <h2>Edit Data</h2>
    </div>
		  			<div class="content-box-large box-with-header">
                  <br />
                      <?php
		$pelanggan_query = mysql_query("select * from tb_kontak_all where id_kontak = '$_GET[id_kontak]'")or die(mysql_error());
		while($row_pel = mysql_fetch_array($pelanggan_query)){
		
		?>
                  <form class="form-horizontal form-label-left input_mask" action="update_kontak.php" method="post" enctype="multipart/form-data">
  <input name="id_kon" type="hidden" value="<?php echo $row_pel['id_kontak']; ?>" />

                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="pertama" required="required" class="form-control col-md-7 col-xs-12" name="kode_pel" placeholder="Kode Kontak" value="<?php echo $row_pel['kode_kontak']; ?>" >
                </div>
                </div>
                
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <input type="text" id="kedua" required="required" class="form-control col-md-7 col-xs-12"  name="nama_pel" placeholder="Nama Perusahaan" value="<?php echo $row_pel['nama_kontak']; ?>" required >
                </div>
                </div>


<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<input type="text" id="ketiga" required="required" class="form-control col-md-7 col-xs-12"  name="alamat_pel" placeholder="Alamat Perusahaan" value="<?php echo $row_pel['alamat_kontak']; ?>" required >
</div>
</div>

<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kota
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<input type="text" id="empat" required="required" class="form-control col-md-7 col-xs-12"  name="kota_pel"  placeholder="Kota Perusahaan" value="<?php echo $row_pel['kota_kontak']; ?>" required >

</div>
</div>

<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Provinsi
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<input type="text" id="empat" required="required" class="form-control col-md-7 col-xs-12"  name="provinsi_pel"  placeholder="provinsi Perusahaan" value="<?php echo $row_pel['Provinsi_kontak']; ?>" required >


</div>
</div>


<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<input type="text" id="5" class="form-control col-md-7 col-xs-12"  name="email_pel" placeholder="Email Perusahaan" value="<?php echo $row_pel['email_kontak']; ?>"  >
</div>
</div>

<div class="form-group">
 <span class="fa fa-phone "></span>
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telepon
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<input type="text" id="6" class="form-control col-md-7 col-xs-12"  name="telp_pel" placeholder="Telepon Perusahaan" value="<?php echo $row_pel['telepon_kontak']; ?>" required >
</div>
</div>

<div class="form-group">
 <span class="fa fa-fax "></span>
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fax
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<input type="text" id="7" class="form-control col-md-7 col-xs-12"  name="fax_pel" placeholder="Fax Perusahaan" data-inputmask="'mask': '999-9999999'"  value="<?php echo $row_pel['fax_kontak'];?> "  >
</div>
</div>


<div class="form-group">
 <span class="fa fa-user "></span>
<label class="control-label col-md-3 col-sm-3 col-xs-12">Purchasing
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<input type="text" id="8" class="form-control col-md-7 col-xs-12"  name="cp_pel" placeholder="Purchasing Perusahaan"  value="<?php echo $row_pel['cp_kontak'];?> "  >
</div>
</div>
                   
                   					
                    
                  

                                       
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Status
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <?php
                      if($row_pel['status_kontak']=='telah dihubungi')
    { 
	?> 
                      
                        <p>
                          <label>
                            <input type="radio" name="status_pel" class="flat" value="belum dihubungi" id="status_pel_0" />
                            belum dihubungi</label>
                          <br />
                          <label>
                            <input type="radio" name="status_pel" class="flat" value="telah dihubungi" id="status_pel_1" checked="checked"/>
                            telah dihubungi</label>
                          <br />
                           <label>
                            <input type="radio" name="status_pel" class="flat" value="telepon ulang" id="status_pel_2" />
                            telepon ulang</label>
                          <br />
                        </p>
  <?php
  }
  else if($row_pel['status_kontak']=='belum dihubungi')
    {       
	?>
   <p>
                          <label>
                            <input type="radio" name="status_pel" value="belum dihubungi" id="status_pel_0" checked="checked" class="flat"/>
                            belum dihubungi</label>
                          <br />
                          <label>
                            <input type="radio" name="status_pel" value="telah dihubungi" id="status_pel_1" class="flat"/>
                            telah dihubungi</label>
                          <br />
                           <label>
                            <input type="radio" name="status_pel" value="telepon ulang" id="status_pel_2" class="flat" />
                            telepon ulang</label>
                          <br />
                        </p>   
    
    <?php
	}
	else
    {
	?>
     <p>
                          <label>
                            <input type="radio" name="status_pel" value="belum dihubungi" id="status_pel_0" class="flat"/>
                            belum dihubungi</label>
                          <br />
                          <label>
                            <input type="radio" name="status_pel" value="telah dihubungi" id="status_pel_1" class="flat"/>
                            telah dihubungi</label>
                          <br />
                           <label>
                            <input type="radio" name="status_pel" value="telepon ulang" id="status_pel_2"  class="flat" checked="checked"/>
                            telepon ulang</label>
                          <br />
                           </p>  
  <?php
  }
  ?>                      
    
                  
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input   class="form-control col-md-7 col-xs-12"  type="text" placeholder="Keterangan" name="report_pel"  value="<?php echo $row_pel['report_kontak'];?> ">
                      </div>
                    </div>
                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button type="reset" class="btn btn-primary">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>

                   <?php
				  }
				  ?>


            