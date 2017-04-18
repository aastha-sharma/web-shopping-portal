<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body style=" background-repeat:no-repeat; background-size:100% 100%;background-image:url(pics/abg.jpg)";>
<?php
include('lib.php');

$id=$_GET['id'];
	$data1=mysql_query("SELECT * FROM `admin` WHERE `o_id` = '$id' " );
$data2=mysql_query("SELECT price FROM `admin` WHERE `o_id` = '$id'");
while($row=mysql_fetch_array($data1)){
	$p=$row['product_id'];
}
while($row=mysql_fetch_array($data2)){
	$q=$row['price'];
}
?>
<h1 style="color:#fff; margin-left:40%; margin-top:2%;">PAYMENT</h1>
<form  action="save.php" method="post" enctype="multipart/form-data"> 
<table style="margin-left:30%;" cellspacing="10px" cellpadding="10px">
<tbody>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px; color:#fff;">NAME:</p></td>
<td><input style="width:200px;; height:20px;" type="text" name="name"  /><br/>
</td>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px; color:#fff;">Card Number:</p></td>
<td><input style="width:200px;; height:20px;" type="number" name="cnum"  /><br/>
</td>
</tr>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px; color:#fff;">CVV:</p></td>
<td><input style="width:200px;; height:20px;" type="number" name="CVV"  /><br/>
</td>
</tr>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px; color:#fff;">Product Id:</p></td>
<td><input style="width:200px;; height:20px;" type="text" readonly name="proid" value=<?php echo $p;?> /><br/>
</td>
</tr>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px; color:#fff;">Amount:</p></td>
<td><input  style="width:200px;; height:20px;" type="number" readonly name="price"  value=  <?php echo $q;?> /><br/>
</td>
</tr>
<tr>
<td><input style=" height:30px; font-size:24px;" type="reset" value="RESET" /></td>
<td><input  style=" height:30px; font-size:24px;"type="submit" value="SUBMIT" name="submit" /></td>
</tr>
</tbody>
</table>
 <a  style=" text-decoration:none; font-family:Verdana, Geneva, sans-serif; font-size:26px; color:#B84143; margin-left:32%; margin-top:4%;" href="main.php">Return Back</a>;
</body>
</html>