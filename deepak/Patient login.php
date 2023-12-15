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
	background-image:url(banner4.jpg);
	background-repeat:no-repeat;
	background-size:cover;
}

form{
	padding-top: 1px;
	font-size: 20px;
	margin-top: 100px;
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
    $name = $_POST['username'];
    $password = $_POST['password'];

$conn = mysqli_connect("localhost","root","","bloodbank_db") or die("connection failed");
$query = "SELECT * FROM patient WHERE username = '{$name}' AND password = '{$password}'";
$result = mysqli_query($conn,$query) or die("query is failed");
if (mysqli_num_rows($result) != null )
{

	
	
	echo "<script>alert('Login Successfully');</script>";
  
	echo "<script type='text/javascript'>document.location='Patient user.php';</script>";
}
else {
	echo "<script>alert('Login Unsuccess');</script>";
}
  }



?>
	<div class="global-container">    
	<div class="card login-form">
		<div class="card-body">
			<h3 class="card-title text-center"><center><u style="color:white;"><h1>Patient Login</h1></u></center></h3>
			<div class="card-text">
				<!--
				<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
				<form method="POST" action="">
					<!-- to error: add class "has-danger" -->
					<div class="form-group">
						<label><b style="color:black;">Username</b></label>
						<input type="username" name="username" class="form-control form-control-sm" id="exampleInputUsername">
					</div>
					<br>
						<label><b style="color:black;">Password</b></label>
						<input type="password" name="password" class="form-control form-control-sm" id="exampleInputPassword1">
						
                  </div>				
					<button type="submit" name="submit" class="btn btn-primary btn-block">login</button>



					<p class="account-w3ls text-center pb-4" style="color:#000">
                                    Don't have an account?
                                    <a href="Patient Register.php" >Register here</a>
                                </p>
				</form>        </p>
				
			   </div>
		      </div>
	         </div>
            </div>
</body>
</html>


