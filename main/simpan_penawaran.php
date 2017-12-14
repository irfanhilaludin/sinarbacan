<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data_Penawaran.xls");

?>

<html>
<?php
$tanggal_mulai = $_POST["tanggal_mulai"];
$tanggal_akhir = $_POST["tanggal_akhir"];

?>
<head>
</head>

<body>

<div class="box round first grid">

<h2>

Data Penawaran Marketing </h2>
<div class="block">


<table class="data display datatable" id="example" border="1">
<thead>
<tr>

<th>No SPH</th>
<th>Tanggal Penawaran</th>
<th>Tanggal Tempo</th>	
<th>Nama Perusahaan</th>
<th>Alamat</th>
<th>UP</th>
<th>Telp/fax</th>
<th>Email</th>
<th>Harga Dasar</th>
<th>PPn</th>
<th>PPh</th>
<th>PBBKB</th>
<th>Harga/Ltr</th>
<th>Pembayaran</th>
<th>Sales</th>
<th>HP Sales</th>
<th>status</th>
</tr>

</thead>

<tbody>
<!-----------------------------------Content------------------------------------>
<?php
 include('dbcon.php');
dbcon(); 
 $a = 0;
 $b = 0;
 $c = 0;

                    $penawaran_query = mysql_query("select * , DATE_FORMAT(tanggal_penawaran,'%d/%m/%Y') as tgl_pen ,  DATE_FORMAT(tempo_penawaran,'%d/%m/%Y') as tgl_tem from tb_penawaran where DATE_FORMAT(tanggal_penawaran ,'%d/%m/%Y')  BETWEEN '$tanggal_mulai' AND '$tanggal_akhir'")or die(mysql_error());
                    while($row_pn = mysql_fetch_array($penawaran_query)){
                     $tes = strtotime( $row_pn['tempo_penawaran']);
					 $po_query = mysql_query("select * from tb_po where id_kontak = $row_pn[id_kontak] ")or die(mysql_error());
                    $row_po = mysql_fetch_array($po_query);
					 
 $a = (10*100/100);
 $b = (0.30*100/100);
 $c = (0.8585*100/100);

 $total = (($a+$b+$c)+(100*100/100));
 $harga_penawaran =  $row_pn['harga_penawaran'];    
 $ppn = round(($harga_penawaran / $total) * $a,2) ; 
 $pph = round(($harga_penawaran / $total) * $b,2) ; 
 $pbbkb = round(($harga_penawaran / $total) * $c,2) ; 
 $total_pajak = $ppn + $pph + $pbbkb ;
 $harga_dasar = round($harga_penawaran - $total_pajak,2) ;           
                    $pelanggan_query = mysql_query("select * from tb_kontak_all where id_kontak = $row_pn[id_kontak] ")or die(mysql_error());
                    while($row = mysql_fetch_array($pelanggan_query)){
						
                    $po_query = mysql_query("select * from tb_po where id_kontak = $row_pn[id_kontak] ")or die(mysql_error());
                    $row_po = mysql_fetch_array($po_query);
					
					
                    $user_query = mysql_query("select * from tb_user where id_user = $row_pn[id_user]")or die(mysql_error());
                    while($row_user = mysql_fetch_array($user_query)){
                    
					
					
                    
                    ?>
                  
<tr class="odd gradeX">
<td><?php echo $row_pn['no_penawaran']; ?></td>
<td><?php echo $row_pn['tgl_pen']; ?></td>
<td><?php echo $row_pn['tgl_tem']; ?></td>
<td><?php echo $row['nama_kontak']; ?><br /></td>
<td><?php echo $row['alamat_kontak']; ?></td>
<td><?php echo $row['cp_kontak']; ?></td>
<td><?php echo $row['telepon_kontak']; ?>/<?php echo $row['fax_kontak']; ?></td>
<td><?php echo $row['email_kontak']; ?></td>
<td><?php echo $harga_dasar ?></td>
<td><?php echo $ppn ?></td>
<td><?php echo $pph ?></td>
<td><?php echo $pbbkb ?></td>
<td><?php echo $row_pn['harga_penawaran']; ?></td>
<td><?php echo $row_pn['pembayaran']; ?></td>
<td><?php echo $row_user['nama_user']; ?></td>	
<td><?php echo $row_user['hp_user']; ?></td>	
<td><?php echo $row_pn['status_penawaran']; ?></td>
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