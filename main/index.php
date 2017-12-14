<?php
include('dbcon.php');
dbcon();
include('session.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
<title>SISTEM MARKETING PT SINAR BACAN KHATULISTIWA</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<!-- bootstrap-datetimepicker -->
<link href="css/bootstrap-datetimepicker.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
</head>
<body>
<div class="header">
<div class="container">
<div class="row">
<div class="col-md-10">
<!-- Logo -->
<div class="logo">
<h1><a href="index.html">PT SINAR BACAN KHATULISTIWA</a></h1>
</div>
</div>

<div class="col-md-2">
<div class="navbar navbar-inverse" role="banner">
<nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
<ul class="nav navbar-nav">
<li class="dropdown">
<a class="btn dropdown-toggle" data-toggle="dropdown">AKUN <b class="caret"></b></a>
<ul class="dropdown-menu animated fadeInUp">
<li><a href="logout.php">Logout</a></li>
</ul>
</li>
</ul>
</nav>
</div>
</div>
</div>
</div>
</div>

<div class="page-content">
<div class="row">
<div class="col-md-2">
<div class="sidebar content-box" style="display: block;">
<ul class="nav">
<!-- Main menu -->
<li class="current"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
<li class="submenu">
<a href="#">
<i class="glyphicon glyphicon-list"></i> Database
<span class="caret pull-right"></span>
</a>
<!-- Sub menu -->
<ul>
<li><a href="?page=data_kontak">Lihat Kontak</a></li>
<li><a href="?page=tambah_kontak">Tambah Kontak</a></li>
<li><a href="?page=data_usul">Data Usulan</a></li>


</ul>
</li>
<li class="submenu">
<a href="#">
<i class="glyphicon glyphicon-list"></i> Data Marketing
<span class="caret pull-right"></span>
</a>
<!-- Sub menu -->
<ul>
<li><a href="?page=set_user">Sebar data</a></li>
<li><a href="?page=pindah_kontak">Pindah Kontak</a></li>
<li><a href="?page=data_kontak_per_marketing">Kontak Per marketing</a></li>

</ul>
</li>
<li><a href="?page=data_penawaran_pending"><i class="glyphicon glyphicon-stats"></i> Penawaran </a></li>
<li><a href="?page=data_pemesanan_pending"><i class="glyphicon glyphicon-tasks"></i> Pemesanan</a></li>
<li><a href="?page=data_pengiriman_belum"><i class="glyphicon glyphicon-send"></i> Pengiriman</a></li>
<li class="submenu">
<a href="#">
<i class="glyphicon glyphicon-th"></i> Laporan
<span class="caret pull-right"></span>
</a>
<!-- Sub menu -->
<ul>
<li><a href="?page=grafik_penawaran">Laporan Penawaran</a></li>
<li><a href="?page=grafik_po">Laporan PO </a></li>
</ul>
</li>
</ul>

</div>
<div class="sidebar content-box" style="display: block;">
<ul class="nav">
<!-- Main menu -->
<li class="current"><a href="#"><i class="glyphicon glyphicon-link"></i>Setting dan User</a></li>
<li><a href="?page=data_user"><i class="glyphicon glyphicon-user"></i> Data User </a></li>
<li><a href="?page=data_supir"><i class="glyphicon glyphicon-user"></i> Data Supir</a></li>
<li><a href="?page=data_kernet"><i class="glyphicon glyphicon-user"></i> Data Kernet</a></li>
<li><a href="?page=data_oat"><i class="glyphicon glyphicon-stats"></i> Data OAT</a></li>
<li><a href="?page=data_armada"><i class="glyphicon glyphicon-calendar"></i> Data Armada </a></li>

</ul>

</div>
</div>
<div class="col-md-10">
<?php include('buka.php'); ?>

</div>
</div>
</div>

<footer>
<div class="container">

<div class="copy text-center">
Copyright 2018 PT <a href='#'>Sinar Bacan Khatulistiwa</a>
</div>

</div>
</footer>

<link href="vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/jquery-3.1.1.js"></script>
<!-- jQuery UI -->
<script src="js/jquery-ui.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="vendors/datatables/js/jquery.dataTables.min.js"></script>

<script src="vendors/datatables/dataTables.bootstrap.js"></script>

<script src="js/custom.js"></script>
<script src="js/tables.js"></script>

<!-- bootstrap-datetimepicker -->
<script src="js/bootstrap-datetimepicker.js"></script> 
<script src="js/bootstrap-datetimepicker.min.js"></script> 
<script src="js/bootstrap-datetimepicker.id.js"></script> 
<script type="text/javascript">
$('.form_date1').datetimepicker({
language:  'id',
weekStart: 1,
todayBtn:  1,
autoclose: 1,
todayHighlight: 1,
startView: 2,
minView: 2,
forceParse: 0
});
$('.form_date2').datetimepicker({
language:  'id',
weekStart: 1,
todayBtn:  1,
autoclose: 1,
todayHighlight: 1,
startView: 2,
minView: 2,
forceParse: 0
});
$('.form_time').datetimepicker({
language:  'id',
weekStart: 1,
todayBtn:  1,
autoclose: 1,
todayHighlight: 1,
startView: 1,
minView: 0,
maxView: 1,
forceParse: 0
});
</script>


</body>
</html>