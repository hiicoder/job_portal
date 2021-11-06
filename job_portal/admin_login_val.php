<?php
require "config.php";
if(isset($_POST['submit']))
{
	
	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);
	$sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
	$result = mysqli_query($conn,$sql);
	 if (mysqli_affected_rows($conn) > 0) {
	  $r = mysqli_fetch_array($result);
	  session_start();
	 	$_SESSION['name'] = $r['username'];
  	
  	header("location:dashboard.php");
  }
else {
  $msg = "Email id or Password doesnot match please retry!";
  header("location:admin_login.php");
}
}
$conn->close();

?>