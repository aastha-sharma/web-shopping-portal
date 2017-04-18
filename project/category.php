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
$category=$_POST['category'];


	
	
		$data=mysql_query("INSERT INTO `addcategory` (`category`) VALUES ('$category')");

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