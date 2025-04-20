<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','registration');

// get the post records
$txtfname = $_POST['txtfname'];
$txtmname = $_POST['mname'];
$txtlname = $_POST['lname'];
$txtpwd = $_POST['txtpwd'];

// database insert SQL code
$sql = "INSERT INTO `registration` (`Id`, `fname`, `mname`, `lname`, `pwd`) VALUES ('0', '$txtfname', '$txtmname', '$txtlname', '$txtpwd')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted <br> <br>";
	
}
$sql = 'SELECT * FROM registration';
   
   $retval = mysqli_query($con, $sql);
   
   
   
   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
      echo "EMP ID :{$row['id']}  <br> ".
         "EMP First NAME : {$row['fname']} <br> ".
         "EMP middle name : {$row['mname']} <br> ".
		 "EMP Last name : {$row['lname']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
  
?>