    
  <?php
				$user_query = mysql_query("select * from tb_user where id_user = '$_GET[id_user]' ")or die(mysql_error());
		$row_user = mysql_fetch_array($user_query);
		?>  
    <div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">data Marketing <?php echo $row_user['nama_user']; ?> </div>
                      						
		  			</div>

                    
		  		</div>
                
		  	</div>
    

<div class="content-box-large">
<form action="insert_set_kontak.php" method="post" enctype="multipart/form-data">
            <input name="id_user" type="hidden" value="<?php echo $row_user['id_user']; ?>" />
                  <table id="example" class="table table-striped" >
                    <thead>
                      <tr>
                  	<th>Kode</th>
					<th>Nama</th>
					<th>Alamat</th>
                    <th>Kota</th>
                     <th>provinsi</th>
					<th>CP</th>
					<th>Telp</th>
                    <th>Status</th>	
                    <th>pilih</th>
                      </tr>
                    </thead>
                    <tbody>
                    <!-----------------------------------Content------------------------------------>
                    <?php
	
	// iki tambahan'e bro!
    $id_admin = $_SESSION['admin'];
    switch ($id_admin) {
        case '2':
            $query = "SELECT * FROM tb_kontak_all WHERE status_kontak ='telepon lagi' AND kota_kontak IN ('surabaya', 'sidoarjo', 'gersik', 'lamongan', 'mojokerto', 'jombang', 'nganjuk', 'madiun', 'ngawi', 'ponorogo', 'pacitan', 'trenggalek', 'tulungagung', 'blitar')";
            break;
        case '3':
            $query = "SELECT * FROM tb_kontak_all WHERE status_kontak ='telepon lagi' AND kota_kontak IN ('probolinggo', 'pasuruan', 'batu', 'malang', 'lumajang', 'jember', 'bondowoso', 'situbondo', 'banyuwangi')";
            break;
        case '4':
            $query = "SELECT * FROM tb_kontak_all WHERE status_kontak ='telepon lagi' AND kota_kontak IN ('cilacap', 'banyumas', 'brebes', 'tegal', 'purbalingga', 'batang', 'banjarnegara', 'kebumen', 'wonosobo', 'purworejo', 'temanggung', 'magelang', 'kendal', 'yogyakarta', 'ungaran', 'salatiga', 'boyolali', 'klaten', 'surakarta', 'sukorejo', 'karanganyar', 'wonogiri', 'sragen', 'grobongan', 'demak', 'semarang')";
            break;
        case '5':
            $query = "SELECT * FROM tb_kontak_all WHERE status_kontak ='telepon lagi' AND kota_kontak IN ('jepara', 'kudus', 'pati', 'rembang', 'blora')";
            break;
        case '6':
            $query = "SELECT * FROM tb_kontak_all WHERE status_kontak ='telepon lagi' AND kota_kontak IN ('cirebon')";
            break;
        default:
            $query = "select * from tb_kontak_all where id_user is Null or id_user ='' and status_kontak = 'belum dihubungi'";
            break;
    }
    // iki akhire
	
	
	
	
		$device_query = mysql_query($query)or die(mysql_error());
		while($row = mysql_fetch_array($device_query)){
	
		?>
        <tr>
        <td><?php echo $row['kode_kontak']; ?></td>
		<td><?php echo $row['nama_kontak']; ?></td>
			<td><?php echo $row['alamat_kontak']; ?> </td>
			<td><?php echo $row['kota_kontak']; ?></td>
            	<td><?php echo $row['provinsi_kontak']; ?></td>
			<td><?php echo $row['cp_kontak']; ?></td>
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
			   echo '<div class="label label-warning"><i class="icon-remove-sign"></i><strong>'.$row['status_kontak'].'</strong></div>';
		       };
			   
			   ?>
			   
			
			
			</td>
			<td><input name="id[]" type="checkbox" value="<?php echo $row['id_kontak']; ?>" class="flat"/></td>		
      </tr>
                     
     
      <?php 
	  }?> 
       </tbody>
                   
                  </table>
                  
                  <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                       <a href="?page=set_user"class="btn btn-warning">Cancel</a>
                        <button type="submit" class="btn btn-success">Set Kontak</button>
                      </div>
                      </div>
         </form> 






</div>
