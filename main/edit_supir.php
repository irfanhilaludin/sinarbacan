<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Edit User</div>
                      		  			</div>
	<div class="content-box-large box-with-header">
<a href="?page=data_supir" class="btn btn-success">Data Supir</a>
					</div>
                    
		  		</div>
                
		  	</div>

               <div class="content-box-large">
                  <br />
                  <form role="form" action="update_supir.php" enctype="multipart/form-data" method="post">
                    <table width="100%" class="table">
                      <?php 
				$update_query = mysql_query("select * from tb_supir where id_supir = '$_GET[id_supir]'")or die(mysql_error());
		while($row_update = mysql_fetch_array($update_query)){
		?>
         <input name="id_supir" type="hidden" value="<?php echo $row_update['id_supir']; ?>" />
  <tr>
    <td>Nama User</td>
    <td>
    <input type="text" class="form-control col-md-7 col-xs-12" placeholder="Masukan Nama User ..." name="nama" value="<?php echo $row_update['nama_supir']; ?>">
    </td>
  </tr>
    <tr>
    <td>No. KTP</td>
    <td>
     <input type="text" class="form-control col-md-7 col-xs-12" placeholder="Masukan No. HP ..." name="ktp" value="<?php echo $row_update['no_ktp']; ?>">
    </td>
  </tr>
    <tr>
    <td>No. HP</td>
    <td>
     <input type="text" class="form-control col-md-7 col-xs-12" placeholder="Masukan No. HP ..." name="hp" value="<?php echo $row_update['no_hp']; ?>" >
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



