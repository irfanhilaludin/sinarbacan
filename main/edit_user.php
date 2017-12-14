<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Edit User</div>
                      		  			</div>
	<div class="content-box-large box-with-header">
<a href="?page=data_user" class="btn btn-success">Data User</a>
					</div>
                    
		  		</div>
                
		  	</div>

               <div class="content-box-large">
                  <br />
                  <form role="form" action="update_user.php" enctype="multipart/form-data" method="post">
                    <table width="100%" class="table">
                      <?php 
				$update_query = mysql_query("select * from tb_user where id_user = '$_GET[id_user]'")or die(mysql_error());
		while($row_update = mysql_fetch_array($update_query)){
		?>
         <input name="id_user" type="hidden" value="<?php echo $row_update['id_user']; ?>" />
 
  <tr>
    <td>Kode User</td>
    <td>
    <input type="text" class="form-control col-md-7 col-xs-12" placeholder="Masukan kode User ..." name="kode" value="<?php echo $row_update['kode_user']; ?>">
    </td>
  </tr>
 
 
 
 
 
 
  <tr>
    <td>Nama User</td>
    <td>
    <input type="text" class="form-control col-md-7 col-xs-12" placeholder="Masukan Nama User ..." name="nama" value="<?php echo $row_update['nama_user']; ?>">
    </td>
  </tr>
  
    
  
  
  
  
    <tr>
    <td>No. HP</td>
    <td>
     <input type="text" class="form-control col-md-7 col-xs-12" placeholder="Masukan No. HP ..." name="hp" value="<?php echo $row_update['hp_user']; ?>">
    </td>
  </tr>
    <tr>
    <td>Username</td>
    <td>   <input type="text" class="form-control col-md-7 col-xs-12" placeholder="Masukan username login ..." name="username" value="<?php echo $row_update['username_user']; ?>"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td> <input type="password" class="form-control col-md-7 col-xs-12" placeholder="Masukan password ..." name="pass" value="<?php echo $row_update['password_user']; ?>"></td>
  </tr>
    <tr>
    <td>Level</td>
     <td> 
   <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12">
                			
                          <label>
                            <input type="radio" name="level" class="flat" value="marketing" id="status_pel_1" checked="checked" />
                            Marketing</label>
                            
                             <label>
                            <input type="radio" name="level" class="flat" value="broker" id="status_pel_1" />
                            Broker</label>
                          
                                                   
                     </div>
                     </div>
                     </td>
  </tr>
</table>

 <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <a href="?page=data_user" class="btn btn-primary">Cancel</a>
                        <button type="submit" class="btn btn-success">Update</button>
                      </div>
                    </div>


                  </form>
 <?php }?>
</div>

</div>

</div>



