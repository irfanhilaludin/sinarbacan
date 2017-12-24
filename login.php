<?php
        include('main/dbcon.php');
		dbcon(); 
		session_start();	
		$username = $_POST['username'];
		$password = $_POST['password'];

		/*...................................................user..............................................*/
		$query_user = mysql_query("SELECT * FROM tb_admin WHERE username_admin ='$username' AND password_admin='$password'")or die(mysql_error());
		$num_row_user = mysql_num_rows($query_user);
		$row_user = mysql_fetch_array($query_user);
		
		
		
	 if ($num_row_user > 0){
		$_SESSION['admin'] = $row_user['id_admin'];
header("location:main/");

				
		 }else{ 
echo"<script>alert('Password Atau Username Salah')</script>";
	echo"<meta http-equiv='refresh' content='0;url=index.php'>";

		}	
				
		?>