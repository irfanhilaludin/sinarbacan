 <meta http-equiv="refresh" content="30"; URL="<?php echo basename($PHP_SELF); ?>">

<div class="row">
					<div class="col-md-12 panel-warning">
						<div class="content-box-header panel-heading">
							<div class="panel-title ">Data Penawaran Pending</div>
						
						</div>
						<div class="content-box-large box-with-header">
<a href="?page=data_penawaran_pending" class="btn btn-warning">Pending</a>
<a href="?page=data_penawaran_kirim" class="btn btn-success">Terkirim</a>
<a href="?page=data_penawaran_gagal" class="btn btn-success">Gagal</a>
<a href="?page=putar_penawaran" class="btn btn-success">Putar Penawaran</a>
<a href="?page=data_penawaran" class="btn btn-success">Semua</a>
					</div>
					</div>
				</div>


<div class="content-box-large">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>

<tr>
<th>Tanggal Penawaran</th>
<th>Nama Perusahaan</th>
<th>Purchasing</th>
<th>Telp Perusahaan</th>
<th>kota</th>
<th>Provinsi</th>
<th>Harga</th>	
<th>Pembayaran</th>	
<th>Marketing</th>
<th>Keterangan</th>
<th>Aksi</th>
</tr>

</thead>

<tbody>
<!-----------------------------------Content------------------------------------>
<?php
		 
	
	
	 $oras = strtotime("today");
$ora = date("Y/m/d",$oras);	
$newdate2 = strtotime ( 'next month' , $ora  ) ; 

$newdate = date("Y/m/d",$newdate2);	

// pilih admin area 
	switch ($admin_area) {
        case 'surabaya':
            $area = " AND b.kota_kontak IN ('surabaya', 'sidoarjo', 'gersik', 'lamongan', 'mojokerto', 'jombang', 'nganjuk', 'madiun', 'ngawi', 'ponorogo', 'pacitan', 'trenggalek', 'tulungagung', 'blitar', 'tuban')";
            break;
        case 'probolinggo':
            $area = " AND b.kota_kontak IN ('probolinggo', 'pasuruan', 'batu', 'malang', 'lumajang', 'jember', 'bondowoso', 'situbondo', 'banyuwangi')";
            break;
        case 'semarang':
            $area = " AND b.kota_kontak IN ('cilacap', 'banyumas', 'brebes', 'tegal', 'purbalingga', 'batang', 'banjarnegara', 'kebumen', 'wonosobo', 'purworejo', 'temanggung', 'magelang', 'kendal', 'yogyakarta', 'ungaran', 'salatiga', 'boyolali', 'klaten', 'surakarta', 'sukorejo', 'karanganyar', 'wonogiri', 'sragen', 'grobongan', 'demak', 'semarang')";
            break;
        case 'juwana' or 'juwono':
            $area = " AND b.kota_kontak IN ('juwana', 'juwono', 'jepara', 'kudus', 'pati', 'rembang', 'blora')";
            break;
        case 'cirebon':
            $area = " AND b.kota_kontak IN ('cirebon')";
            break;
        default:
            $area = "";
            break;
    }

	$q = mysql_query("select * from tb_penawaran a LEFT JOIN tb_kontak_all b ON b.id_kontak = a.id_kontak LEFT JOIN (SELECT id_user, nama_user, kota from tb_user) c on c.id_user = a.id_user where a.status_penawaran = 'pending'" . $area) or die (mysql_error());

    
while ($row = mysql_fetch_array($q)) {;

?>
									
<tr>


<td><?php echo $row['tanggal_penawaran']; ?></td>
<td> <a class="" data-toggle="modal" data-target="#detail_<?php echo $row['id_kontak']; ?>">

<?php echo $row['nama_kontak']; ?></a>
<br />
<?php echo $row['alamat_kontak']; ?>-<?php echo $row['kota_kontak']; ?>


</td>
<td><?php echo $row['cp_kontak']; ?></td>
<td><?php echo $row['telepon_kontak']; ?></td>
						

							<td><?php echo $row['kota_kontak']; ?></td>
		
							<td><?php echo $row['provinsi_kontak']; ?></td>
	 
	 
						<td><?php echo $row['harga_penawaran']; ?></td>
							 <td><?php echo $row['pembayaran']; ?></td>
								<td><?php echo $row['nama_user']; ?></td>	
									<td><?php echo $row['ket_penawaran']; ?></td>	
						<td>
<a href="?page=edit_penawaran&id_penawaran=<?php echo $row['id_penawaran']; ?>" class="btn btn-warning">Edit</a>

<a href="print.php?id_penawaran=<?php echo $row['id_penawaran']; ?>" class="btn btn-success" target="_blank">Kirim</a>

<a href="gagal_kirim.php?id_penawaran=<?php echo $row['id_penawaran']; ?>&id_kontak=<?php echo $row['id_kontak']; ?>&id_user=<?php 

echo $row_user['id_user']; ?>" class="btn btn-danger">Gagal</a>

<a href="ganti_status.php?id_penawaran=<?php echo $row['id_penawaran']; ?>&id_kontak=<?php echo $row['id_kontak']; ?>&id_user=<?php

 echo $row_user['id_user']; ?>" class="btn btn-primary">Terkirim</a>

</td>	
					
</tr>
	<div class="modal fade" id="detail_<?php echo $row['id_kontak']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">

											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">�</span>
												</button>
												<h4 class="modal-title" id="myModalLabel"><?php echo $row['nama_kontak']; ?></h4>
											</div>
											<div class="modal-body">
												<h4>Tracking</h4>
												
						
						<?php
$detail_q = mysql_query("select * from tb_set where id_kontak = '$row[id_kontak]' ")or die(mysql_error());
		while($row_detail = mysql_fetch_array($detail_q)){

$detail_user = mysql_query("select * from tb_user where id_user = '$row_detail[id_user]' ")or die(mysql_error());
		$user_detail = mysql_fetch_array($detail_user);
		
		?>
												<p>pada tanggal : <?php echo $row_detail['tgl_set']; ?> di bagi ke <?php echo $user_detail['nama_user']; 
						
						}?></p>

											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>

										</div>
									</div>
								</div>
<?php 
//}
//}
}?>  


								


</tbody>
												</table>

	</div>


	