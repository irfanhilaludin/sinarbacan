<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Pilih Marketing</div>
                      						
		  			</div>

                    
		  		</div>
                
		  	</div>


<div class="content-box-large">
<form class="" method="post">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
<th>Nama Marketing</th>
<th>Kontak dari Admin</th>
<th>Kontak Mandiri</th>
<th>Belum dihubungi</th>
<th>Telah dihubungi</th>
<th>Tidak Terhubung</th>
<th>Telepon Ulang</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php

$user_query = mysql_query("select * from tb_user where level_user = 'marketing' or level_user = 'broker' ")or die(mysql_error());
while($row_user = mysql_fetch_array($user_query)){

$kontak_query = mysql_query("select * from tb_kontak_all where id_user = '$row_user[id_user]'  and pembuat = 'admin'  ")or die(mysql_error());
$row = mysql_fetch_array($kontak_query);
$count_kon = mysql_num_rows($kontak_query);

$kontak_query_m = mysql_query("select * from tb_kontak_all where id_user = '$row_user[id_user]' and pembuat <> 'admin' ")or die(mysql_error());
$count_kon_m = mysql_num_rows($kontak_query_m);

$kontak_query_b = mysql_query("select * from tb_kontak_all where id_user = '$row_user[id_user]' and status_kontak='belum dihubungi' ")or die(mysql_error());
$count_kon_b = mysql_num_rows($kontak_query_b);

$kontak_query_th = mysql_query("select * from tb_kontak_all where id_user = '$row_user[id_user]' and status_kontak='telah dihubungi' ")or die(mysql_error());
$count_kon_th = mysql_num_rows($kontak_query_th);

$kontak_query_tl = mysql_query("select * from tb_kontak_all where id_user = '$row_user[id_user]' and status_kontak='telepon ulang'  ")or die(mysql_error());
$count_kon_tl = mysql_num_rows($kontak_query_tl);


$kontak_query_td = mysql_query("select * from tb_kontak_all where id_user = '$row_user[id_user]' and status_kontak='tidak terhubung'  ")or die(mysql_error());
$count_kon_td = mysql_num_rows($kontak_query_td);
?>
<tr>
<td><?php echo $row_user['nama_user']; ?></td>
<td><?php echo $count_kon ; ?></td>
<td><?php echo $count_kon_m ; ?></td>
<td><?php echo $count_kon_b ; ?></td>
<td><?php echo $count_kon_th ; ?></td>
<td><?php echo $count_kon_td ; ?></td>
<td><?php echo $count_kon_tl ; ?></td>

<td>
            <a href="?page=set_kontak&id_user=<?php echo $row_user['id_user']; ?>" class="btn btn-default" >Set Kontak</a>

</td>		
</tr>

<?php 

}?>  
</tbody>
</table>
</form>

</div>
