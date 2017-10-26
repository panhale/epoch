 <?php
 session_start();
 $recover=$_REQUEST['recovery'];
 
 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = 'test123';
 $dbname= 'test1';
 
 $email=$_SESSION['email'];
 
 $conn=mysql_connect($dbhost,$dbuser,$dbpass);
   if(!$conn)
 {
 die('Could not connect: '.mysql_error());
 }
  mysql_select_db($dbname,$conn);
   $sql = "UPDATE signup SET password='$recover' WHERE email='$email'";
 $retval=mysql_query($sql,$conn);
  if(! $retval ) {
 die('Could not update data: ' . mysql_error());
 }

 mysql_close($conn);
 header('Location: loginh.php'); 
?>

