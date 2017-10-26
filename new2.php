<?php
 session_start();
 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = 'test123';
 $dbname= 'test1';
 
 $Email=$_REQUEST["new_username"];
 $email='"'.$Email.'"';
 
 $conn=mysql_connect($dbhost,$dbuser,$dbpass);
   if(!$conn)
 {
 die('Could not connect: '.mysql_error());
 }

 mysql_select_db($dbname,$conn);

$sql = "SELECT * FROM signup WHERE email='$Email'";
$result = mysql_query($sql,$conn)or die(mysql_error($conn));
$count = mysql_num_rows($result);

if($count==0){
	
     echo "Your username is incorrect!";
}
else if($count>0){
	$_SESSION['email']=$Email;
    header('Location: recovery.php');
}
else{
	echo "Something is not working";
}

 mysql_close($conn); 
?>