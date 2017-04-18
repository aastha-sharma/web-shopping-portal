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
$Cardnum=$_POST['cnum'];
$cvv=$_POST['CVV'];
$productid=$_POST['proid'];
$price=$_POST['price'];


		
		$data=mysql_query("INSERT INTO `orders` (`Name`,`Card_Number`,`CVV`,`product_id`,`Price`) VALUES ('$Nam','$Cardnum','$cvv','$productid','$price')");


		if($data){
			echo "<h1> Thank u for placing order</h1>";
			echo" <a href='main.php'>Continue Shopping</a>";
			
			}
		

		}
	
	
	
else{
	
	
	
	header('location:test.php');
	
	
	
	
	}






?>
</body>
</html>