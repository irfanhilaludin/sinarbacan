     <?php
	 
$tanggal_input_awal = $_POST["tanggal_input_awal"];
$tanggal_input_sampai = $_POST["tanggal_input_sampai"];

    ?> 
<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Data Pengiriman</div>
                       	<div class="panel-options">
<a href="#" class="" data-toggle="modal" data-target="#filter"data-rel="collapse"><i class="glyphicon glyphicon-calendar"></i>Filter Tanggal</a>
						</div>					
		  			</div>
	<div class="content-box-large box-with-header">
<a href="?page=data_pengiriman_belum" class="btn btn-success">Belum Kirim</a>
<a href="?page=data_pengiriman_sudah" class="btn btn-success">Sudah Kirim</a>
<a href="?page=data_pengiriman" class="btn btn-warning">Data Pengiriman All</a>

					</div>
                    
		  		</div>
                
		  	</div>
<div class="content-box-large">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">                          <thead>

<tr>


<th>Perusahaan</th>
<th>Alamat kirim</th>
<th>Tanggal Kirim</th>	
<th>Vol(KL)</th>	
<th>Keterangan</th>	
<th>Sales</th>
<th>#</th>
</tr>

</thead>

<tbody>
<!-----------------------------------Content------------------------------------>
<?php

   $oras = strtotime("today");
$ora = date("Y/m/d",$oras);	
$newdate2 = strtotime ( 'next month' , $ora  ) ; 

$newdate = date("Y/m/d",$newdate2);	

if(($tanggal_input_awal=='') AND ($tanggal_input_sampai=='')){

                    $penawaran_query = mysql_query("select * , DATE_FORMAT(tanggal_kirim,'%d-%m-%Y') as TANGGAL from tb_po where status_po ='setuju'")or die(mysql_error());
}else{
	$penawaran_query = mysql_query("select * , DATE_FORMAT(tanggal_kirim,'%d-%m-%Y') as TANGGAL from tb_po where DATE_FORMAT(tanggal_kirim,'%d/%m/%Y') BETWEEN '$tanggal_input_awal' AND '$tanggal_input_sampai' ")or die(mysql_error());
	}							
					
                    while($row_pn = mysql_fetch_array($penawaran_query)){
                     $tes = strtotime( $row_pn['tempo_penawaran']);
                    
                    $pelanggan_query = mysql_query("select * from tb_kontak_all where id_kontak = $row_pn[id_kontak] ")or die(mysql_error());
                    while($row = mysql_fetch_array($pelanggan_query)){
                    
                    $user_query = mysql_query("select * from tb_user where id_user = $row_pn[id_user]")or die(mysql_error());
                    while($row_user = mysql_fetch_array($user_query)){
                    
                    
                    ?>
                  
<tr class="odd gradeX">
  
<td> <?php echo $row['nama_kontak']; ?></td>
			 <td><?php echo $row_pn['alamat_kirim']; ?></td>        
            <td><?php echo $row_pn['TANGGAL']; ?> / <?php echo $row_pn['pukul_kirim']; ?> Wib</td>
            <td><?php echo $row_pn['vol_po']; ?></td>
            <td><?php echo $row_pn['status_kirim']; ?></td>
              <td><?php echo $row_user['nama_user']; ?></td>
                
            <td>
            <?php 
    if($row_pn['status_kirim']=='belum kirim')
    {
	?>
    <a href="?page=data_kirim&id_kirim=<?php echo $row_pn['id_po']; ?>" class="btn btn-success btn-sm" >Isi Data Pengiriman</a>
<?php
}else{
?>
<a href="print_do.php?id_kirim=<?php echo $row_pn['id_po']; ?>" class="btn btn-danger btn-sm" target="_blank"><i class="glyphicon glyphicon-print"></i>Cetak DO</a>

<?php
}
?>

            </td>	
          
</tr>
  
<?php 
}
}
}?>  


</tbody>
                        </table>

                      </div>
                      
                      
                      
                    </div>
                  </div>
 
<form class="form" action="?page=data_pengiriman" enctype="multipart/form-data" method="post">                                          

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
























