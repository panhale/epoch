<?php
session_start();
  $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = 'test123';
 $dbname= 'test1';
 $add=$_REQUEST['address'];
 $address='"'.$add.'"';
 
 $pay=$_REQUEST['r1'];
 if($pay==1)
 {
	 $payment="Credit Card";
 }
 else if($pay==2)
 {
	 $payment="Debit Card";
 }
 else
 {
	 $payment="COD";
 }
 
 $payment1='"'.$payment.'"';
  $cardn=$_REQUEST['cno'];
 $cardno='"'.$cardn.'"';
 
 $cvno=$_REQUEST['no'];
 $cvv='"'.$cvno.'"';
 
  $expdt=$_REQUEST['exp'];
 $expirydate='"'.$expdt.'"';
 
  
 
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
   $sql = 'INSERT INTO buynow( address,cardno,cvv,expirydate,payment)'. 
 'VALUES('.$address.','.$cardno.','.$cvv.','.$expirydate.','.$payment1.')';
 $retval=mysql_query($sql,$conn);
  if(! $retval ) {
 die('Could not enter data: ' . mysql_error());
 }

 mysql_close($conn);
 header('Location: PAY_SU.php'); 
}
?>