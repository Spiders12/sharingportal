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
<img src="background.jpg" class="toppic"></div>
<div class="wrapper cf">
  
  <div class="sidebar">
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

     <h3>Sidebar</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab maxime fugiat perspiciatis.</p>
    </div>
  
  <div class="content">
    <div style="width: 100%;background-color: gray;float:left;padding-left: 10px;" id="navbarr">
          <h4><i class="fa fa-user-circle" style="font-size:40px;"></i>Shekhar kumar</h4><hr>
          <p>r sit amet, consectetur adipisicing elit. Atque vero, maxime nulla dolore iure voluptatem itaque. Nisi commodi ut consectetur beatae mollitia. Ab, maxime quisquam ipsa, quibusdam itaque et eius.</p>  
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, molestiae.</p> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisic</p><hr>
    <i onclick="myFunction(this)" class="fa fa-thumbs-up" style="font-size:40px;"></i>

    <script>
      function myFunction(x) {
      x.classList.toggle("fa-thumbs-down");
    }
    </script>    
     </div>
   <h1>Scroll Down!</h1>
<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>  
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque vero, maxime nulla dolore iure voluptatem itaque. Nisi commodi ut consectetur beatae mollitia. Ab, maxime quisquam ipsa, quibusdam itaque et eius.</p>  
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, molestiae.</p> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus suscipit blanditiis delectus quos, soluta fuga voluptatem, facere inventore neque voluptate quaerat unde laboriosam molestiae repellat, sapiente accusamus cumque! Ipsam, illo!</p> 
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>  
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque vero, maxime nulla dolore iure voluptatem itaque. Nisi commodi ut consectetur beatae mollitia. Ab, maxime quisquam ipsa, quibusdam itaque et eius.</p>  
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, molestiae.</p> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus suscipit blanditiis delectus quos, soluta fuga voluptatem, facere inventore neque voluptate quaerat unde laboriosam molestiae repellat, sapiente accusamus cumque! Ipsam, illo!</p> 
     
     <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>  
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque vero, maxime nulla dolore iure voluptatem itaque. Nisi commodi ut consectetur beatae mollitia. Ab, maxime quisquam ipsa, quibusdam itaque et eius.</p>  
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, molestiae.</p> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus suscipit blanditiis delectus quos, soluta fuga voluptatem, facere inventore neque voluptate quaerat unde laboriosam molestiae repellat, sapiente accusamus cumque! Ipsam, illo!</p> 
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>  
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque vero, maxime nulla dolore iure voluptatem itaque. Nisi commodi ut consectetur beatae mollitia. Ab, maxime quisquam ipsa, quibusdam itaque et eius.</p>  
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, molestiae.</p> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus suscipit blanditiis delectus quos, soluta fuga voluptatem, facere inventore neque voluptate quaerat unde laboriosam molestiae repellat, sapiente accusamus cumque! Ipsam, illo!</p> 
     <div style="width: 200px;height: 200px;background-color: red;float:left;" id="navbarr"></div>
    
  </div>
  
</div>
</body>
</html>