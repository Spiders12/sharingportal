<?php 
$a="fggf";
?>
<!DOCTYPE html>
<html>
<head>
<title>Share</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand active" href="index.php">SHARE</a>
    </div>
    <div class="colllapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li class="active" ><a href="profile.php">Profile</a></li>
      <li ><a href="aboutus.php" >About us</a></li>
      <li ><a href="#footer">Contact us</a></li>
    </ul>
  </div>
</div>
</nav>
<div class="content">
	<div class="topbanner">
		<img src="background.jpg" class="toppic"></div>
<div class="row">
<div class="col-md-3 sidebar">
	<div class="profilepic w3-card">
		<img src="images7.jpg" class="img-circle profile">
	</div>
	<h1><?php echo"$a"; ?></h1>
</div>

<div class="col-md-9 mainbar">
</div>
</div>
</div>
</body>
</html>