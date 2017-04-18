<!doctype html>
<html>
<head>
<link href="stylesheet.css" type="text/css" rel="stylesheet"/>
<meta charset="utf-8">
<title>Untitled Document</title>
<script type="text/javascript" src="jquery-3.0.0.js"></script>
<script type="text/javascript" src="script1.js"></script>
</head>

<body>
<div class="main">
<div class="logo">
<img src="pics/logo3.png"/>
</div>
<div class="slider">
<div class="gallery">
<div class="play"></div>
<div class="galleryi">
<img src="pics/img1.jpg"/>
<img src="pics/img2.jpg"/>
<img src="pics/img3.jpg"/>
<img src="pics/img4.jpg"/>
<img src="pics/img5.jpg"/>
<img src="pics/img6.jpg"/>
<img src="pics/img7.jpg"/>
<img src="pics/img8.jpg"/>
<img src="pics/img9.jpg"/>
<img src="pics/img10.jpg"/>
</div>
</div>
</div>
<div class="content">
<div class="c_left">
<h1 style="margin-top:150px; margin-left:60px; color:#000;">SELECT CATEGORIES</h1>
<form action="products.php" method="post" enctype="multipart/form-data">
<?php
include('lib.php');
$data=mysql_query("SELECT * FROM `addcategory");
echo"<select  name='search' style='width:200px; margin-left:16%; margin-top:4%; height:40px;font-size:24px;'>";
while($row=mysql_fetch_array($data)){


 echo '<option value="'.$row['category'].'">'.$row['category'].'</option>';

}
echo"</select>";

echo"<br/>";

?>>
<input type="submit" value="SEARCH" style="width:150px; height:30px;margin-top:20px; margin-left:50px;font-size:24px;" />
</form>
<h1 style="margin-top:50px; margin-left:60px; color:#000;">SORT BY PRICE</h1><br/>
<form action="sort.php" method="post" enctype="multipart/form-data">
<p style="font-family:Verdana, Geneva, sans-serif; margin-left:60px; color:#000; font-size:24px;">FROM
<input style="width:150px;  height:20px;"type="number" name="from" /></p><br/>
<p style="font-family:Verdana, Geneva, sans-serif; color:#000; margin-left:60px; font-size:24px;">TO&nbsp;&nbsp;&nbsp;&nbsp;
<input style="width:150px; height:20px;"type="number" name="to" /></p>
<input type="submit" value="SEARCH" style="width:150px; margin-left:60px; height:30px;margin-top:20px; margin-left:50px;font-size:24px;"  name="price"/>
</form>
<form action="index.php">
<input type="submit"  name="submit" style="margin-left:110px; width:150px;  height:32px; font-size:24px; margin-top:80px" value="Logout" name="logout" />
</form>
</div>
<div class="c_right">
<div class="pic">
<img src="pics/img11.jpg"/>
<img src="pics/img12.jpg"/>
<img src="pics/img13.jpg"/>
<img src="pics/img14.jpg"/>
<img src="pics/img15.jpg"/>
<img src="pics/img16.jpg"/>
</div>
</div>
</div>
</div>
</body>
</html>