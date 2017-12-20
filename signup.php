<?php
session_start();
$db=new MYSQLi("localhost","root","","interview");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=$_POST["name"];
	$year=$_POST["year"];
	$sex=$_POST["sex"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$confirmpassword=$_POST["confirmpassword"];
	$collegename=$_POST["collegename"];
	echo $name.$password;



	$ins_query="INSERT INTO signup (name,year,sex,email,password,collegename) VALUES ('$name','$year','$sex','$email','$password','$collegename')";
mysqli_query($db,$ins_query);
echo "<script>alert('Successfully signed up');window.location='login.php';</script>";
}
?>
