<?php
session_start();
  $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = 'test123';
 $dbname= 'test1';
 
 $Email=$_REQUEST["Email"];
 $email='"'.$Email.'"';
 
 $passwd=$_REQUEST["password"];
 $pass='"'.$passwd.'"';
 
 $conn=mysql_connect($dbhost,$dbuser,$dbpass);
   if(!$conn)
 {
 die('Could not connect: '.mysql_error());
 }
  mysql_select_db($dbname,$conn);
   $sql = 'INSERT INTO signup (email,password)'. 
 'VALUES('.$email.','.$pass.')';
 $retval=mysql_query($sql,$conn);
  if(! $retval ) {
 die('Could not enter data: ' . mysql_error());
 }
$_SESSION['logged']='true';
 mysql_close($conn);
 header('Location: home.php'); 
?>