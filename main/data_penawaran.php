     <?php
	 
$tanggal_input_awal = $_POST["tanggal_input_awal"];
$tanggal_input_sampai = $_POST["tanggal_input_sampai"];

    ?> 

<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Data Penawaran</div>

						
		  			</div>
		  			<div class="content-box-large box-with-header">
<a href="?page=data_penawaran_pending" class="btn btn-success">Pending</a>
<a href="?page=data_penawaran_kirim" class="btn btn-success">Terkirim</a>
<a href="?page=data_penawaran_gagal" class="btn btn-success">Gagal</a>
<a href="?page=putar_penawaran" class="btn btn-success">Putar penawaran</a>
<a href="?page=data_penawaran" class="btn btn-warning">Semua</a>
<div class="pull-right">
  <a href="#" class="btn btn-success" data-toggle="modal" data-target="#filter1"data-rel="collapse"><i class="glyphicon glyphicon-import"></i> Import Excel</a>
                <a href="#" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#filter"data-rel="collapse"><i class="glyphicon glyphicon-calendar"></i>Filter Tanggal</a>

</div>
					</div>
                    
		  		</div>

		  	</div>

<div class="content-box-large">

 <form action="del_penawaran.php"method="post">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                          <thead>

<tr>
    <th class="headings"></th>
<th>Tanggal Penawaran</th>
<th>Nama Perusahaan</th>
<th>Harga</th>	
<th>Pembayaran</th>	
<th>Marketing</th>
<th>Status</th>
<th>Aksi</th>
<th></th>
</tr>

</thead>

<tbody>

<?php
   $oras = strtotime("today");
$ora = date("Y/m/d",$oras);	
$newdate2 = strtotime ( 'next month' , $ora  ) ; 
$newdate = date("Y/m/d H:m:s",$newdate2);	


// pilih admin area 
if ($admin_area === 'all') {
  $q = mysql_query("select * from tb_penawaran a LEFT JOIN tb_kontak_all b ON b.id_kontak = a.id_kontak LEFT JOIN (SELECT id_user, nama_user, kota from tb_user) c on c.id_user = a.id_user ") or die (mysql_error());

} else {
  switch ($admin_area) {
        case 'surabaya':
            $area = " WHERE b.kota_kontak IN ('surabaya', 'tuban', 'sidoarjo', 'gresik', 'lamongan', 'mojokerto', 'jombang', 'nganjuk', 'madiun', 'ngawi', 'ponorogo', 'pacitan', 'trenggalek', 'tulungagung', 'blitar')";
            break;
        case 'probolinggo':
            $area = " WHERE b.kota_kontak IN ('probolinggo', 'pasuruan', 'batu', 'malang', 'lumajang', 'jember', 'bondowoso', 'situbondo', 'banyuwangi')";
            break;
        case 'semarang':
            $area = " WHERE b.kota_kontak IN ('cilacap', 'banyumas', 'brebes', 'tegal', 'purbalingga', 'batang', 'banjarnegara', 'kebumen', 'wonosobo', 'purworejo', 'temanggung', 'magelang', 'kendal', 'yogyakarta', 'ungaran', 'salatiga', 'boyolali', 'klaten', 'surakarta', 'sukorejo', 'karanganyar', 'wonogiri', 'sragen', 'grobongan', 'demak', 'semarang')";
            break;
        case 'juwana' or 'juwono':
            $area = " WHERE b.kota_kontak IN ('juwana', 'jepara', 'kudus', 'pati', 'rembang', 'blora')";
            break;
        case 'cirebon':
            $area = " WHERE b.kota_kontak IN ('cirebon')";
            break;
        default:
            $area = "";
            break;
    }

  $q = mysql_query("select * from tb_penawaran a LEFT JOIN tb_kontak_all b ON b.id_kontak = a.id_kontak LEFT JOIN (SELECT id_user, nama_user, kota from tb_user) c on c.id_user = a.id_user" . $area) or die (mysql_error());
}
  
