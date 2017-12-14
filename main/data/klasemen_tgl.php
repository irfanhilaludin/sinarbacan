<?php
 include('../dbcon.php');
dbcon(); 
$tgl = array(); 
$bln =  array(); 
$tgl['name'] = 'tanggal';
$bln['name'] = 'bulan';
$po['name'] = 'Harian';
$po2['name'] = 'Bulanan';
$bulan_ini = date("m");



$user_po = mysql_query("select * , DATE(tanggal_po) AS TANGGAL , DATE_FORMAT(tanggal_po  ,'%M') AS BULAN , SUM( vol_po ) AS JUMLAH from tb_po Where DATE_FORMAT(tanggal_po, '%m') = $bulan_ini group by TANGGAL ASC ")or die(mysql_error());
							
							while($row_po = mysql_fetch_array($user_po)){
							$tgl['data'][] = $row_po['TANGGAL'];
							$bln['data'][] = $row_po['BULAN'];
							$po['data'][] = $row_po['JUMLAH'];
								$po2['data'][] = $row_po['JUMLAH'];
							
					
							 
							

}




$rslt = array();
array_push($rslt, $tgl);
array_push($rslt, $po);
array_push($rslt, $bln);
array_push($rslt, $po2);


print json_encode($rslt, JSON_NUMERIC_CHECK);
 

?>
