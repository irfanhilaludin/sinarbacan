<?php
 include('../dbcon.php');
dbcon(); 
 $bln = array();   
$bln['name'] = 'Bulan';
$bln['data'][] = 'Prosentase';

$base = mysql_query("select * ,COUNT( id_kontak ) AS JUMLAH from tb_kontak_all where status_kontak = 'telah dihubungi'")or die(mysql_error());
						
						
			$row_base = mysql_fetch_array($base);
$base_pel['name'] = 'Database All';


							$base_pel['data'][] = $row_base['JUMLAH'];
							
				
				
				
$pel = mysql_query("select * ,COUNT( id_kontak ) AS JUMLAH from tb_kontak_all where report_kontak = 'S'")or die(mysql_error());
							
							while($row_pel = mysql_fetch_array($pel)){
								
$prosentase_pel = round(($row_pel['JUMLAH'] / $row_base['JUMLAH'] ) * 100,3);
								
								
$rowpel['name'] = 'Kontrak PT Lain';
								
							$rowpel['data'][] = $prosentase_pel;
							
							}				
$pel_hub = mysql_query("select * ,COUNT( id_kontak ) AS JUMLAH from tb_kontak_all where report_kontak = 'O'")or die(mysql_error());
							
							while($row_hub = mysql_fetch_array($pel_hub)){
								
$prosentase_hub = round(($row_hub['JUMLAH'] / $row_base['JUMLAH'] ) * 100,3);
								
								
$rowpel_hub['name'] = 'Harga Kalah';
								
							$rowpel_hub['data'][] = $prosentase_hub;
							
							}		

$pel_tidak = mysql_query("select * ,COUNT( id_kontak ) AS JUMLAH from tb_kontak_all where report_kontak = 'E'")or die(mysql_error());
							
							while($row_tidak = mysql_fetch_array($pel_tidak)){
								
$prosentase_tidak = round(($row_tidak['JUMLAH'] / $row_base['JUMLAH'] ) * 100,3);
								
								
$rowpel_tidak['name'] = 'Pemakaian Minim';
								
							$rowpel_tidak['data'][] = $prosentase_tidak;
							
							}			
$pel_p = mysql_query("select * ,COUNT( id_kontak ) AS JUMLAH from tb_kontak_all where report_kontak = 'P'")or die(mysql_error());
							
							while($row_p = mysql_fetch_array($pel_p)){
								
$prosentase_p = round(($row_p['JUMLAH'] / $row_base['JUMLAH'] ) * 100,3);
								
								
$rowpel_p['name'] = 'Non Solar';
								
							$rowpel_p['data'][] = $prosentase_p;
							
							}			
							
$user_pn = mysql_query("select * , COUNT( id_kontak ) AS JUMLAH from tb_kontak_all where report_kontak = 'I'")or die(mysql_error());
							
							while($row_pn = mysql_fetch_array($user_pn)){
$prosentase_pn = round(($row_pn['JUMLAH'] / $row_base['JUMLAH'] ) * 100 ,3);
$rows['name'] = 'Penawaran';
							
							$rows['data'][] = $prosentase_pn;
							
							}
$user_po = mysql_query("select * , COUNT( id_kontak ) AS JUMLAH from tb_po ")or die(mysql_error());
							
							while($row_po = mysql_fetch_array($user_po)){
								
$prosentase_po = round(($row_po['JUMLAH'] / $row_base['JUMLAH'] ) * 100, 3);								
$po['name'] = 'PO';
								
							$po['data'][] = $prosentase_po;
							
							}		
								
							
							


$rslt = array();
array_push($rslt, $bln);
array_push($rslt, $rowpel);
array_push($rslt, $rowpel_hub);
array_push($rslt, $rowpel_tidak);
array_push($rslt, $rowpel_p);
array_push($rslt, $rows);
array_push($rslt, $po);



print json_encode($rslt, JSON_NUMERIC_CHECK);

?>

