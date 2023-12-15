<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<style>
body
 {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
 }

  .topnav {
    position: relative;
    overflow: hidden;
    background-color: #000000; 
  }
  
  .topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 15px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  
  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }
  
  .topnav a.active {
    background-color: #04AA6D;
    color: white;
  }
  
  .topnav-centered a {
    float: none;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  
  .topnav-right {
    float: right;
  }
  
  /* Responsive navigation menu (for mobile devices) */
  @media screen and (max-width: 600px) {
    .topnav a, .topnav-right {
      float: none;
      display: block;
    }
    
    .topnav-centered a {
      position: relative;
      top: 0;
      left: 0;
      transform: none;
    }
  }
</style>


  <style>
body, html 
{
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image:url("adminbackground.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>



<body>


<!-- Top navigation -->
<div class="topnav">

  <!-- left-aligned links -->
  <div class="topnav-left">
    <a href="#Admin User" class="active"><u>Admin User</u></a>
  </div> 

  <!-- Right-aligned links -->
  <div class="topnav-right">
    <a href="donationshow.php">Donations</a>
    <a href="reqshow.php">Request</a>
    <a href="index.php">Logout</a>  
  </div>  
</div>

<div class="bg"></div>


</body>
</html>