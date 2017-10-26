<?php
session_start();
  $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = 'test123';
 $dbname= 'test1';
 $logged=$_SESSION['logged'];
 if($logged==false){
    echo '<script language="javascript">';
	echo 'alert("Not logged in")';
	echo '</script>';
	}
else {
 $modelno=$_REQUEST['cart'];
 $modelNo='"'.$modelno.'"';
   $conn=mysql_connect($dbhost,$dbuser,$dbpass);
   if(!$conn)
 {
 die('Could not connect: '.mysql_error());
 echo 'connected';
 }
  mysql_select_db($dbname,$conn);
   $sql = 'INSERT INTO cart (model_number)'. 
 'VALUES('.$modelNo.')';
 echo'value inserted';
 $retval=mysql_query($sql,$conn);
  if(! $retval ) {
 die('Could not enter data: ' . mysql_error());
 }

 mysql_close($conn);
 header('Location: cart.html'); 
}
?>