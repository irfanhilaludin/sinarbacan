<?php
 include('../dbcon.php');
dbcon(); 
 $bln = array();   
$bln['name'] = 'Bulan';
$user_query = mysql_query("select * from user")or die(mysql_error());
                    while($row_user = mysql_fetch_array($user_query)){
					
	$bln['data'][] = $row_user['nama_user'];				
		
$user_penawaran = mysql_query("select * from tb_penawaran WHERE status_penawaran ='terkirim'")or die(mysql_error());
                    $row_user_penawaran = mysql_num_rows($user_penawaran);
					
	
$user_pn = mysql_query("select * ,COUNT( id_user ) AS JUMLAH from tb_penawaran  where id_user = $row_user[id_user] and status_penawaran ='terkirim' AND DATE_FORMAT(tanggal_penawaran, '%m') = 02 ")or die(mysql_error());
							
							while($row_pn = mysql_fetch_array($user_pn)){
$rows['name'] = 'Tingkat Penawaran (%)';
$prosentase = round(($row_pn['JUMLAH'] / $row_user_penawaran ) * 100, 1);	
							
							$rows['data'][] = $prosentase;
													
							
							
							}
$user_po = mysql_query("select * , COUNT( id_user ) AS JUMLAH from tb_po  where id_user = $row_user[id_user]")or die(mysql_error());
							
							while($row_po = mysql_fetch_array($user_po)){
$po['name'] = 'Tingkat Kemungkinan  PO  (%)';
$prosentase_po = round(($row_po['JUMLAH'] / $row_user_penawaran ) * 100, 1);	
								
							$po['data'][] = $prosentase_po;
							
							}		
	
							
							
}

$rslt = array();
array_push($rslt, $bln);
array_push($rslt, $rows);

array_push($rslt, $po);


print json_encode($rslt, JSON_NUMERIC_CHECK);

?>

