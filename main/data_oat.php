<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Data OAT</div>
                      		  			</div>
	<div class="content-box-large box-with-header">
<a href="?page=tambah_oat" class="btn btn-success">Tambah OAT</a>
					</div>
                    
		  		</div>
                </div>


               <div class="content-box-large">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

<thead>

<tr>
                    <th>Nama</th>
					<th>Harga</th>
                    <th>Volume</th>
                    <th>Aksi</th>
</tr>

</thead>

<tbody>
<!-----------------------------------Content------------------------------------>
 <?php
		$device_query = mysql_query("select * from tb_oat")or die(mysql_error());
		while($row = mysql_fetch_array($device_query)){
		$id = $row['id_oat'];

		?>
<tr class="odd gradeX">
<td><?php echo $row['nama_kota']; ?></td>
<td><?php echo $row['harga_oat']; ?></td>
<td><?php echo $row['vol_oat']; ?></td>

			<td>
           <?php echo"<a href='del_oat.php?id_oat= $row[id_oat]' onClick=\"return confirm('Anda yakin ingin menghapusnya?')\" class='btn btn-default' >Hapus</a>" ?>
			<a href="?page=edit_oat&id_oat=<?php echo $row['id_oat']; ?>" class="btn btn-default" >Edit</a>
            </td>		
            
</tr>

<?php 
}?>  


</tbody>

</table>







</div>

</div>

</div>