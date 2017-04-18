<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
if($_POST['submit']){
	
include('lib.php');

$user=$_POST['username'];

$pass=$_POST['password'];

	$data=mysql_query("SELECT * FROM `customers` WHERE `Username`='$user'");	
	
	$row=mysql_fetch_array($data);
	$num_rows=mysql_num_rows($data);
	
	if($num_rows>0){
		
		
		if($row['Password']==$pass){
			
			
			echo "Welcome user";
			
			$_SESSION['id']=$row['id'];
			$_SESSION['user']=$row['Username'];
			
			header('location:main.php');
			
			
			}
			else{
				
				
				echo "Incorrect pass";
				
				
				
				}
		

		
		}
	else{
		
		
		echo "Username doesnot exist";
		
		
		
		}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	}
else{
	
	
	
	header('location:test.php');
	
	
	
	}	
	









?>
</body>
</html>