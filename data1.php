<?php
  $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = 'test123';
 $dbname= 'test1';
 
 $Username=$_REQUEST["username"];
 $username='"'.$Username.'"';
 
 $passwd=$_REQUEST["password"];
 $pass='"'.$passwd.'"';
 
 echo "username = ".$username."</br>";
 echo "pass = ".$pass."</br>";
 
 $conn=mysql_connect($dbhost,$dbuser,$dbpass);
 $db_found = mysql_select_db($dbname,$conn);
 if ($db_found) {
$result1 =mysql_query("SELECT * FROM signup WHERE 'email' = '$Username' AND 'password' = '$passwd'");
$neww=mysql_num_rows($result1);

if ($neww>0) 
    {	
        echo 'Username and Password Found'; 
    }
else
{
    echo 'Username or Password NOT Found';
 }
 }

// $retval=mysql_query($result,$conn);
 // if(! $retval ) {
 //die('Could not find data: ' . mysql_error());
 //}
$_SESSION['logged']='true';
 mysql_close($conn);
 //header('Location: home.php'); 
?>