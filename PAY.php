<html>
<body background="pro.jpeg">
<center>
<img  src="logo.png"  style="width:80px;height:80px;">
<img  src="wename.png"   style="width:250px;height:90px;">
</center>
<br>

<h1>ENTER YOUR ADDRESS </h1><br>
<form method="post" action="buynow.php" >
<textarea rows="5" cols="50" placeholder="Enter your full address...." name="address">
</textarea>


<h1>PAYMENT MODE</h1>
<table>
<tr>
<td>
<input type="radio" name="r1" value="1" checked></td><td> Credit</td>
</tr>
<tr>
<td>
<input type="radio" name="r1" value="2"></td> <td>Debit</td>
</tr>
<tr>
<td>
<input type="radio" name="r1" value="3"></td> <td>COD*</td>
</tr>
</table>
<p>*If your selected option is COD click on submit directly.

</p>
<h1>ENTER CARD DETAILS:</h1>
<table>
<tr>
<td>
Card Number:</td><td> <input type="number" name="cno" /></td>
</tr>
<tr>
<td>
CVV:</td><td><input type="password" name="no" maxlength=3/></td>
</tr>
<tr>
<td>
Expiry Date: </td><td><input type="text" name="exp" placeholder="MM/YY"  /></td>
</tr>
</table>
<br>

<h1>FEEDBACK</h1><br>
<textarea rows="5" cols="50" placeholder="Enter your feedback...."name="feedback">
</textarea><br><br>
<input type="submit" name="subject"  value="submit"> 

</form>
</body>
</html>
