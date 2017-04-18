<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body style=" background-repeat:no-repeat; background-size:100% 100%;background-image:url(pics/abg.jpg)";>
<?php 
if($_POST['search'])
{
	include('lib.php');
	$search=$_POST['search'];
	$data=mysql_query("SELECT * FROM `admin` WHERE `type` ='$search' " );
	
		echo "<table  class='table1' cellpadding='20px' >";

echo "<tr>";
	echo "<td style='color:#FFF;'>Product Id</td>";
	echo "<td style='color:#FFF;'>IMAGE</td>";
	echo "<td style='color:#FFF;'>PRICE</td>";
	echo "</tr>";
	
while($row=mysql_fetch_array($data)){
	
	echo "<tr>";
	echo "<td style='color:#55EDF4;'>".$row['product_id']."</td>";
	echo '<td><img src="uploads/'.$row['image'].'" height="250" width="400" /></td>';
	echo "<td style='color:#55EDF4;'>".$row['price']."</td>";
		echo '<td ><a style="color:#55EDF4;text-decoration:none" href="order.php?id='.$row['o_id'].'">Order</a></td>';
    echo "</tr>";

	
	}
	
echo "</table>";
	

}
?>
</body>
</html>