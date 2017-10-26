<!DOCTYPE html>
<html>
<head>

<style>
.button {
    background-color: black;
    border: 3;
    
    color: white;
    padding: 15px 70px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 11px;
    margin: 4px 2px;
    cursor: pointer;
}
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
h1{
        color: black;
	font-size: 66px;
	text-align:center;
	font-family:serif;
   
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
	font-size:12px;
	font-weight:normal;
	color:white;
	text-decoration:none;
}
h2.one{color:white;
	font-size:16px;
  }
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/



/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
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
  .prev, .next,.text {font-size: 11px}
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
<li><a href="women.php">WOMEN</a></li>

<li><a href="men.php">MEN</a></li>
<li><a href="kids.php">KIDS</a></li>
 

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
</ul><br><br><hr><br><br>
 
 
    
  
<div class="slideshow-container">

<div class="mySlides fade">

  <img src="2.jpg" height=430px width=1000px >
  
</div>

<div class="mySlides fade">

  <img src="3.jpg" height=430px width=1000px>
  
</div>

<div class="mySlides fade">

  <img src="4.jpg" height=450px width=1000px>

</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div><br><br><hr><br><br>
<h1>Men's watches<br> 20% off!!!</h1>



<table  border="0"align="center"cellspacing="10" >
<tr >
<td>
<img border="2" hspace="10"  src="sale_m1.jpg" width="185" height="185">
</td>
<td >
<img border="2" hspace="10"  src="sale_m2.jpg" width="185" height="185">
</td >
<td>
<img border="2" hspace="10"   src="sale_m3.jpg" width="185" height="185">
</td >
</tr>

<tr cellpadding="10">
<td align="center">
<p><strong>Rs. 2,876/-</strong></p>
</td>
<td align="center">
<p><strong>Rs. 1,992/-</strong></p>
</td>
<td align="center">
<p><strong>Rs. 2,339/-</strong></p>
</td>
</tr>

<tr>
<td>
<form method="get" action="sale_m1.php">
<input type='submit'  class='button' value='BUY NOW' />
</form>
</td>
<td>
<form method="get" action="sale_m2.php">
<input type='submit' class='button' value='BUY NOW' />
</form>
</td>
<td>
<form method="get" action="sale_m3.php">
<input type='submit'  class='button' value='BUY NOW' />
</form>
</td>
</tr>
</table>


<h1>Women's watches<br> 25% off!!!</h1>



<table  border="0"align="center"cellspacing="10" >
<tr >
<td>
<img border="2" hspace="10"  src="sale_w1.jpg" width="185" height="185">
</td>
<td >
<img border="2" hspace="10"  src="sale_w2.jpg" width="185" height="185">
</td >
<td>
<img border="2" hspace="10"   src="sale_w3.jpg" width="185" height="185">
</td >
</tr>

<tr cellpadding="10">
<td align="center">
<p><strong>Rs. 2,876/-</strong></p>
</td>
<td align="center">
<p><strong>Rs. 1,992/-</strong></p>
</td>
<td align="center">
<p><strong>Rs. 2,339/-</strong></p>
</td>
</tr>

<tr>
<td>
<form method="get" action="sale_w1.php">
<input type='submit'  class='button' value='BUY NOW' />
</form>
</td>
<td>
<form method="get" action="sale_w2.php">
<input type='submit' class='button' value='BUY NOW' />
</form>
</td>
<td>
<form method="get" action="sale_w3.php">
<input type='submit'  class='button' value='BUY NOW' />
</form>
</td>
</tr>
</table>


<h1>kid's watches <br>30% off!!!</h1>



<table  border="0"align="center"cellspacing="10" >
<tr >
<td>
<img border="2" hspace="10"  src="sale_k1.jpg" width="185" height="185">
</td>
<td >
<img border="2" hspace="10"  src="sale_k2.jpg" width="185" height="185">
</td >
<td>
<img border="2" hspace="10"   src="sale_k3.jpg" width="185" height="185">
</td >
</tr>

<tr cellpadding="10">
<td align="center">
<p><strong>Rs. 2,876/-</strong></p>
</td>
<td align="center">
<p><strong>Rs. 1,992/-</strong></p>
</td>
<td align="center">
<p><strong>Rs. 2,339/-</strong></p>
</td>
</tr>

<tr>
<td>
<form method="get" action="sale_k1.php">
<input type='submit'  class='button' value='BUY NOW' />
</form>
</td>
<td>
<form method="get" action="sale_k2.php">
<input type='submit' class='button' value='BUY NOW' />
</form>
</td>
<td>
<form method="get" action="sale_k3.php">
<input type='submit'  class='button' value='BUY NOW' />
</form>
</td>
</tr>
</table><br><br><br><br>


<div class="footer">
<center>
<a href="home.php">home|</a>

<a href="about.php">About us</a>

<h2 class="one">Contact us - 1800-108-1100</h2>
</center>
<p>&copyAll Rights are reserved on watches.</p>
</div>



<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
}
</script>

</body>
</html> 

