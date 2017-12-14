<?php
include('dbcon.php');
dbcon();
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data_kontak.xls");

?>

<html>
    <?php
$tgl_awal = $_POST["tanggal_mulai"];
$tgl_akhir = $_POST["tanggal_akhir"];


    ?> 
<head>
</head>

<body>

<div class="box round first grid">

<h2>

Data Pelanggan Total</h2>
<div class="block">


<table class="data display datatable" id="example" border="1">
<thead>

<tr>

<th>Nama Perusahaan</th>
<th>Alamat</th>
<th>Kota</th>
<th>Purchasing</th>
<th>Telp/fax</th>
<th>Email</th>
<th>Status Pelanggan</th>
<th>Report</th>
<th>Sales</th>
<th>Tanggal Input</th>
<th>Oleh</th>
</tr>

</thead>

<tbody>
<!-----------------------------------Content------------------------------------>
<?php
                    $pelanggan_query = mysql_query("select * from tb_kontak_all where DATE_FORMAT(tanggal_kontak,'%d/%m/%Y') BETWEEN '$tgl_awal' AND '$tgl_akhir' ")or die(mysql_error());
                    while($row_pn = mysql_fetch_array($pelanggan_query)){
                                  
                    $user_query = mysql_query("select * from tb_user where id_user = '$row_pn[id_user]' ")or die(mysql_error());
                    while($row_user = mysql_fetch_array($user_query)){
                    
                    
                    ?>
                  
<tr class="odd gradeX">
<td><?php echo $row_pn['nama_kontak']; ?><br /></td>
<td><?php echo $row_pn['alamat_kontak']; ?></td>
<td><?php echo $row_pn['kota_kontak']; ?></td>
<td><?php echo $row_pn['cp_kontak']; ?></td>
<td><?php echo $row_pn['telepon_kontak']; ?>/<?php echo $row_pn['fax_kontak']; ?></td>
<td><?php echo $row_pn['email_kontak']; ?></td>
<td><?php echo $row_pn['status_kontak']; ?></td>	  
<td><?php echo $row_pn['report_kontak']; ?></td>
<td><?php echo $row_user['nama_user']; ?></td>	
<td><?php echo $row_pn['tanggal_kontak']; ?></td>	
<td><?php echo $row_pn['pembuat']; ?></td>		        
</tr>
  
<?php 
}
}?>  


</tbody>

</table>
</div>
</div>
</body>
</html>