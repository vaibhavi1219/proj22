<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body style="background-color:pink;">

<?php 
if(isset($_POST['submit'])) {
  echo $d_name = $_POST['d_name'];
	echo $unit = $_POST['unit'];
  echo $disease = $_POST['disease'];
  echo $group = $_POST['group'];
 

 $conn = mysqli_connect("localhost","root","","bloodbank_db") or die("connection failed");
 $query = "INSERT INTO `donation`(d_name,`group`,disease,unit)values('{$d_name}','{$group}','{$disease}',{$unit})";
 $result = mysqli_query($conn,$query) or die("query is failed");
// if (mysqli_num_rows($result) != null )
// {

//session_start();

	echo "<script>alert('Donation form filed Successfully');</script>";
  
	// echo "<script type='text/javascript'>document.location='Patient login.php';</script>";
// }
// else {
// 	echo "<script>alert('Login Unsuccess');</script>";
// }
  }



?>
<form method="POST" action="">
  
					<!-- to error: add class "has-danger" -->
          
					<div class="form-group">
            
						<b style="color:black;">Donater name</b>
						<input type="username" name="d_name" class="form-control form-control-sm" id="exampleInputname">
                    <br>
					    <b style="color:black;">Blood Group </b>
						<select name="group">
                            <option value="A+">A+</option>
                            <option value="O+">O+</option>
                            <option value="B+">B+</option>
                            <option value="AB+">AB+</option>
                            <option value="A-">A-</option>
                            <option value="O+">O+</option>
                            <option value="AB+">AB+</option>
                            <option value="B-">B-</option>

                        </select>

                        <b style="color:black;">Mobile_Number</b>
						<input type="mobile Number" name="mobile number" class="form-control" id="exampleInputname">


					<br>
						<b style="color:black;">Units</b>
						<input type="number" name="unit" class="form-control form-control-sm" id="exampleInputPassword1">
						
                        <b style="color:black;">Disease</b>
						<input type="username" name="disease" class="form-control form-control-sm" id="exampleInputname">


           

                  </div>				
					<button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>

				</form>

</body>
</html>