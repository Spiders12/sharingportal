<?php
session_start();
$db=new MYSQLi("localhost","root","","interview");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$email=$_POST["email"];
	$password=$_POST["password"];
	
	$sql=" SElECT * FROM signup WHERE email='$email' AND password='$password'";
	$result=mysqli_query($db,$sql);
	if(mysqli_num_rows($result)==1)
	{
	
		$_SESSION['message']="You are now logged in";
		$_SESSION['name']=$name;
			
		header("location:/shearingportal/profile.php");
		}
		else{
			echo "<script>alert('Incorrect username/password');window.location='/form/';</script>";
		}
}
?>