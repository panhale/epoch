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
 $conn=mysql_connect($dbhost,$dbuser,$dbpass);
   if(!$conn)
 {
 die('Could not connect: '.mysql_error());
 }
  mysql_select_db($dbname,$conn);
  mysql_query('TRUNCATE TABLE cart;');
  $_SESSION['logged']=false;
  
  mysql_close($conn);
 header('Location: logoutf.php');
} 
?>


