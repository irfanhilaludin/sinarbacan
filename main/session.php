<?php
//Start session
session_start();

if (!isset($_SESSION['admin']) ||(trim ($_SESSION['admin']) == '')) {
	header("location:".host()."./index.php");
    exit();
}
$session_id=$_SESSION['admin'];

$user_query = mysql_query("select * from tb_admin where id_admin = '$session_id'")or die(mysql_error());
$user_row = mysql_fetch_array($user_query);

$user_username = $user_row['username_admin'];
$admin_area = $user_row['area'];
?>