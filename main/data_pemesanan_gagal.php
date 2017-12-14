<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Data Order tidak setujui</div>
						
		  			</div>
		  			<div class="content-box-large box-with-header">
<a href="?page=data_pemesanan_pending" class="btn btn-success">Order Baru</a>
<a href="?page=data_pemesanan_setuju" class="btn btn-success">Order di Setujui </a>
<a href="?page=data_pemesanan_gagal" class="btn btn-warning">Order di tolak </a>
<a href="?page=data_pemesanan" class="btn btn-success">Data Order Semua</a>
					</div>
		  		</div>
		  	</div>


<div class="content-box-large">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                          <thead>

<tr>
<th>Tanggal Pesanan</th>
<th>Nama Perusahaan</th>
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

$newdate = date("Y/m/d H:m:s",$newdate2);	

                    $penawaran_query = mysql_query("select * , DATE_FORMAT(tanggal_po,'%d-%m-%Y') as TANGGAL from tb_po where status_po= 'tidak setuju'")or die(mysql_error());
                    while($row_po = mysql_fetch_array($penawaran_query)){
                    
                    $pelanggan_query = mysql_query("select * from tb_kontak_all where id_kontak = '$row_po[id_kontak]' ")or die(mysql_error());
                    while($row = mysql_fetch_array($pelanggan_query)){
                    
                    $user_query = mysql_query("select * from tb_user where id_user = '$row_po[id_user]'")or die(mysql_error());
                    while($row_user = mysql_fetch_array($user_query)){
                    
                    
                    ?>
                  
<tr>


            <td><?php echo $row_po['TANGGAL']; ?></td>
<td><?php echo $row['nama_kontak']; ?>
<br />
<?php echo $row['alamat_kontak']; ?>-<?php echo $row['kota_kontak']; ?>

</td>

            

             
            <td><?php echo $row_po['harga_po']; ?></td>
               <td><?php echo $row_po['pembayaran_po']; ?></td>
                <td><?php echo $row_user['nama_user']; ?></td>	
                  <td><?php echo $row_po['kelengkapan_po']; ?></td>	
            <td>
<a href="?page=cek_po&id_po=<?php echo $row_po['id_po']; ?>&id_kontak=<?php echo $row_po['id_kontak']; ?>" class="btn btn-primary">Check</a>
            </td>	
          
</tr>
  
<?php 
}
}
}?>  


                


</tbody>
                        </table>

  </div>