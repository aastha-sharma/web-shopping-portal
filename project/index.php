<!doctype html>
<html>
<head>
<link href="stylesheet1.css" type="text/css" rel="stylesheet"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="jquery-3.0.0.js"></script>
<script type="text/javascript" src="script.js"></script>
</head>

<body>
<div class="logo">
<img src="pics/logo3.png"/>
</div>
<div class="main">
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
<div class="left"></div>
<div class="right">
<h1 style="margin-left:210px">Login</h1>
<form action="login.php" method="post" enctype="multipart/form-data">
<br/>
<label style="margin-left:210px">User Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" name="username" placeholder="username"/>
<br/>
<br/>
<label style="margin-left:210px">Password&nbsp;&nbsp;</label>
<input type="password" name="password" placeholder="password" />
<br/><br/>
<input type="submit"  name="submit" style="margin-left:285px;" value="Login" name="login" />
<p style="margin-left:285px">New User?<a  style="font:#200874;"href="forms.php">Register Here</p>
</div>
</div>
</div>

</body>
</html>