<?php
require "config.php";

if(isset($_POST["submit"])){
	$cname = htmlspecialchars($_POST['cname']);
	$pos =  htmlspecialchars($_POST['position']);
	$skill =  htmlspecialchars($_POST['skills']);
	$jdesc =  htmlspecialchars($_POST['jdesc']);
	$location =htmlspecialchars($_POST['location']);
	$ctc =  htmlspecialchars($_POST['ctc']);

	$sql = "INSERT INTO jobs(`cname`, `position`,`skills`, `jdesc`, `location`, `ctc`) VALUES ('$cname','$pos','$skill','$jdesc','$location', 'ctc')";
	if ($conn->query($sql) === TRUE) {
		 	echo '<script type ="text/JavaScript">';  
			echo 'alert("New record created successfully")';  
			echo '</script>';
			header("location:jobs.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  header("location = dashboard.php");
		}
}
$conn->close();
?>