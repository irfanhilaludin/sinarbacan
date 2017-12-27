<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Data Usul</div>
		  			</div>

		  		</div>
		  	</div>
            
<div class="content-box-large">
    <form action=""method="post">
    <table id="example" class="table table-striped" cellspacing="0" width="100%">
    <thead>
    <tr>
    <th>Nama</th>
    <th>Kota</th>
    <th>Provinsi</th>
    <th>Kontak</th>
    <th>Email</th>
    <th>Sales</th>
    <th>Status</th>
	<th>Keterangan</th>
    <th>Aksi</th>
    </tr>
    </thead>
    <tbody>

<?php

// pilih admin area 
if ($admin_area == 'all') {
    $q = mysql_query("select * from tb_kontak_usul a LEFT JOIN (SELECT id_user, nama_user, kota from tb_user) b on b.id_user = a.id_user where a.status_kontak = 'menunggu'") or die (mysql_error());
} else {
    switch ($admin_area) {
        case 'surabaya':
            $area = " AND a.kota_kontak IN ('surabaya','tuban', 'sidoarjo', 'gresik', 'lamongan', 'mojokerto', 'jombang', 'nganjuk', 'madiun', 'ngawi', 'ponorogo', 'pacitan', 'trenggalek', 'tulungagung', 'blitar')";
            break;
        case 'probolinggo':
            $area = " AND a.kota_kontak IN ('probolinggo', 'pasuruan', 'batu', 'malang', 'lumajang', 'jember', 'bondowoso', 'situbondo', 'banyuwangi')";
            break;
        case 'semarang':
            $area = " AND a.kota_kontak IN ('cilacap', 'banyumas', 'brebes', 'tegal', 'purbalingga', 'batang', 'banjarnegara', 'kebumen', 'wonosobo', 'purworejo', 'temanggung', 'magelang', 'kendal', 'yogyakarta', 'ungaran', 'salatiga', 'boyolali', 'klaten', 'surakarta', 'sukorejo', 'karanganyar', 'wonogiri', 'sragen', 'grobongan', 'demak', 'semarang')";
            break;
        case 'juwono':
            $area = " AND a.kota_kontak IN ('juwono', 'jepara', 'kudus', 'pati', 'rembang', 'blora')";
            break;
        case 'cirebon':
            $area = " AND a.kota_kontak IN ('cirebon')";
            break;
        default:
            $area = "";
            break;
    }

    $q = mysql_query("select * from tb_kontak_usul a LEFT JOIN (SELECT id_user, nama_user, kota from tb_user) b on b.id_user = a.id_user where a.status_kontak = 'menunggu'" . $area) or die (mysql_error());
}
   
while ($row = mysql_fetch_array($q)) {
?>
    <tr>
        <td><?php echo $row['nama_kontak']; ?></td>
        <td><?php echo $row['kota_kontak']; ?></td>
        <td><?php echo $row['provinsi_kontak']; ?></td>
        <td><?php echo $row['telepon_kontak']; ?></td>
        <td><?php echo $row['email_kontak']; ?></td>
        <td><?php echo $row['nama_user']; ?> [<?php echo $row['kota']; ?>]</td>
        <td><span class="label label-warning"><?php echo $row['status_kontak']; ?></span></td>  
        <td><?php echo $row['report_kontak']; ?></td>  
        <td>
            <a href="?page=filter&id_kontak=<?php echo $row['id_kontak']; ?>" class="btn btn-primary btn-xs" >Filter</a>
        </td>		
    </tr>
    
<?php 
}
?>  
    </tbody>
    </table>
    </form>
</div>
    