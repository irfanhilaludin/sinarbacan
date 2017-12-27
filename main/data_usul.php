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
    <!-----------------------------------Content------------------------------------>
    <?php

// pilih admin area 
if ($admin_area == 'all') {
    $q = mysql_query("select * from tb_kontak_usul a LEFT JOIN tb_kontak_all b ON b.id_kontak = a.id_kontak LEFT JOIN (SELECT id_user, nama_user, kota from tb_user) c on c.id_user = a.id_user  WHERE a.status_kontak = 'menunggu'") or die (mysql_error());

} else {
    switch ($admin_area) {
        case 'surabaya':
            $area = " AND b.kota_kontak IN ('surabaya', 'sidoarjo', 'gresik', 'lamongan', 'mojokerto', 'jombang', 'nganjuk', 'madiun', 'ngawi', 'ponorogo', 'pacitan', 'trenggalek', 'tulungagung', 'blitar')";
            break;
        case 'probolinggo':
            $area = " AND b.kota_kontak IN ('probolinggo', 'pasuruan', 'batu', 'malang', 'lumajang', 'jember', 'bondowoso', 'situbondo', 'banyuwangi')";
            break;
        case 'semarang':
            $area = " AND b.kota_kontak IN ('cilacap', 'banyumas', 'brebes', 'tegal', 'purbalingga', 'batang', 'banjarnegara', 'kebumen', 'wonosobo', 'purworejo', 'temanggung', 'magelang', 'kendal', 'yogyakarta', 'ungaran', 'salatiga', 'boyolali', 'klaten', 'surakarta', 'sukorejo', 'karanganyar', 'wonogiri', 'sragen', 'grobongan', 'demak', 'semarang')";
            break;
        case 'juwana' or 'juwono':
            $area = " AND b.kota_kontak IN ('juwana', 'jepara', 'kudus', 'pati', 'rembang', 'blora')";
            break;
        case 'cirebon':
            $area = " AND b.kota_kontak IN ('cirebon')";
            break;
        default:
            $area = "";
            break;
    }


    $q = mysql_query("select * from tb_kontak_usul a LEFT JOIN tb_kontak_all b ON b.id_kontak = a.id_kontak LEFT JOIN (SELECT id_user, nama_user, kota from tb_user) c on c.id_user = a.id_user  WHERE a.status_kontak = 'menunggu'" . $area) or die (mysql_error());
}
   
while ($row = mysql_fetch_array($q)) {;


   
	//$kontak_query = mysql_query("select * from tb_kontak_usul  AND status_kontak ='menunggu'  and pembuat <> 'admin'")or die(mysql_error());
    //while($row = mysql_fetch_array($kontak_query)){
	
//$user_query = mysql_query("select * from tb_user  AND id_user = '$row[id_user]' ")or die(mysql_error());
            //    $row_user = mysql_fetch_array($user_query);
  

    ?>
    <tr>

    <td><?php echo $row['nama_kontak']; ?></td>
    <td><?php echo $row['kota_kontak']; ?></td>
     <td><?php echo $row['provinsi_kontak']; ?></td>
    <td><?php echo $row['telepon_kontak']; ?></td>
    <td><?php echo $row['email_kontak']; ?></td>
    <td><?php echo $row_user['nama_user']; ?></td>
    <td><?php echo $row['status_kontak']; ?></td>  
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
    