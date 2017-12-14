<?php
 include('dbcon.php');
dbcon(); 
$jum = count($_POST["id"]);
if($jum<1){
echo"<script>alert('Maaf Pilih Terlebih Dahulu')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./?page=set_user'>";


}else{




for ($x=0;$x<$jum;$x++){
$pel = $_POST["id"][$x];
$query1 =$query=mysql_query("insert into tb_set (id_user, id_kontak, tgl_set) values ('$_POST[id_user]','$pel', NOW())") or die (mysql_error());

$query=mysql_query("update tb_kontak_all set id_user  = '$_POST[id_user]' , tanggal_bagi  = NOW() where id_kontak = '$pel' ") or die (mysql_error());
}
if($query)
echo"<script>alert('Data Berhasil di set ke Marketing')</script>";
	echo"<meta http-equiv='refresh' content='0;url=./?page=set_user'>";
}
?>