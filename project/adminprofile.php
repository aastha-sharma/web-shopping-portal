<!doctype html>
<html>
<head>
<link href="stylesheet3.css" type="text/css" rel="stylesheet"/>
<meta charset="utf-8">
<title>Untitled Document</title>
<script type="text/javascript">
function myf()
{
	var x=document.forms['myform']['pid'].value;
	
	if(x==""||x==null)
	{
		alert("Please enter product id");
		
		return false;
	}
	var y=document.forms['myform']['type'].value;
	
	if(y==""||y==null)
	{
		alert("Please enter product type");
		
		return false;
	}
	var z=document.forms['myform']['price'].value;
	
	if(z==""||z==null)
	{
		alert("Please enter price");
		
		return false;
	}
	var p=document.forms['myform']['doc'].value;
	
	if(p==""||p==null)
	{
		alert("Please enter product image");
		
		return false;
	}
}
</script>
<script type="text/javascript" src="jquery-3.0.0.js"></script>
<script type="text/javascript" src="script2.js"></script>
</head>

<body>
<div class="curtain_left"></div>
<div class="curtain_right"></div>
<div class="cross"></div>
<div class="main">
<div class="header">
<h3 style="color:#fff;float:right; margin-top:20px;margin-right:30px;">WELCOME ADMIN</h3>
<a style="font-family:Verdana, Geneva, sans-serif; font-size:24px; float:right; color:#fff; margin-top:50px; ;margin-right:-120px; text-decoration:none;" href="alogout.php">Logout</a>;
<div class="nav">
<ul>
<li id="home"><a  style="font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font:#fff;font-size:22px;" href="#">Home</a></li>
<li id="products"><a  style="font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font:#fff;font-size:22px;" href="#">Add Products</a></li>
<li id="categories"><a  style="font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font:#fff;font-size:22px;" href="#">Add Categories</a></li>
<li id="profile"><a  style="font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font:#fff;font-size:22px;" href="#">Profile</a></li>
</ul>
</div>
</div>
<div class="home">
<h1 style="margin-left:42%;  padding:20px;">Orders</h1>
<?php 
echo"<div class='box'>";
include('lib.php');
$data=mysql_query("SELECT * FROM `orders` WHERE 1");
	
		echo "<table  ' cellpadding='30px' style='font-size:24px;margin-left:19%; ' cellspacing='50px' border='2px'   >"; 

echo "<tr>";
	echo "<td style='color:#FFF;'>Customer Name</td>";
	echo "<td style='color:#FFF;'>Card Number</td>";
	echo "<td style='color:#FFF;'>CVV</td>";
	echo "<td style='color:#FFF;'>Product Id</td>";
	echo "<td style='color:#FFF;'>Price</td>";
	echo "</tr>";
	
while($row=mysql_fetch_array($data)){
	
	echo "<tr>";
	echo "<td style='color:#fff;'>".$row['Name']."</td>";
	echo "<td style='color:#fff;'>".$row['Card_Number']."</td>";
	echo "<td style='color:#fff;'>".$row['CVV']."</td>";
	echo "<td style='color:#fff;'>".$row['product_id']."</td>";
	echo "<td style='color:#fff;'>".$row['Price']."</td>";
    echo "</tr>";

	
	}
	
echo "</table>";
	
echo"</div>";

?>
</div>
<div class="products">
<h1 style="margin-left:40%; margin-top:100px; padding:20px;">Enter Product</h1>
<form name="myform" action="addproducts.php" method="post" enctype="multipart/form-data" onsubmit="return myf()"> 
<table cellspacing="25px" cellpadding="15px" style="margin-left:32%;">
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px; color:#fff;">Product Id:</p></td>
<td><input style="width:200px;; height:20px;"type="text" name="pid" placeholder="Product Id" /><br/>
</td>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px; color:#fff;">Type:</p></td>
<?php
$data=mysql_query("SELECT * FROM `addcategory");
echo"<td><select  name='type' style='width:200px; height:25px;font-size:20px;'>";
while($row=mysql_fetch_array($data)){


 echo '<option value="'.$row['category'].'">'.$row['category'].'</option>';

}
echo"</select>";

echo"<br/>";

?>
</td>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px; color:#fff;">Price:</p></td>
<td><input style="width:200px;; height:20px;"type="text" name="price" placeholder="Enter Price" /><br/>
</td>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px; color:#fff;">Add Image:</p></td>
<td><input type="file" name="doc" /><br/>
</td>
</tr>
<tr>
<td><input type="reset" value="RESET"  /></td>
<td><input type="submit" value="SUBMIT" name="submit" /></td>
</tr>
</table>
</form>
</div>
<div class="categories">
<h1 style="margin-left:40%;  padding:20px;">Add Category</h1>
<form action="category.php" method="post" enctype="multipart/form-data">
<table style="margin-left:32%;" cellspacing="25px" cellpadding="5px">
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">Add Category:</p></td>
<td><input style="width:200px;; height:20px;"type="text" name="category" placeholder="Enter Product Category" required /><br/>
</td>
</tr>
<tr>
<td><input style="margin-left:150%; margin-top:9%; height:30px;font-size:24px;" type="submit" value="SUBMIT"  name="submit"/></td>
</tr>
</table>
</form>
</div>
<div class="profile">
<h1 style="margin-left:40%;  padding:20px;">Update Profile</h1>
<form action="ainfo.php" method="post" enctype="multipart/form-data">
<table style="margin-left:32%;" cellspacing="25px" cellpadding="5px">
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">NAME:</p></td>
<td><input style="width:200px;; height:20px;"type="text" name="name" placeholder="Enter Name" required /><br/>
</td>
</tr>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">AGE:</p></td>
<td><input style="width:200px;; height:20px;"type="number" name="age" placeholder="Enter Age" required /><br/>
</td>
</tr>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">EMAIL:</p></td>
<td><input style="width:200px;; height:20px;"type="email" name="email" placeholder="Enter Email" required /><br/>
</td>
</tr>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">PASSWORD:</p></td>
<td><input style="width:200px;; height:20px;"type="password" name="pass" placeholder="enter your password" required/><br/>
</td>
</tr>
<tr>
<td><input type="reset" value="RESET" /></td>
<td><input type="submit" value="SUBMIT"  name="submit"/></td>
</tr>

</div>
</div>
</body>
</html>