while ($row = mysql_fetch_array($q)) {			  
?>
                  
<tr>
<td>
     <input type="checkbox" class="checkbox" name="id_pn[]" value="<?php echo $row['id_penawaran']; ?>">
     <input type="hidden" value="<?php echo $row['id_kontak']; ?>" name="id_kon"/>
    </td>

            <td><?php 
              $dt = new DateTime($row[ 'tanggal_penawaran'], new DateTimeZone('Asia/Jakarta'));
              echo $dt->format('d M Y');
            ?></td>

<td> <a href="#" class="" data-toggle="modal" data-target="#detail_<?php echo $row['id_kontak']; ?>">

<?php echo $row['nama_kontak']; ?></a><br /><?php echo $row['alamat_kontak']; ?>-<?php echo $row['kota_kontak']; ?></td>
            

             
            <td><?php echo $row['harga_penawaran']; ?></td>
               <td><?php echo $row['pembayaran']; ?></td>
                <td><?php echo $row['nama_user']; ?></td>	
                  <td><?php echo $row['status_penawaran']; ?></td>	
            <td>
<a href="?page=edit_penawaran&id_penawaran=<?php echo $row['id_penawaran']; ?>" class="btn btn-warning">Edit</a>
           <a href="print.php?id_penawaran=<?php echo $row['id_penawaran']; ?>" class="btn btn-success" target="_blank">Kirim</a>
         </td>
         <td>
            <a href="gagal_kirim.php?id_penawaran=<?php echo $row['id_penawaran']; ?>&id_kontak=<?php echo $row['id_kontak']; ?>&id_user=<?php echo $row['id_user']; ?>" class="btn btn-danger">Gagal</a>
           <a href="ganti_status.php?id_penawaran=<?php echo $row['id_penawaran']; ?>&id_kontak=<?php echo $row['id_kontak']; ?>&id_user=<?php echo $row['id_user']; ?>" class="btn btn-primary">Terkirim</a>

            </td>	
          
</tr>
 
<?php 
}
?>  


            


</tbody>
                        </table>
  <?php  echo"  <input name='submit' type='submit' onClick=\"return confirm('Anda yakin ingin menghapusnya?')\" class='btn btn-danger btn-sm' value='Hapus'/> "
  ?>

  </form>
  </div>
  
<form class="form" action="?page=data_penawaran" enctype="multipart/form-data" method="post">                                          

<div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
</button>
<h4 class="modal-title" id="myModalLabel">Filter Tanggal</h4>
</div>
<div class="modal-body">
<div class="form-group">
<label for="dtp_input1" class="control-label">Tanggal Awal :</label>
<div class="input-group date form_date1 col-md-5" data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input1" data-link-format="yyyy-mm-dd">
<input class="form-control" size="16" type="text" value="" name="tanggal_input_awal" readonly>
<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
</div>
</div>


<div class="form-group">
<label for="dtp_input2" class="control-label">Tanggal Akhir :</label>
<div class="input-group date form_date2 col-md-5" data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
<input class="form-control" size="16" type="text" value="" name="tanggal_input_sampai" readonly>
<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
</div>
</div>



</div>
<div class="modal-footer">
<input name="submit" value="Filter" class="btn btn-success"type="submit" />

<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

</div>

</div>
</div>
</form>   
 
 
  
<form class="form" action="simpan_penawaran.php" enctype="multipart/form-data" method="post">                                          

<div class="modal fade" id="filter1" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
</button>
<h4 class="modal-title" id="myModalLabel">Filter Tanggal</h4>
</div>
<div class="modal-body">
<div class="form-group">
<label for="dtp_input1" class="control-label">Tanggal Awal :</label>
<div class="input-group date form_date1 col-md-5" data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input1" data-link-format="yyyy-mm-dd">
<input class="form-control" size="16" type="text" value="" name="tanggal_mulai" readonly>
<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
</div>
</div>


<div class="form-group">
<label for="dtp_input2" class="control-label">Tanggal Akhir :</label>
<div class="input-group date form_date2 col-md-5" data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
<input class="form-control" size="16" type="text" value="" name="tanggal_akhir" readonly>
<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
</div>
</div>



</div>
<div class="modal-footer">
<input name="submit" value="Backup" class="btn btn-success"type="submit" />

<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

</div>

</div>
</div>
</form>   
 
 
 