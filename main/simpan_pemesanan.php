<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data_Penjualan.xls");

$tanggal_mulai = $_POST["tanggal_mulai"];
$tanggal_akhir = $_POST["tanggal_akhir"];

?>

<html>

<head>
</head>

<body>

<div class="box round first grid">

<h2> Data Penjualan  </h2>
Tanggal <?php echo $tanggal_mulai; ?> s/d <?php echo $tanggal_akhir; ?> 
<div class="block">


<table class="data display datatable" id="example" border="1">
<thead>
<tr>

<th>No Invoice</th>
<th>Nama Perusahaan</th>
<th>Alamat</th>
<th>Purchasing</th>
<th>Telp/fax</th>
<th>Email</th>
<th>NPWP</th>
<th>Tanggal PO</th>
<th>Tanggal Kirim</th>
<th>Harga/Ltr</th>
<th>Harga Dasar</th>
<th>PPn</th>
<th>Total PPn</th>
<th>OAT</th>
<th>Total OAT</th>
<th>Fee</th>
<th>Total Fee</th>
<th>Pembayaran</th>
<th>Tanggal Bayar</th>
<th>Sales</th>


</tr>

</thead>

<tbody>
<!-----------------------------------Content------------------------------------>
<?php
 include('dbcon.php');
dbcon(); 
                
           
 $a = 0;


                    $po_query = mysql_query("select * , DATE_FORMAT(tanggal_po,'%d/%m/%Y') as tgl_po ,  DATE_FORMAT(tanggal_kirim,'%d/%m/%Y') as tgl_kirim , DATE_FORMAT(jatuh_tempo,'%d/%m/%Y') as tgl_tempo from tb_po where status_po = 'setuju' AND DATE_FORMAT(tanggal_po,'%d/%m/%Y')  BETWEEN '$tanggal_mulai' AND '$tanggal_akhir'")or die(mysql_error());
                    while($row_po = mysql_fetch_array($po_query)){
                     $tes = strtotime( $row_po['jatuh_tempo']);
	$oat_query = mysql_query("select * from tb_oat where id_oat = '$row_po[id_oat]'")or die(mysql_error());
                    $oat_query = mysql_fetch_array($oat_query);


	
	 $a = (10*100/100);
 $fee = $row_po['fee_po'] ;
 $row_nopo = $row_po['no_po'] ;
 $no_po =strtoupper($row_nopo);
  $row_npwp = $row_po['npwp'] ;
  $npwp = strtoupper($row_npwp);
 $oat = round($oat_query['harga_oat'],0) ; 
 $volume = $row_po['vol_po']; 
 
$total = ($a+(100*100/100));
 $harga_pembayaran =  round($row_po['harga_po'],0);    
 $ppn = round(($harga_pembayaran / $total) * $a,0) ; 


  $total_pajak = $ppn +  $oat + $fee ;
  
  
 $harga_dasar = round($harga_pembayaran - $total_pajak,0) ;     
 
     
 $sub_bayar = round($harga_dasar * $volume ,0) ;
 $total_bayar = round($harga_pembayaran * $volume ,0) ;	
 $total_ppn =  round($ppn * $volume ,0) ; 	
  $total_oat = round($oat * $volume ,0) ;	
   $total_fee = round($fee * $volume ,0) ;	
 
                    $pelanggan_query = mysql_query("select * from tb_kontak_all where id_kontak = $row_po[id_kontak] ")or die(mysql_error());
                    while($row = mysql_fetch_array($pelanggan_query)){
						
				
                    $user_query = mysql_query("select * from tb_user where id_user = $row_po[id_user]")or die(mysql_error());
                    while($row_user = mysql_fetch_array($user_query)){
                    
					
					
                    
                    ?>
                  
<tr class="odd gradeX">
<td><?php echo $row_po['no_invoice']; ?></td>
<td><?php echo $row['nama_kontak']; ?><br /></td>
<td><?php echo $row['alamat_kontak']; ?></td>
<td><?php echo $row['cp_kontak']; ?></td>
<td><?php echo $row['telepon_kontak']; ?>/<?php echo $row['fax_kontak']; ?></td>
<td><?php echo $row['email_kontak']; ?></td>
<td><?php echo $row_po['npwp']; ?></td>
<td><?php echo $row_po['tgl_po']; ?></td>
<td><?php echo $row_po['tgl_kirim']; ?></td>

<td><?php echo $row_po['harga_po']; ?></td>
<td><?php echo $harga_dasar ?></td>
<td><?php echo $ppn ?></td>
<td><?php echo $total_ppn ?></td>
<td><?php echo $oat ?></td>
<td><?php echo $total_oat ?></td>
<td><?php echo $fee ?></td>
<td><?php echo $total_fee ?></td>
<td><?php echo $row_po['pembayaran_po']; ?></td>
<td><?php echo $row_po['tgl_tempo']; ?></td>
<td><?php echo $row_user['nama_user']; ?></td>	
</tr>
  
<?php 
}
}
}?>  


</tbody>

</table>
</div>
</div>
</body>
</html>