<!DOCTYPE html>
<html>
<head>	
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

<style>
</style>

<style>
html,
body 
{ 
	height: 100%; 
}

	
.global-container
{
	height:100%;
	display: flex;
	align-items: center;
	justify-content: center;
	background-image:url(banner5.jpg);
	background-repeat:no-repeat;
	background-size:cover;
}

form
{
	padding-top: 0px;
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

</style>
</head>


<body>


<?php 
if(isset($_POST['submit'])) {
    $name = $_POST['username'];
	$email = $_POST['email'];
    $password = $_POST['password'];

 $conn = mysqli_connect("localhost","root","","bloodbank_db") or die("connection failed");
 $query = "INSERT INTO patient(username,email,password)values('{$name}','{$email}','{$password}')";
 $result = mysqli_query($conn,$query) or die("query is failed");
// if (mysqli_num_rows($result) != null )
// {

// 	session_start();

	echo "<script>alert('Register Successfully');</script>";
  
	echo "<script type='text/javascript'>document.location='Patient login.php';</script>";
// }
// else {
// 	echo "<script>alert('Login Unsuccess');</script>";
// }
  }

 ?>
	<div class="global-container">    
	<div class="card login-form">
		<div class="card-body">
			<h3 class="card-title text-center"><center><h1 style="color:white;"><u> Patient Register Page</u></h1></center></h3>
			<div class="card-text">
				<!--
				<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
				<form method="POST" action="">
					<!-- to error: add class "has-danger" -->
					<div class="form-group">
						<b style="color:black;">Username</b>
						<input type="username" name="username" class="form-control form-control-sm" id="exampleInputname">
                    <br>
					    <b style="color:black;">Email </b>
						<input type="email"  name="email" class="form-control form-control-sm" id="exampleInputEmail1">
					<br>
						<b style="color:black;">Password</b>
						<input type="password" name="password" class="form-control form-control-sm" id="exampleInputPassword1">
						
                  </div>				
					<button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>



					<p class="account-w3ls text-center pb-4" style="color:#000">
                                    Already registered?
                                    <a href="Patient login.php" >Login here</a>
                                </p>
				</form>
			   </div>
		      </div>
	         </div>
            </div>
</body>
</html>
