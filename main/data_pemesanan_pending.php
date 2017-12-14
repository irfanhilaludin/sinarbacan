<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Data Order Baru</div>
						
		  			</div>
		  			<div class="content-box-large box-with-header">
<a href="?page=data_pemesanan_pending" class="btn btn-warning">Order Baru</a>
<a href="?page=data_pemesanan_setuju" class="btn btn-success">Order Pelanggan </a>
<a href="?page=data_pemesanan_gagal" class="btn btn-success">Order di tolak </a>
<a href="?page=data_pemesanan" class="btn btn-success">Data Order Semua</a>

					</div>
		  		</div>
		  	</div>


<div class="content-box-large">
<form action="del_kontak.php"method="post">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
    <th>Nama</th>
    <th>Kontak</th>
    <th>Status</th>
    <th>Ket</th>
        <th>Sales</th>
    <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    <!-----------------------------------Content------------------------------------>
    <?php
   $kontak_query = mysql_query("select * from tb_kontak_all")or die(mysql_error());
	
    while($row = mysql_fetch_array($kontak_query)){
	$user_query = mysql_query("select * from tb_user where id_user = '$row[id_user]' ")or die(mysql_error());
                $row_user = mysql_fetch_array($user_query);
    ?>
    <tr>

    <td><?php echo $row['nama_kontak']; ?><br />
    <?php echo $row['alamat_kontak']; ?> / <?php echo $row['kota_kontak']; ?> / <?php echo $row['provinsi_kontak']; ?>
    </td>

       <td><?php echo $row['telepon_kontak']; ?></td>
           
    <td>
	<?php 
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
        <td><?php echo $row_user['nama_user']; ?></td>
    <td>
<a href="?page=turun_po&id_kontak=<?php echo $row['id_kontak']; ?>" class="btn btn-success">Order</a>    </td>		

    </tr>
    
    <?php 
    
    }?>  
    </tbody>
    </table>
    </form>
    </div>
    <form class="form" action="simpan_kontak.php" enctype="multipart/form-data" method="post">                                          

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
<input name="submit" value="Back up" class="btn btn-success"type="submit" />

<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

</div>

</div>
</div>
</form>   