<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Edit User</div>
                      		  			</div>
	<div class="content-box-large box-with-header">
<a href="?page=data_oat" class="btn btn-success">Data OAT</a>
					</div>
                    
		  		</div>
                
		  	</div>

               <div class="content-box-large">
                  <br />
                  <form role="form" action="update_oat.php" enctype="multipart/form-data" method="post">
                    <table width="100%" class="table">
                      <?php 
				$update_query = mysql_query("select * from tb_oat where id_oat = '$_GET[id_oat]'")or die(mysql_error());
		while($row_update = mysql_fetch_array($update_query)){
		?>
         <input name="id_oat" type="hidden" value="<?php echo $row_update['id_oat']; ?>" />
  <tr>
    <td>Nama Kota</td>
    <td>
    <input type="text" class="form-control col-md-7 col-xs-12" placeholder="Masukan Nama Kota ..." name="nama" value="<?php echo $row_update['nama_kota']; ?>">
    </td>
  </tr>
    <tr>
    <td>Harga</td>
    <td>
     <input type="text" class="form-control col-md-7 col-xs-12" placeholder="Masukan No. HP ..." name="harga" value="<?php echo $row_update['harga_oat']; ?>">
    </td>
  </tr>
    <tr>
    <td>Volume</td>
    <td>
     <input type="text" class="form-control col-md-7 col-xs-12" placeholder="Masukan No. HP ..." name="vol" value="<?php echo $row_update['vol_oat']; ?>" >
    </td>
  </tr>
   
   
</table>

                        <a href="?page=data_supir" class="btn btn-primary">Cancel</a>
                        <button type="submit" class="btn btn-success">Update</button>



                  </form>
 <?php }?>
</div>

</div>

</div>



