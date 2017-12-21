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
  $(function(){ /* to make sure the script runs after page load */

  $('.post').each(function(event){ /* select all divs with the item class */
  
    var max_length = 150; /* set the max content length before a read more link will be added */
    
    if($(this).html().length > max_length){ /* check for content length */
      
      var short_content   = $(this).html().substr(0,max_length); /* split the content in two parts */
      var long_content  = $(this).html().substr(max_length);
      
      $(this).html(short_content+
             '<a href="#" class="read_more"><br/>Read More</a>'+
             '<span class="more_text" style="display:none;">'+long_content+'</span>'); /* Alter the html to allow the read more functionality */
             
      $(this).find('a.read_more').click(function(event){ /* find the a.read_more element within the new html and bind the following code to it */
 
        event.preventDefault(); /* prevent the a from changing the url */
        $(this).hide(); /* hide the read more button */
        $(this).parents('.post').find('.more_text').show(); /* show the .more_text span */
     
      });
      
    }
    
  });
 
 
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
	  <?php 
    $i=10;
    while($i!=0){
      echo "<div class='post card'><p>This is sample text.This is sample text.This is sample text.This is sample text.This is sample text.
      This is sample text.This is sample text.This is sample text.This is sample text.This is sample text.This is sample text.This is sample text.
      This is sample text.This is sample text.This is sample text.This is sample text.This is sample text.This is sample text.</p>
      <p>This is sample text.This is sample text.This is sample text.This is sample text.This is sample text.This is sample text.This is sample text.
      This is sample text.This is sample text.This is sample text.This is sample text.This is sample text.This is sample text.This is sample text.
      This is sample text.This is sample text.This is sample text.This is sample text.This is sample text.This is sample text.This is sample text.
      This is sample text.This is sample text.This is sample text.This is sample text.This is sample text.This is sample text.This is sample text.</p></div>";
      $i--;
    } ?>
</div>
<div class="col-md-2"></div>
</div>
</div>
</body>
</html>