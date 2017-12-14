<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Data Kernet</div>
                      		  			</div>
	<div class="content-box-large box-with-header">
<a href="?page=tambah_kernet" class="btn btn-success">Tambah Kernet</a>					</div>
                    
		  		</div>
                
		  	</div>






               <div class="content-box-large">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

<thead>

<tr>
                    <th>Nama</th>
					<th>No. HP</th>
                    <th>No. KTP</th>
                    <th>Aksi</th>
</tr>

</thead>

<tbody>
<!-----------------------------------Content------------------------------------>
 <?php
		$device_query = mysql_query("select * from tb_kernet")or die(mysql_error());
		while($row = mysql_fetch_array($device_query)){
		$id = $row['id_kernet'];

		?>
<tr class="odd gradeX">
<td><?php echo $row['nama_kernet']; ?></td>
<td><?php echo $row['no_ktp']; ?></td>
        		<td><?php echo $row['no_hp']; ?></td>

			<td>
           <?php echo"<a href='del_kernet.php?id_kernet= $row[id_kernet]' onClick=\"return confirm('Anda yakin ingin menghapusnya?')\" class='btn btn-default' >Hapus</a>" ?>
			<a href="?page=edit_kernet&id_kernet=<?php echo $row['id_kernet']; ?>" class="btn btn-default" >Edit</a>
            </td>		
            
</tr>

<?php 
}?>  


</tbody>

</table>







</div>

</div>

</div>