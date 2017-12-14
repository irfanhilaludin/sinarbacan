    <div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Data Order Pelanggan</div>
						
		  			</div>
		  			<div class="content-box-large box-with-header">
<a href="?page=data_pemesanan_pending" classS="btn btn-success">Order Baru</a>
<a href="?page=data_pemesanan_setuju" class="btn btn-warning">Order Pelanggan </a>
<a href="?page=data_pemesanan_gagal" class="btn btn-success">Order di tolak </a>
<a href="?page=data_pemesanan" class="btn btn-success">Data Order Semua</a>
					</div>
                    <p class="text-muted font-13 m-b-30">
                        <a class="btn btn-success" href="?page=data_pemesanan_setuju">Semua</a>

 <?php
 	$marketing_po = mysql_query("select * from tb_user")or die(mysql_error());
                while($marketing_row = mysql_fetch_array($marketing_po)){
				?>

                       <a class="btn btn-success" href="?page=data_pelanggan_marketing&id_user=<?php echo $marketing_row['id_user']; ?>"><?php echo $marketing_row['nama_user']; ?></a>
                       
                       <?php
					   }
					   ?>
                       
                         </p>
	  		</div>
		  	</div>

    <div class="content-box-large">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
    <tr>
    <th>Nama Perusahaan</th>
    <th>Alamat</th>
    <th>Kota</th>
    <th>Provinsi</th>
    <th>Kontak</th>
    <th>Purchasing</th>
    <th>Sales</th>
        <th>PO terakhir</th>
    <th>Aksi</th>
    
    </tr>
    </thead>
    <tbody>
    <!-----------------------------------Content------------------------------------>
    <?php
    
    $pelanggan_query = mysql_query("select * from tb_pelanggan where id_user = '$_GET[id_user]' ")or die(mysql_error());
	
    while($row = mysql_fetch_array($pelanggan_query)){
	
	$user_query = mysql_query("select * from tb_user where id_user = '$row[id_user]' ")or die(mysql_error());
                $row_user = mysql_fetch_array($user_query);
				$jum = mysql_num_rows($user_query);
    ?>
    <tr>
    <td><?php echo $row['nama_pelanggan']; ?></td>
    <td><?php echo $row['alamat_pelanggan']; ?></td>
    <td><?php echo $row['kota_pelanggan']; ?></td>
   
    <td><?php echo $row['provinsi_pelanggan']; ?></td>
   
    <td><?php echo $row['telepon_pelanggan']; ?></td>
    <td><?php echo $row['cp_pelanggan']; ?></td>
    <td><?php echo $row_user['nama_user']; ?></td>
     <td><?php echo $row['po_terakhir']; ?></td>
    <td>
    <?php echo"<a href='del_pelanggan.php?id_kon=$row[id_kontak]' onClick=\"return confirm('Anda yakin ingin menghapusnya?')\" class='btn btn-danger' > Hapus</a>" ?>
    </td>		
    </tr>
    <?php 
    }?>  
    </tbody>
    </table>
    
    </div>
    </div>
    </div>