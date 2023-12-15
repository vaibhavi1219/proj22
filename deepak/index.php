<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


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
  body {
    font-family:red;
    margin: 0;
  }
  
  * {
    box-sizing: border-box;
  }
  
  img {
    vertical-align:middle;
  }
  
  /* Position the image container (needed to position the left and right arrows) */
  .container {
    position: relative;
  }
  
  /* Hide the images by default */
  .mySlides {
    display: none;
  }
  
  /* Add a pointer when hovering over the thumbnail images */
  .cursor {
    cursor: pointer;
  }
  
  /* Next & previous buttons */
  .prev,
  .next {
    cursor: pointer;
    position:absolute;
    top: 40%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: rgb(252, 252, 252);
    font-weight: bold;
    font-size: 20px;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
  }
  
  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }
  
  /* On hover, add a black background color with a little bit see-through */
  .prev:hover,
  .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }
  
  /* Number text (1/3 etc) */
  .numbertext {
    color: hsl(0, 39%, 94%);
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }
  
  /* Container for image text */
  .caption-container {
    text-align: center;
    background-color: #333;
    padding: 1px 10px;
    color: rgb(255, 255, 255);
    font-size: 20px;
  }
  
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  
  /* Six columns side by side */
  .column {
    float: left;
    width: 16.66%;
  }
  
  /* Add a transparency effect for thumnbail images */
  .demo {
    opacity: 0.7;
  }
  
  .active,
  .demo:hover {
    opacity: 1;
  }




</style>
<center>
<style>
  #more {display: none;}
</style>
</head>



<body>

<!-- Top navigation -->
<div class="topnav">

  <!-- left-aligned links -->
  <div class="topnav-left">
   <a href="#BLOOD BANK MANAGEMENT SYSTEM"><u>BLOOD BANK MANAGEMENT SYSTEM</u></a>
  </div> 

  <!-- Right-aligned links -->
  <div class="topnav-right">
    <a href="#HOME" class="active">HOME</a>
    <a href="adminlogin.php">ADMIN</a>
    <a href="Donor login.php">DONOR</a>
    <a href="Patient login.php">PATIENT</a>  
  </div>  
</div>



<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="background-img1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="background-img2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="background-img3.jpg" alt="Third slide">
    </div>
  </div>
</div>



<div class="rows"style="background-color:#333;">
<h2 style="color:white;"><u>WHAT IS BLOOD BANK MANAGEMENT SYSTEM..?</u></h2>


<p style="color:rgb(255, 255, 255);">
The blood bank management system is 
<span id="dots">...</span><span id="more">The system manages all the activities from blood collection both from camps & hospitals till the issue of blood units.
The main goal of the Blood Bank and Donor Management System project is to monitor Blood Bank data, Blood cells, Blood stock, Donor List.
It manages all the Blood Bank, Donor, Blood stock data. 
</span></p>
<button onclick="myFunction()" id="myBtn">Read more</button>
<script>
function myFunction() 
{
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
</center>
</div>



<div class="rows"style="background-color:#333; ">
 <center>
<h1 style="color:white;">
<u>Our Centers and response..</u>
</h1></center>
 
<div class="container" >
  <center>
  <div class="mySlides" >
    <div class="numbertext">1 / 6</div>
    <img src="b1.jpg" style="width:53%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="b2.jpg" style="width:53%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="b3.jpg" style="width:53%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="b4.jpg" style="width:53%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="b5.jpg" style="width:53%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="b6.jpg" style="width:53%">
  </div>
</center>
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="b1.jpg" style="width:100%" onclick="currentSlide(1)" alt="PUNE">
    </div>
    <div class="column">
      <img class="demo cursor" src="b2.jpg" style="width:100%" onclick="currentSlide(2)" alt="MUMBAI">
    </div>
    <div class="column">
      <img class="demo cursor" src="b3.jpg" style="width:100%" onclick="currentSlide(3)" alt="NAGPUR">
    </div>
    <div class="column">
      <img class="demo cursor" src="b4.jpg" style="width:100%" onclick="currentSlide(4)" alt="DELHI">
    </div>
    <div class="column">
      <img class="demo cursor" src="b5.jpg" style="width:100%" onclick="currentSlide(5)" alt="AURANGABAD">
    </div>    
    <div class="column">
      <img class="demo cursor" src="b6.jpg" style="width:100%" onclick="currentSlide(6)" alt="NASHIK">
    </div>
  </div>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>






</body>
</html>