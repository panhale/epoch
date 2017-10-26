<html>
<head>

 <script>
function validateform()
{ 
var Email=document.myform.Email.value;
var password=document.myform.password.value;
if(Email==null || Email=="")
{ alert("email cant be blank");
   return false;
}
 else if(password.length<6)
  {
    alert("password must be atleast 6 characters long");
    return false;       
  }
else
{
	alert("Signed up Successfully");
	return true;
}
 
}
</script>




<style>

p.one{
color:black;
margin-left:11cm;
margin-right:2cm;
margin-top:3cm;
margin-bottom:1cm;
font-size:40px}



div {
    width: 400px;
    border: 10px solid black;
    padding: 25px;
    margin-left:11cm;
    margin-right:2cm;
    margin-top:1cm;
    margin-bottom:1cm;
}
</style>
</head>



<body background="pro.jpeg" link="yellow">

<center>
<img  src="logo.png"  style="width:80px;height:80px;">
<img  src="wename.png"   style="width:250px;height:90px;">
</center>



<form name="myform"  onsubmit="return validateform();" action="data.php" method="post">

<hr>
<p class="one">SIGN UP</p>

<div>

<table align="center" >

<tr>
<td>Email:</td>
<td><input type="email" name="Email" size="20"/></td>
</tr>
<tr>
<td>PASSWORD:</td>
<td><input type="password" name="password" size="20"/></td>
</tr>
<tr>
<td>

 <input type="submit" value=submit />

</td>
</tr>
<br>
<br>
<tr>
<td>
ALREADY A USER?
</td>
</tr>
<tr>
<td>
<a href="loginh.php"> login</a>


</td>
</tr>

</table>
</div>


</form>

</body>
</html>
