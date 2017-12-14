<?php
 include('../dbcon.php');
dbcon(); 
 $bln = array();   
$bln['name'] = 'Bulan';
$user_query = mysql_query("select * from tb_user where level_user = 'marketing' ")or die(mysql_error());
                    while($row_user = mysql_fetch_array($user_query)){
					
	$bln['data'][] = $row_user['nama_user'];				
				
$pel = mysql_query("select * ,COUNT( id_user ) AS JUMLAH from tb_kontak_all  where id_user = $row_user[id_user] AND DATE_FORMAT(tanggal_kontak, '%m') = 02")or die(mysql_error());
							
							while($row_pel = mysql_fetch_array($pel)){
$rowpel['name'] = 'Database';
								
							$rowpel['data'][] = $row_pel['JUMLAH'];
							
							}				
					
							$user_pn = mysql_query("select * ,COUNT( id_user ) AS JUMLAH from tb_penawaran  where id_user = $row_user[id_user] AND status_penawaran ='terkirim'  AND DATE_FORMAT(tanggal_penawaran, '%m') = 02  ")or die(mysql_error());
							
							while($row_pn = mysql_fetch_array($user_pn)){
$rows['name'] = 'Penawaran terkirim';
							
							$rows['data'][] = $row_pn['JUMLAH'];
							
							}
$user_po = mysql_query("select * , COUNT( id_user ) AS JUMLAH from tb_po  where id_user = $row_user[id_user] AND DATE_FORMAT(tanggal_po, '%m') = 02  ")or die(mysql_error());
							
							while($row_po = mysql_fetch_array($user_po)){
$po['name'] = 'PO';
								
							$po['data'][] = $row_po['JUMLAH'];
							
							}		
	$user_g_pn = mysql_query("select * ,COUNT( id_user ) AS JUMLAH from tb_penawaran  where id_user = $row_user[id_user] and status_penawaran ='gagal kirim' AND DATE_FORMAT(tanggal_penawaran, '%m') = 02 ")or die(mysql_error());
							
							while($row_g_pn = mysql_fetch_array($user_g_pn)){
$gagal_pn['name'] = 'Penawaran gagal';
							
							$gagal_pn['data'][] = $row_g_pn['JUMLAH'];
							
							}
							
							
}

$rslt = array();
array_push($rslt, $bln);
array_push($rslt, $rowpel);
array_push($rslt, $gagal_pn);
array_push($rslt, $rows);

array_push($rslt, $po);


print json_encode($rslt, JSON_NUMERIC_CHECK);

?>