<?php
 include('../dbcon.php');
dbcon(); 
 $bln = array();   
$bln['name'] = 'Bulan';
$user_query = mysql_query("select * from tb_user ")or die(mysql_error());
                    while($row_user = mysql_fetch_array($user_query)){
					$bln['data'][] = $row_user['nama_user'];
					
$pel = mysql_query("select * ,COUNT( id_user ) AS JUMLAH from tb_kontak_all  where id_user = $row_user[id_user]  ")or die(mysql_error());
							
							while($row_pel = mysql_fetch_array($pel)){
$rowpel['name'] = 'Banyak Kontak';
								
							$rowpel['data'][] = $row_pel['JUMLAH'];
							
							}				
					
$belum = mysql_query("select * ,COUNT( id_user ) AS JUMLAH from tb_kontak_all  where id_user = $row_user[id_user] AND status_kontak = 'belum dihubungi' ")or die(mysql_error());
							
							while($row_belum = mysql_fetch_array($belum)){
$thubung['name'] = 'Belum dihubungi';
							
							$thubung['data'][] = $row_belum['JUMLAH'];
							
							}
$terhubung = mysql_query("select * ,COUNT( id_user ) AS JUMLAH from tb_kontak_all  where id_user = $row_user[id_user]  AND status_kontak = 'telah dihubungi' ")or die(mysql_error());
							
							while($row_terhubung = mysql_fetch_array($terhubung)){
$hubung['name'] = 'Terhubung';


							$hubung['data'][] = $row_terhubung['JUMLAH'];
							
							}							
							
	$tdk = mysql_query("select * ,COUNT( id_user ) AS JUMLAH from tb_kontak_all  where id_user = $row_user[id_user]  AND status_kontak = 'tidak terhubung'  ")or die(mysql_error());
							
							while($row_tdk = mysql_fetch_array($tdk)){
$tdk_hubung['name'] = 'Tidak Terhubung';


							$tdk_hubung['data'][] = $row_tdk['JUMLAH'];
							
							}		
$ulang = mysql_query("select * ,COUNT( id_user ) AS JUMLAH from tb_kontak_all  where id_user = $row_user[id_user]  AND status_kontak = 'telepon lagi'  ")or die(mysql_error());
							
							while($row_ulang = mysql_fetch_array($ulang)){
$tdk_ulang['name'] = 'Telepon Ulang';


							$tdk_ulang['data'][] = $row_ulang['JUMLAH'];
							
							}									
}

$rslt = array();
array_push($rslt, $bln);
array_push($rslt, $rowpel);
array_push($rslt, $thubung);
array_push($rslt, $hubung);
array_push($rslt, $tdk_hubung);
array_push($rslt, $tdk_ulang);
print json_encode($rslt, JSON_NUMERIC_CHECK);


?>
