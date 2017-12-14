     <?php
	 
$tanggal_input_awal = $_POST["tanggal_input_awal"];
$tanggal_input_sampai = $_POST["tanggal_input_sampai"];

    ?> 

<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Data Order All</div>
                        <div class="panel-options">
<a href="#" class="" data-toggle="modal" data-target="#filter"data-rel="collapse"><i class="glyphicon glyphicon-calendar"></i>Filter Tanggal</a>
						</div>
						
		  			</div>
	<div class="content-box-large box-with-header">
<a href="?page=data_pemesanan_pending" class="btn btn-success">Order Baru</a>
<a href="?page=data_pemesanan_setuju" class="btn btn-success">Order di Setujui </a>
<a href="?page=data_pemesanan_gagal" class="btn btn-success">Order di tolak </a>
<a href="?page=data_pemesanan" class="btn btn-warning">Data Order Semua</a>
<div class="pull-right">
<a href="#" class="btn btn-success" data-toggle="modal" data-target="#filter_po"data-rel="collapse"><i class="glyphicon glyphicon-export"></i>Export Excel</a>

  
</div>
					</div>
                    
		  		</div>
                
		  	</div>

<div class="content-box-large">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                          <thead>

<tr>
<th>Tanggal Pesanan</th>
<th>Nama Perusahaan</th>
<th>Purchasing</th>
<th>Telp Perusahaan</th>
<th>Harga</th>	
<th>Pembayaran</th>	
<th>Marketing</th>
<th>Status</th>
<th>Aksi</th>
</tr>

</thead>

<tbody>
<!-----------------------------------Content------------------------------------>
<?php
   $oras = strtotime("today");
$ora = date("Y/m/d",$oras);	
$newdate2 = strtotime ( '-2 week' , $ora  ) ; 

$newdate = date("Y/m/d H:m:s",$newdate2);	
if(($tanggal_input_awal=='') AND ($tanggal_input_sampai=='')){

                    $penawaran_query = mysql_query("select * , DATE_FORMAT(tanggal_po,'%d-%m-%Y') as TANGGAL from tb_po")or die(mysql_error());
}else{
	$penawaran_query = mysql_query("select * , DATE_FORMAT(tanggal_po,'%d-%m-%Y') as TANGGAL from tb_po where DATE_FORMAT(tanggal_po,'%d/%m/%Y') BETWEEN '$tanggal_input_awal' AND '$tanggal_input_sampai' ")or die(mysql_error());
	}					
					
					
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
<?php echo $row['alamat_kontak']; ?>-<?php echo $row['kota_kontak']; ?> / <?php echo $row['provinsi_kontak']; ?>

</td>
<td><?php echo $row['cp_kontak']; ?></td>
<td><?php echo $row['telepon_kontak']; ?></td>
            

             
            <td><?php echo $row_po['harga_po']; ?></td>
               <td><?php echo $row_po['pembayaran_po']; ?></td>
                <td><?php echo $row_user['nama_user']; ?></td>	
                  <td>
				  <?php 
    if($row_po['status_po']=='setuju')
    {
    echo '<div class="label label-success"><i class="glyphicon glyphicon-check"></i><strong>'.$row_po['status_po'].'</strong></div>';
    }
    else if($row_po['status_po']=='tidak setuju')
    {
    echo '<div class="label label-danger"><i class="glyphicon glyphicon-uncheck"></i><strong>'.$row_po['status_po'].'</strong></div>';
    }
 ?></td>	
            <td>
<a href="?page=edit_po&id_po=<?php echo $row_po['id_po']; ?>&id_kontak=<?php echo $row_po['id_kontak']; ?>" class="btn btn-primary btn-xs">Edit</a>
    <?php echo"<a href='del_po.php?id_po=$row_po[id_po]' onClick=\"return confirm('Anda yakin ingin menghapusnya?')\" class='btn btn-danger btn-xs' > Hapus</a>" ?>


            </td>	
          
</tr>
  
<?php 
}
}
}?>  


                

                


</tbody>
                        </table>
 
  </div>
  
<form class="form" action="?page=data_pemesanan" enctype="multipart/form-data" method="post">                                          

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
 <form class="form" action="simpan_pemesanan.php" enctype="multipart/form-data" method="post">                                          

<div class="modal fade" id="filter_po" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
</button>
<h4 class="modal-title" id="myModalLabel">Filter Tanggal Pemesanan</h4>
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

<i class="glyphicon glyphicon-import"></i>
<input name="filter_tanggal" type="submit" value="Export Excel" class="btn btn-success"/>
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

</div>

</div>
</div>
</form>