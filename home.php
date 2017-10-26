<!DOCTYPE html>
<html>
<head>

<style>

ul{
	list-style-type:none;
	margin:0;
	padding:0;
	overflow:hidden;
	background-color:black;
	position:relative;
}

li{
	float:left;
	border-right:1px solid #bbb;
}

li a{
	display:inline-block;
	color:white;
	text-decoration:none;
	font-family:calibri;
	font-size:20px;
	text-align:center;
	padding:10px 10px;
}

li a:hover{
	color:white;
	background-color:grey;
          }



* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 2000px;
  position: relative;
  margin: auto;
 
}



/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

div.footer{
	width:100%;
	background-color:black;
	padding:5px 0px 0px 0px;
        position:absolute;
	left;
	
       }

.footer a{
	font-family:calibri;
	font-size:20px;
	font-weight:normal;
	color:white;
	text-decoration:none;
}

.footer a:hover{
	color:#E3DEDE;
    text-decoration:underline;
}

.footer p{
	font-family:calibri;
	font-size:16px;
	font-weight:normal;
	color:white;
	text-decoration:none;
}
h1{ font-family:serif;
    font-size:50px;
    text-align:center;

   }
h2.one{color:white;
       font-size:16px;
      }
</style>
</head>
<body background="pro.jpeg">
<center>
<img  src="logo.png"  style="width:80px;height:80px;">
<img  src="wename.png"   style="width:250px;height:90px;">
</center>
<ul>
<li><a href="home.php"><img src="home.svg" width="20px" height="20px"/></a></li>
<li><a href="men.php">MEN</a></li>
<li><a href="kids.php">KIDS</a></li>
<li><a href="women.php">WOMEN</a></li>
 

<table align="right">
<tr>
<td>
<a href="https://www.facebook.com">
<img border="0" align="right" hspace="1" src="fb_icon.png" width="30" height="30">
</a>
</td>
<td>
<a href="https://www.twitter.com">
<img border="0" align="right" hspace="1" src="twitter_icon.png" width="30" height="30">
</a></td>
<td>
<a href="https://plus.google.com">
<img border="0" align="right" hspace="1" src="gplus_icon.png" width="30" height="30">
</a></td>

<td>
   <a href="logout.php">
   <img border="0" align="right" hspace="4" src="logout.png" width="20" height="20">
   </a></td>



</tr>
</table>
</ul><br><br><br><hr><br><br>




<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img1.jpg"  height=550px width=1271px>
  </div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="aish_home2.jpg" height=550px width=1271px>
  </div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="backgroung_img2.jpg" height=550px width=1271px>
  </div>


<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>
  
<br><br><hr>


<h1 >summer special</h1>
<p>
<a href="sale.html">
<img src="sale.jpg"  width=100%><br><br><br><br><br>
</a>
</p>

<img src="screen.png" width=100%>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 5 seconds
}







</script>


<div class="footer">
<center>
<a href="home.php">home|</a>

<a href="about_us.php">About us</a>

<h2 class="one">Contact us - 1800-108-1100</h2>
</center>
<p>&copy All Rights are reserved .</p>
</div>

</body>
</html> 

