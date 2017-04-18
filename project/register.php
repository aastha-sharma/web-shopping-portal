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
$User=$_POST['username'];
$Gen=$_POST['gender'];
$Password=$_POST['pass'];
$Date=$_POST['dob'];
$City=$_POST['city'];
$Address=$_POST['add'];
$data=mysql_query("SELECT * FROM `customers` WHERE `Username`='$User'");	
	
		$row=mysql_fetch_array($data);
	$num_rows=mysql_num_rows($data);
	
	if($num_rows>0){
		echo "User Already Exist";
		}
	else{
		$data=mysql_query("INSERT INTO `customers` (`Name`,`Username`,`Gender`,`Password`,`Dob`,`City`,`Address`) VALUES ('$Nam','$User','$Gen','$Password','$Date','$City','$Address')");

		if($data){
			echo " Thank u for registering Please login to continue";
			
			}
		

		}
	
	
	
	}
else{
	
	
	
	header('location:test.php');
	
	
	
	
	}






?>
</body>
</html>