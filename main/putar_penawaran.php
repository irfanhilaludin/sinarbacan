
 <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
    <div class="x_title">
    
     <?php
$tanggal_input_awal = $_POST["tanggal_input_awal"];
$tanggal_input_sampai = $_POST["tanggal_input_sampai"];
    ?> 
    <h2>Rotasi Penawaran</h2>
    <div class="clearfix"></div>
    </div>
    
        
    
    
    <div class="x_content">
<form class="form" action="?page=putar_penawaran" enctype="multipart/form-data" method="post">
Filter Tanggal:<input id="tanggal_input_awal" class="date-picker" required="required" type="text" name="tanggal_input_awal">
Sampai:<input id="tanggal_input_sampai" class="date-picker" required="required" type="text" name="tanggal_input_sampai">
<input name="input" type="submit" value="Filter Tanggal Tempo Penawaran"  class="btn btn-default"/>
</form>

  </div>
    <form action= "putar.php"method="post">
    <table id= "datatable-responsive" class="table table-striped jambo_table bulk_action" cellspacing="0" width="100%">
    <thead></div>
   
		  		
		  	        <div class= "content-box-large"></div>
                        <table id= "example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                          <thead>


    
    <tr>
    <th class="headings"></th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Kota</th>
    <th>Tanggal Penawaran</th>
     <th>Tempo Penawaran</th>
    <th>Harga</th>
    <th>Sales</th>
    <th>Status</th>
    </tr>
    </thead>
    <tbody>
    <!-----------------------------------Content------------------------------------>
    <?php
	

	
	
    if(($tanggal_input_awal=='') AND ($tanggal_input_sampai=='')){
		$penawaran_query = mysql_query("select * from tb_penawaran")or die(mysql_error());

	}else{
		$penawaran_query = mysql_query("select *  from tb_penawaran where DATE_FORMAT(tempo_penawaran,'%m/%d/%Y') BETWEEN '$tanggal_input_awal' AND '$tanggal_input_sampai'")or die(mysql_error());
	}
	
    /*while($row_pn = mysql_fetch_array($penawaran_query)){
	
		$pelanggan_query = mysql_query("select * from tb_kontak_all where id_kontak = '$row_pn[id_kontak]' ")or die(mysql_error());
        
		while($row = mysql_fetch_array($pelanggan_query)){*/
                    
			// $user_query = mysql_query("select * from tb_user where id_user = '$row_pn[id_user]'")or die(mysql_error());
			
			$query = mysql_query("select bc.nama_kontak, bc.alamat_kontak, bc.kota_kontak, a.harga_penawaran, a.tempo_penawaran, bc.nama_user, a.status_penawaran , MAX(a.tanggal_penawaran) AS 'tanggal_penawaran' from tb_penawaran a 
LEFT JOIN (SELECT b.id_kontak, b.nama_kontak, b.alamat_kontak, b.kota_kontak, c.nama_user FROM tb_kontak_all b INNER JOIN tb_user c ON b.id_user = c.id_user) bc
ON a.id_kontak = bc.id_kontak
GROUP BY bc.id_kontak")or die(mysql_error());
                    while($row = mysql_fetch_array($query)){
  
  
  
    ?>
  
     <tr>
    <td class="a-center ">
     <input type="checkbox" class="flat" name="id_kon[]" value="<?php echo $row['id_kontak']; ?>">
    </td>
    <td><?php echo $row['nama_kontak']; ?></td>
    <td><?php echo $row['alamat_kontak']; ?></td>
    <td><?php echo $row['kota_kontak']; ?></td>
     <td><?php echo $row['tanggal_penawaran']; ?></td>
     <td><?php echo $row['tempo_penawaran']; ?></td>
    <td><?php echo $row['harga_penawaran']; ?></td>
    <td><?php echo $row['nama_user']; ?></td>
    <td><?php echo $row['status_penawaran']; ?></td>  

       </tr>
       
    <?php 
    }
	//}
    //}?>  
    </tbody>
    </table>
    <div class=" col-md-6">Pilih Marketing
  <select name="id_user" class="form-control">   
  <?php  
  $user_ = mysql_query("select * from tb_user where level_user = 'marketing'")or die(mysql_error());
                    while($row_ = mysql_fetch_array($user_)){
  
  ?>
 
  <option value="<?php echo $row_['id_user']; ?>"><?php echo $row_['nama_user']; ?></option>
   <?php
  
  }
  ?>
  </select>
  <?php
   
  echo"  <input name='submit' type='submit' class='btn btn-danger btn-sm col-md-4' value='Pindah'/> " 
 
  
  ?>
       </div>
    </form>
 
    </div>
           <script type="text/javascript">
            $(document).ready(function() {
              $('#tanggal_input_awal').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_4"
				
              }, 
			 
			  
			  function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
              });
			  
            });
          </script>
            <script type="text/javascript">
            $(document).ready(function() {
              $('#tanggal_input_sampai').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_4"
				
              }, 
			 
			  
			  function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
              });
			  
            });
          </script>
     
    </div>
    </div>