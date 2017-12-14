<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Data Supir dan Kernet</div>
                      		  			</div>
	<div class="content-box-large box-with-header">
<a href="?page=tambah_supir" class="btn btn-success">Tambah Supir dan Kernet</a>
					</div>
                    
		  		</div>
                
		  	</div>






               <div class="content-box-large">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

<thead>

<tr>
<th>No</th>
                    <th>Nama</th>
					<th>No. HP</th>
                    <th>No. KTP</th>
                    <th>Aksi</th>
</tr>

</thead>

<tbody>
<!-----------------------------------Content------------------------------------>
 <?php
		$device_query = mysql_query("select * from tb_supir")or die(mysql_error());
		while($row = mysql_fetch_array($device_query)){
		$id = $row['id_supir'];

		?>
<tr class="odd gradeX">
<td><?php echo $row['id_supir']; ?></td>
<td><?php echo $row['nama_supir']; ?></td>
<td><?php echo $row['no_ktp']; ?></td>
        		<td><?php echo $row['no_hp']; ?></td>

			
			<td>
           <?php echo"<a href='del_supir.php?id_supir= $row[id_supir]' onClick=\"return confirm('Anda yakin ingin menghapusnya?')\" class='btn btn-default' >Hapus</a>" ?>
			<a href="?page=edit_supir&id_supir=<?php echo $row['id_supir']; ?>" class="btn btn-default" >Edit</a>
            </td>		
            
</tr>

<?php 
}?>  


</tbody>

</table>







</div>

</div>

</div>