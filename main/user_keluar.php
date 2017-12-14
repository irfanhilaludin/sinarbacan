<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Data User</div>
                      		  			</div>
	<div class="content-box-large box-with-header">
<a href="?page=data_user" class="btn btn-success">Data User</a>
<a href="?page=user_keluar" class="btn btn-danger">User keluar </a>
					</div>
                    
		  		</div>
                
		  	</div>






               <div class="content-box-large">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

<thead>

<tr>


					<th>Kode</th>
                    <th>Nama</th>
					<th>No. HP</th>
   <th>Keterangan</th>	
                    <th>Aksi</th>
</tr>

</thead>

<tbody>
<!-----------------------------------Content------------------------------------>
 <?php
		$device_query = mysql_query("select * from tb_user where level_user = 'keluar'")or die(mysql_error());
		while($row = mysql_fetch_array($device_query)){
		$id = $row['id_user'];

		?>
<tr class="odd gradeX">
<td><?php echo $row['kode_user']; ?></td>
<td><?php echo $row['nama_user']; ?></td>
        		<td><?php echo $row['hp_user']; ?></td>

			<td>	   
						<?php echo $row['level_user'];  ; ?>
			</td>
			
			<td>
           <?php echo"<a href='del_user.php?id_user= $row[id_user]' onClick=\"return confirm('Anda yakin ingin menghapusnya?')\" class='btn btn-default' >Hapus</a>" ?>
			
            </td>		
            
</tr>

<?php 
}?>  


</tbody>

</table>







</div>

</div>

</div>