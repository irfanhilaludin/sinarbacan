<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Data Armada</div>
                      		  			</div>
	<div class="content-box-large box-with-header">
<a href="?page=tambah_armada" class="btn btn-success">Tambah Armada</a>


					</div>
                    
		  		</div>
                
		  	</div>






               <div class="content-box-large">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

<thead>

<tr>


					<th>Kode</th>
                    <th>Nomor Polisi</th>
					<th>Jenis</th>
   <th>Volume Muat</th>	
                    <th>Aksi</th>
</tr>

</thead>

<tbody>
<!-----------------------------------Content------------------------------------>
 <?php
		$device_query = mysql_query("select * from tb_mobil")or die(mysql_error());
		while($row = mysql_fetch_array($device_query)){
		$id = $row['id_mobil'];

		?>
<tr>
<td><?php echo $row['id_mobil']; ?></td>
<td><?php echo $row['nopol']; ?></td>
        		<td><?php echo $row['jenis_mobil']; ?></td>

			<td>	   
						<?php echo $row['ukuran_mobil'];  ; ?>
			</td>
			
			<td>
           <?php echo"<a href='del_armada.php?id_mobil=$row[id_mobil]' onClick=\"return confirm('Anda yakin ingin menghapusnya?')\" class='btn btn-default' >Hapus</a>" ?>
			<a href="?page=edit_armada&id_mobil=<?php echo $row['id_mobil']; ?>" class="btn btn-default" >Edit</a>
            </td>		
            
</tr>

<?php 
}?>  


</tbody>

</table>







</div>

</div>

</div>