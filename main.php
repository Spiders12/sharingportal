
<!DOCTYPE html>
<html>
<head>
	<!-- // in CSS  -->
	<link rel="stylesheet" type="text/css" href="login.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script> -->

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-info navbar-dark" style="background-color: red ">
    <div class="input-group">
      <span class="input-group-addon">@</span>




      <div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="background-color: #01607c">Sign-up</button>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="background-image: url(4.png);">
        <div class="modal-header">
        	<h2 style="color: white">sign up</h2>
          <button type="button" class="close" data-dismiss="modal">&times;</button><br />
        </div>
        <div class="modal-body">
          <!-- sign up form -->
          
         
<form class="form" action="signup.php" method="post">
      <div class="form-group">
      <input class="form-control" type="text" placeholder="Name" name="name" required />
      </div><br>
      <div>
      	<b style="color: white">Year:</b>
          <select  name="year">
          <option value="first">First</option>
          <option value="second">Second</option>
          <option value="third">Third</option>
          <option value="final">Final</option>
          </select>
          .....
          <b style="color: white">Sex:</b>
          <select  name="sex">
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
          </select>
      </div><br>
      <div class="form-group">
      <input class="form-control" type="email" placeholder="Email" name="email" required />
      </div><br>
      <div class="form-group">
      <input class="form-control" type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      </div><br>
      <div class="form-group">
      <input class="form-control" type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      </div><br>
      <div class="form-group">
      <input class="form-control" type="text" placeholder="college-name" name="collegename" required />
      </div><br>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary">
        </form>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>




    </div>    

</nav>	


<div class="bg1">

<!-- image box  -->
<div id="example2">
	<img src="01.jpg" alt="Mountain View" style="width:100%;">
<p style="background-color: white">Confused about the interview,don't worry we are  here for you.We will provide you senior support.</p>
</div>







<div class="signup">
  <h2>Login</h2>
  <form method="post" action="login.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember">  -Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>










<div class="adjust">
	.
</div>

</div>








	<div class="footer">
		<h3>XYZ<span class="glyphicon glyphicon-copyright-mark"></span>All rights reserved.</h3><hr>

<div class="row">
  <div class="col-sm-4">
     <h4>Email:</h4>
     vaibhavraizada.28398@gmail.com<br>
     shekhark221@gmail.com    
  </div>
  <div class="col-sm-4">
    <h4>Mobile:</h4>
    7753846243<br>
    7388341343
  </div>
  <div class="col-sm-4">
    <h4>Contact us on facebook:</h4>
    <a href="https://www.facebook.com/vaibhav.raizada.18" target="_">Vaibhav Raizada</a><br>
    <a href="https://www.facebook.com/profile.php?id=100006482882966" target="_">Shekhar Kumar</a>
      
  </div>
</div><hr>
</div>	
  		<!-- <p>Footer</p> -->





</body>
</html>