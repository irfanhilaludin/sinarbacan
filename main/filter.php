<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Data Usulan</div>
				

		  			</div>
		  		
		  		</div>
		  	</div>
            
<div class="content-box-large">    
<h5> Pencarian: <?php 
$id = $_GET['id_kontak'];
$q = mysql_query("select * from tb_kontak_usul where id_kontak = '$_GET[id_kontak]' ")or die(mysql_error());
$row_dobel_telp = mysql_fetch_array($q);

$telepon = $row_dobel_telp['telepon_kontak'];

$kota = $row_dobel_telp['kota_kontak'];
$provinsi = $row_dobel_telp['provinsi_kontak'];
$email = $row_dobel_telp['email_kontak'];
$cari = $row_dobel_telp['nama_kontak'];


echo $cari  

?>
:
 <?php echo $telepon  ?> /
  <?php echo $kota  ?> 
 
 <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#report<?php echo $id; ?>" ><i class="fa fa-close">Tidak Bisa</i> </a>
  <a href="usul_masuk.php?id_kontak=<?php echo $id; ?>" class="btn btn-xs btn-success">Masuk</a></h5>

<!--Modal 4 -->
<div class="modal fade" id="report<?php echo $id ; ?>" tabindex="-4" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header bg-color-blue">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="myModalLabel"> Keterangan </h4>
</div>
  <form action="usul_tolak.php" method="post">
  <input name="pelang" type="hidden" value="<?php echo $id ; ?>" />
<div class="modal-body">
<textarea name="respon" cols="50" rows="6"  class="form-control"></textarea>
</div>
<div class="modal-footer">
<input name="submit" type="submit" value="Submit" class="btn btn-danger" />

</form>
</div>
</div>
</div>
</div>         
<!--Akhir Modal 4-->   
    <table id="example" class="table table-striped" cellspacing="0" width="100%">

<thead>

<tr>


<th>Nama Perusahaan</th>
<th>Telpon</th>
<th>Kota</th>
<th>Provinsi</th>
<th>Status</th>	
<th>Report</th>	
<th>Aksi</th>

</tr>

</thead>

<tbody>
<!-----------------------------------Content------------------------------------>
<?php
$pencarian = explode(" ", $cari );

$dobel_query = mysql_query("select * from tb_kontak_all where nama_kontak like '%".$pencarian[0]."%' AND nama_kontak like '%".$pencarian[1]."%' OR nama_kontak like '%".$pencarian[2]."%' OR nama_kontak like '%".$pencarian[3]."%' OR telepon_kontak = '%".$telepon."%' AND kota_kontak like '%".$kota."%' AND email_kontak like '%".$email."%'")or die(mysql_error());
while($row_dobel = mysql_fetch_array($dobel_query)){
$banyake =mysql_num_rows($dobel_query);


?>
<tr class="odd gradeX">

<td><?php echo $row_dobel['nama_kontak']; ?></td>
<td><?php echo $row_dobel['telepon_kontak']; ?></td>
<td><?php echo $row_dobel['kota_kontak']; ?></td>
<td><?php echo $row_dobel['provinsi_kontak']; ?></td>
<td><?php echo $row_dobel['status_kontak']; ?></td>
<td><?php echo $row_dobel['report_kontak']; ?></td>
<td>
<?php echo"<a href='del_kontak.php?id_kontak=$row_dobel[id_kontak]' onClick=\"return confirm('Anda yakin ingin menghapusnya?')\" class='btn btn-danger' > Hapus</a>" ?>
<a href="" class="btn btn-warning" > Edit</a>
</td>		
</tr>

<?php 


}
?>  


</tbody>

</table>
</div>
