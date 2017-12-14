<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Edit Armada</div>
                      		  			</div>
	<div class="content-box-large box-with-header">
<a href="?page=data_armada" class="btn btn-success">Data Armada</a>
					</div>
                    
		  		</div>
                
		  	</div>

               <div class="content-box-large">
                  <br />
                  <form role="form" action="update_armada.php" enctype="multipart/form-data" method="post">
                    <table width="100%" class="table">
                      <?php 
				$update_query = mysql_query("select * from tb_mobil where id_mobil = '$_GET[id_mobil]'")or die(mysql_error());
		while($row_update = mysql_fetch_array($update_query)){
		?>
         <input name="id_mobil" type="hidden" value="<?php echo $row_update['id_mobil']; ?>" />
  <tr>
    <td>Nomor Polisi</td>
    <td>
    <input type="text" class="form-control col-md-7 col-xs-12" placeholder="Nomor Polisi ..." name="nopol" value="<?php echo $row_update['nopol']; ?>">
    </td>
  </tr>
    <tr>
    <td>Volume Muat</td>
    <td>
    <select name="vol">
<option value="5 KL"> 5 KL </option>
<option value="8 KL"> 8 KL </option>
<option value="10 KL"> 10 KL </option>
<option value="16 KL"> 16 KL </option>
<option value="24 KL"> 24 KL </option>
<option value="32 KL"> 32 KL </option>

 </select>
    </td>
  </tr>

</table>

                        <a href="?page=data_armada" class="btn btn-primary">Cancel</a>
                        <button type="submit" class="btn btn-success">Update</button>
                   

                  </form>
 <?php }?>
</div>

</div>

</div>



