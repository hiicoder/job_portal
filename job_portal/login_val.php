<?php
require "config.php";
//session_start();
echo $msg = "";
if(isset($_POST['submit']))
{
	
	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars(md5($_POST['password']));
	$sql = "SELECT * FROM users WHERE Email = '$email' AND Password = '$password'";
	$result = mysqli_query($conn,$sql);
	 if (mysqli_affected_rows($conn) > 0) {
	$r = mysqli_fetch_array($result);
       {
      session_start();
	 	 $t = $_SESSION['name'] = $r['Name'];
  	header("location:index.php?name='$t'");
  }
  }
else {
  $msg = "Emailid or Password doesnot match please retry!";
  header("location:login.php");
}
}
$conn->close();

?>