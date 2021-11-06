<?php
if(isset($_POST["submit"])){
$name = htmlspecialchars($_POST['name']);
$email= htmlspecialchars($_POST['email']);
$company = htmlspecialchars($_POST['company_name']);
$applying_for = htmlspecialchars($_POST['position']);
$qualification = htmlspecialchars($_POST['qualification']);
$passout_year = htmlspecialchars($_POST['passout']);
$pdf = $_FILES['resume']['name'];
$pdf_tem_loc = $_FILES['resume']['tmp_name'];
$pdf_store = 'uploads/'.$pdf;
move_uploaded_file($pdf_tem_loc, $pdf_store);
require "config.php";
$sql = "INSERT INTO `applicant`(`name`, `email`,`company_name`, `applying_for`, `qualification`, `passout_year`,`resume`) VALUES ('$name','$email','$company','$applying_for','$qualification','$passout_year','$pdf')";

if($conn->query($sql)==true){
			// echo '<script type ="text/JavaScript">';  
			// echo 'alert("Your Application is submited successfully")';  
			// echo '</script>';
			echo "Your Application is submited successfully";
	header("location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  header("location:index.php");
}
$conn->close();
}

?>