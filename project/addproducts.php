<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
if($_POST['submit']){
include('lib.php');
$id=$_POST['pid'];
$ptype=$_POST['type'];
$productprice=$_POST['price'];
$image=$_FILES['doc']['name'];


move_uploaded_file($_FILES['doc']['tmp_name'],"uploads/".$image);
	
	
		$data=mysql_query("INSERT INTO `admin` (`product_id`,`type`,`image`,`price`) VALUES ('$id','$ptype','$image','$productprice')");

		if($data){
	
	
	echo "one row inserted";
	
	
	
	}



	
		
	
	}
else{
	
	
	
	header('location:test.php');
	
	
	
	
	}






?>
</body>
</html>