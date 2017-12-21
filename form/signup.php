<?php
session_start();
$db=new MYSQLi("localhost","root","","interview");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=$_POST["name"];
	$year=$_POST["year"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$confirmpassword=$_POST["confirmpassword"];
	echo $name.$password;



	$ins_query="INSERT INTO signup (name,year,email,password) VALUES ('$name','$year','$email','$password')";
mysqli_query($db,$ins_query);
echo "<script>alert('Successfully signed up');window.location='/form/';</script>";
}
?>
