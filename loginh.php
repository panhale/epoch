<html>
<head>
<script>
function validateform1()
{ 
var username=document.myform1.username.value;
var password=document.myform1.password.value;
if(username==null || username=="")
 { 
   alert("username cant be blank");
   return false;
 }
}
</script>
<style>


p.one{
color:blue;
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
<form name="myform1"  onsubmit="return validateform1();" method="post" action="new1.php">

<hr>
<p class="one">LOG IN</p>
<div>
<table align="center" >

<tr>
<td>Username:</td>
<td><input type="email" name="username"   size="20"/></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password"  size="20"/></td>
</tr>
<tr>
<td>
<a href="pwd.php" >Forgot password?</a>
</td>
</tr>
<tr>
<td> <input type="submit" value="submit" method="post">
</td>
</tr>
</table>
</div>
</form>
</body>
</html>
