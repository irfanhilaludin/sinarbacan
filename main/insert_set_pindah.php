<?php
 include('dbcon.php');
dbcon();
error_reporting(0);
$jum = count($_POST["id_kon"]);

print_r($_POST); return;


if ($jum < 1) {
    echo "<script>alert('Maaf Pilih Terlebih Dahulu')</script>";
    echo "<meta http-equiv='refresh' content='0;url=./?page=pindah_kontak'>";
} else {
    for ($x = 0; $x < $jum; $x++) {
        $pel = $_POST["id_kon"][$x];
        // $query1 = mysql_query("insert into tb_set (id_user, id_kontak, tgl_set) values ('$_POST[user]','$pel', NOW())") or die(mysql_error());
        $query = mysql_query("update tb_kontak_all set id_user  = '$_POST[user]' , status_kontak ='belum dihubungi' , report_kontak = ' ' , tanggal_bagi  = NOW() where id_kontak = '$pel' ") or die(mysql_error());
    }
    if ($query)
        echo "<script>alert('Data Berhasil di pindah')</script>";
    echo "<meta http-equiv='refresh' content='0;url=./?page=pindah_kontak'>";
}
?>