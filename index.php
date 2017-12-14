<!DOCTYPE html>
<html>
  <head>
    <title>PT Sinar Bacan Khatulistiwa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="main/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="main/css/styles.css" rel="stylesheet">
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="#">PT Sinar Bacan Khatulistiwa</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Login System</h6>
                            <form action="login.php" id="login" name="login"  enctype="multipart/form-data" method="post">
				                <input class="form-control" type="text" placeholder="Username" name="username" required>
			                <input class="form-control" type="password" placeholder="Password" name="password" required>
			                <div class="action">
                            <input name="cek_login" class="btn btn-primary signup" type="submit" value="Login">
			                </div>  
                            </form>              
			            </div>
			        </div>

			      
			    </div>
			</div>
		</div>
        
	</div>
    
	
   <script src="main/js/jquery-3.1.1.js"></script>
    <script src="main/bootstrap/js/bootstrap.min.js"></script>
    <script src="main/js/custom.js"></script>
  </body>
</html>