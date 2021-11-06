<?php
require"config.php";

if(isset($_POST['submit']))
{
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$phone = htmlspecialchars($_POST['phone']);
	$password = htmlspecialchars(md5($_POST['password']));
	$sql = "INSERT INTO `users`(`Name`, `Email`, `Phone`, `Password`) VALUES ('$name','$email','$phone','$password')";
	if ($conn->query($sql) === TRUE) {
		 // 	echo '<script type ="text/JavaScript">';  
			// echo 'alert("New record created successfully")';  
			// echo '</script>';
			header("location:login.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  header("location = signup.php");
		}
}
$conn->close();

?>