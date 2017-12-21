<!DOCTYPE html>
<html>
<head>
<title>Share</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script type="text/javascript">
  var fixmeTop = $('.#fixme').offset().top;       // get initial position of the element

$(window).scroll(function() {                  // assign scroll event listener

    var currentScroll = $(window).scrollTop(); // get current position

    if (currentScroll >= fixmeTop) {           // apply position: fixed if you
        $('.#fixme').css({                      // scroll to that element or below it
            position: 'fixed',
            top: '0',
            left: '0'
        });
    } else {                                   // apply position: static
        $('.#fixme').css({                      // if you scroll above it
            position: 'static'
        });
    }

});</script>
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
	<div class="profilepic card">
		<img src="images7.jpg" class="profile">.
	</div>
	<div class="info">
	<h2><?php  
	echo "Vaibhav Raizada"; ?></h2></div>
  


  
  <div class="menu card" id="fixme" >
    <table style="width:100%;" >
      <tr class="active1 active12">
        <td >
          <a href="profile.php"><h3>Profile<i class="iconmenu fa fa-drivers-license"></i> </h3></a>
        </td>
      </tr>
      <tr class="active1">
        <td>
          <a href="#"><h3>Write Post<i class="iconmenu fa fa-plus-square"></i></h3></a>
        </td>
      </tr>
      <tr class="active1">
        <td>
          <a href="#"><h3>Your Posts<i class="iconmenu fa fa-file-text"></i></h3></a>
        </td>
      </tr>
      <tr class="active1">
        <td>
          <a href="#"><h3>About us<i class="iconmenu fa fa-group"></i></h3></a>
        </td>
      </tr>
      <tr class="active1">
        <td >
          <a href="#"><h3>Logout<i class="iconmenu fa fa-power-off"></i></h3></a>
        </td>
      </tr>

    </table>
  </div>
</div>
<div class="col-md-7 mainbar">
  <div class="textbox card"><textarea class="profilepost" placeholder="Write something about you........."></textarea></div>
	
</div>
<div class="col-md-2"></div>
</div>
</div>
</body>
</html>