<!DOCTYPE html>
<html>
<head>	
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

<style>
</style>

<style>
html,
body { 
	height: 100%; 
}

	
.global-container{
	height:100%;
	display: flex;
	align-items: center;
	justify-content: center;
	background-image:url(banner1.jpg);
	background-repeat:no-repeat;
	background-size:cover;
}

form{
	padding-top: 1px;
	font-size: 17px;
	margin-top: 30px;
}

.card-title{ font-weight:600; }

.btn{
	text-align:center;
	font-size: 15px;
	margin-top:15px;
	color:black;
}


.login-form{ 
	text-align:center;
	width:330px;
	margin:20px;
	color:white;
}

.login{
	text-align:center;
	padding:20px 0 0;
}

.alert{
	margin-bottom:-30px;
	font-size: 13px;
	margin-top:20px;
}
</style>
<style>
</style>
</head>


<body>
	<?php 
if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

if ($email == "admin@gmail.com" && $password=="admin")
{


	echo "<script>alert('Login Successfully');</script>";
  
	 echo "<script type='text/javascript'>document.location='admin user.php';</script>";
}
else {
	echo "<script>alert('Login Unsuccess');</script>";
}
  }



?>
	<div class="global-container">    
	<div class="card login-form">
		<div class="card-body">
			<h3 class="card-title text-center"><center>ADMIN LOGIN</center></h3>
			<div class="card-text">
				<!--
				<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
				<form method="POST" action="">
					<!-- to error: add class "has-danger" -->
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email"name="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
					</div>
					<br>
						<label for="exampleInputPassword1">Password</label>
						<input type="password"name="password"class="form-control form-control-sm" id="exampleInputPassword1">
						
                  </div>				
					<button type="submit" name="submit" class="btn btn-primary btn-block">login</button>
				</form>
			   </div>
		      </div>
	         </div>
            </div>
</body>
</html>


