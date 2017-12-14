<?php
include('dbcon.php'); 
dbcon(); 
include('session.php');
session_destroy();
header('location:../index.php'); 
?>