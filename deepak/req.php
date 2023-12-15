<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:powderblue;">

<?php 
if(isset($_POST['submit'])) {
  echo  $d_name = $_POST['d_name'];
	echo $unit = $_POST['unit'];
  echo  $disease = $_POST['disease'];
   echo  $group = $_POST['group'];

$conn = mysqli_connect("localhost", "root", "", "bloodbank_db") or die("Connection failed");

  // Your SQL query had syntax errors. Use backticks for column names.
  $query = "INSERT INTO patientdonation (`d_name`, `group`, `disease`, `unit`) VALUES ('$d_name', '$group', '$disease', '$unit')";

  $result = mysqli_query($conn, $query) or die("Query is failed");

 // if ($result) {
    echo "<script>alert('Donation form filed Successfully');</script>";
//  } else{
  echo"<script>alert('form submission');</script>";
}
//}
  



?>
<form method="POST" action="">
					<!-- to error: add class "has-danger" -->
					<div class="form-group">

						<b style="color:black;">patinet name</b>
						<input type="username" name="d_name" class="form-control form-control-sm" id="exampleInputname">
              <br>

					    <b style="color:black;">Blood Group </b>
						<select name="group">
                            <option value="A+">A+</option>
                            <option value="O+">O+</option>
                            <option value="B+">B+</option>
                            <option value="AB+">AB+</option>
                            <option value="A-">A-</option>
                            <option value="O-">O-</option>
                            <option value="B-">B-</option>
                            <option value="AB-">AB-</option>
                        </select>
                     <br><br>
                     
                      
					<br>
						<b style="color:black;">Unit</b>
            <select name="unit">
                            <option value="1-100RS">1-100RS</option>
                            <option value="2-200RS">2-200RS</option>
                            <option value="3-300RS">3-300RS</option>
                            <option value="4-400RS">4-400RS</option>
                            <option value="5-500RS">5-500RS</option>
                            <option value="6-600RS">6-600RS</option>
                            <option value="7-700RS">7-700RS</option>
                            <option value="8-800RS">8-800RS</option>
                        </select>
                     <br><br>

					    <b style="color:black;">Disease</b>
						<input type="username" name="disease" class="form-control form-control-sm" id="exampleInputname">
                  </div>				
					<button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>

				</form>
</body>
</html>