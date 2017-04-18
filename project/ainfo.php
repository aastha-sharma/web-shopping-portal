<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if($_POST['submit']){
include('lib.php');
$Nam=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$password=$_POST['pass'];

		$data=mysql_query("UPDATE `adminlogin` SET `Name`='$Nam',`Age`='$age',`Email`='$email',`password`='$password' WHERE `Username`='admin'");

if($data){
	
	
	echo "One row updated";
	
	
	
	}

		
		
		
		
		}
	
	
	
	
else{
	
	
	
	header('location:test.php');
	
	
	
	
	}






?>
</body>
</html>