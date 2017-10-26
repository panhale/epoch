<html>
<head>
<script>
function validateform2()
{ 
var PASSWORD1=document.myform2.new_password.value;
var PASSWORD2=document.myform2.retype_password.value;
if(PASSWORD1.length<6 && PASSWORD2.length<6)
 { 
   alert("Password should be of 6 characters");
   return false;

	else if(PASSWORD1!=PASSWORD2)
        {  	 alert("Your password does not match.");
 	        return false;
        }
 }

else
	{ alert("You have changed Password successfully");
	   return true;
	}
}
</script>
<style>
div {
    width: 400px;
    border: 10px solid black;
    padding: 25px;
    margin-left:11cm;
    margin-right:2cm;
    margin-top:6cm;
    margin-bottom:1cm;
}
</style>
</head>
<body background="pro.jpeg">
<center>
<img  src="logo.png"  style="width:80px;height:80px;">
<img  src="wename.png"   style="width:250px;height:90px;">
</center>
<form name="myform2"  onsubmit="return validateform2()" method="post" action="new2.php">
<div>
<table align="center" >
<tr>
<td><h3><i>Recovery</i></h3></td>
</tr>
<tr>
<td> Enter username:</td>
<td><input type="text" name= "new_username"size="20"/></td>
</tr>
<tr>
<td>
<input type="submit" value="OK"  />
</td>
</tr>
</table>
</div>
</form>
</body>
</html>
