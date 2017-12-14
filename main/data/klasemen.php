<?php
 include('../dbcon.php');
dbcon(); 
 $bln = array();   
$bln['name'] = 'Bulan';
$bulan_ini = date("m");
$user_query = mysql_query("select * from tb_user")or die(mysql_error());
                    while($row_user = mysql_fetch_array($user_query)){
					$bln['data'][] = $row_user['nama_user'];

$user_po = mysql_query("select * , COUNT( id_user ) AS JUMLAH from tb_po  where id_user = $row_user[id_user] AND  DATE_FORMAT(tanggal_po, '%m') =  $bulan_ini ")or die(mysql_error());
							
							while($row_po = mysql_fetch_array($user_po)){
$po['name'] = 'PO';
								
							$po['data'][] = $row_po['JUMLAH'];
							
							}							
							
							
}

$rslt = array();
array_push($rslt, $bln);
array_push($rslt, $po);
print json_encode($rslt, JSON_NUMERIC_CHECK);

?>

