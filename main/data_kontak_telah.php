<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Data Kontak Terhubung</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
						</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
<a href="?page=data_kontak" class="btn btn-success">Semua</a>
<a href="?page=data_kontak_telah" class="btn btn-warning">Telah dihubungi</a>
<a href="?page=data_kontak_belum" class="btn btn-success">Belum dihubungi</a>
<a href="?page=data_kontak_telpon_ulang" class="btn btn-success">Telepon Ulang</a>
<a href="?page=data_kontak_sisa" class="btn btn-success">Data Sisa</a>
					</div>
		  		</div>
		  	</div>
            
<div class="content-box-large">
<form action="del_kontak.php"method="post">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
    <th class="headings"></th>
    <th>Nama</th>
    <th>Kontak</th>
    <th>Status</th>
    <th>Ket</th>
    <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    <!-----------------------------------Content------------------------------------>
    <?php
  
// iki tambahan'e bro!
    $id_admin = $_SESSION['admin'];
    switch ($id_admin) {
        case '2':
            $query = "SELECT * FROM tb_kontak_all WHERE status_kontak = 'telah dihubungi' AND kota_kontak IN ('surabaya', 'sidoarjo', 'gersik', 'lamongan', 'mojokerto', 'jombang', 'nganjuk', 'madiun', 'ngawi', 'ponorogo', 'pacitan', 'trenggalek', 'tulungagung', 'blitar')";
            break;
        case '3':
            $query = "SELECT * FROM tb_kontak_all WHERE status_kontak = 'telah dihubungi' AND kota_kontak IN ('probolinggo', 'pasuruan', 'batu', 'malang', 'lumajang', 'jember', 'bondowoso', 'situbondo', 'banyuwangi')";
            break;
        case '4':
            $query = "SELECT * FROM tb_kontak_all WHERE status_kontak = 'telah dihubungi' AND kota_kontak IN ('cilacap', 'banyumas', 'brebes', 'tegal', 'purbalingga', 'batang', 'banjarnegara', 'kebumen', 'wonosobo', 'purworejo', 'temanggung', 'magelang', 'kendal', 'yogyakarta', 'ungaran', 'salatiga', 'boyolali', 'klaten', 'surakarta', 'sukorejo', 'karanganyar', 'wonogiri', 'sragen', 'grobongan', 'demak', 'semarang')";
            break;
        case '5':
            $query = "SELECT * FROM tb_kontak_all WHERE status_kontak = 'telah dihubungi' AND kota_kontak IN ('jepara', 'kudus', 'pati', 'rembang', 'blora')";
            break;
        case '6':
            $query = "SELECT * FROM tb_kontak_all WHERE status_kontak = 'telah dihubungi' AND kota_kontak IN ('cirebon')";
            break;
        default:
            $query = "select * from tb_kontak_all where status_kontak = 'telah dihubungi' ";
            break;
    }
    // iki akhire





  $kontak_query = mysql_query($query)or die(mysql_error());
	
    while($row = mysql_fetch_array($kontak_query)){
	
    ?>
    <tr>
    <td class="a-center ">
     <input type="checkbox"  class="checkbox" name="id_kon[]" value="<?php echo $row['id_kontak']; ?>">
    </td>
    <td><?php echo $row['nama_kontak']; ?><br />
    <?php echo $row['alamat_kontak']; ?> / <?php echo $row['kota_kontak']; ?>- <?php echo $row['provinsi_kontak']; ?>
    </td>
       <td><?php echo $row['telepon_kontak']; ?></td>
    <td><?php 
    if($row['status_kontak']=='telah dihubungi')
    {
    echo '<div class="label label-success"><i class="icon-check"></i><strong>'.$row['status_kontak'].'</strong></div>';
    }
    else if($row['status_kontak']=='belum dihubungi')
    {
    echo '<div class="label label-danger"><i class="icon-ok"></i><strong>'.$row['status_kontak'].'</strong></div>';
    }
    else
    {
    echo '<div class="success"><i class="icon-remove-sign"></i><strong>'.$row['status_kontak'].'</strong></div>';
    };
    
    ?>
    </td>
    <td><?php echo $row['report_kontak']; ?></td>  
    <td>
    <a href="" class="btn btn-primary btn-xs" >Edit</a>
    </td>		
    </tr>
    
    <?php 
    
    }?>  
    </tbody>
    </table>
  <?php  echo"  <input name='submit' type='submit' onClick=\"return confirm('Anda yakin ingin menghapusnya?')\" class='btn btn-danger' value='Hapus'/> "
  ?>
    </form>
    </div>