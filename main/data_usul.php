<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Data Usul</div>
		  			</div>

		  		</div>
		  	</div>
            
<div class="content-box-large">
    <form action=""method="post">
    <table id="example" class="table table-striped" cellspacing="0" width="100%">
    <thead>
    <tr>
    <th>Nama</th>
    <th>Kota</th>
    <th>Provinsi</th>
    <th>Kontak</th>
    <th>Email</th>
    <th>Sales</th>
    <th>Status</th>
	<th>Keterangan</th>
    <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    <!-----------------------------------Content------------------------------------>
    <?php
   
	$kontak_query = mysql_query("select * from tb_kontak_usul where status_kontak ='menunggu' AND pembuat <> 'admin'")or die(mysql_error());
    while($row = mysql_fetch_array($kontak_query)){
	
$user_query = mysql_query("select * from tb_user where id_user = '$row[id_user]' ")or die(mysql_error());
                $row_user = mysql_fetch_array($user_query);
    ?>
    <tr>

    <td><?php echo $row['nama_kontak']; ?></td>
    <td><?php echo $row['kota_kontak']; ?></td>
     <td><?php echo $row['provinsi_kontak']; ?></td>
    <td><?php echo $row['telepon_kontak']; ?></td>
    <td><?php echo $row['email_kontak']; ?></td>
    <td><?php echo $row_user['nama_user']; ?></td>
    <td><?php echo $row['status_kontak']; ?></td>  
        <td><?php echo $row['report_kontak']; ?></td>  
    <td>
    <a href="?page=filter&id_kontak=<?php echo $row['id_kontak']; ?>" class="btn btn-primary btn-xs" >Filter</a>
    </td>		
    </tr>
    
    <?php 
    
    }?>  
    </tbody>
    </table>
     </form>
    
    </div>
    