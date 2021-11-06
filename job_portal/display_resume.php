 <?php
  require "config.php";
  $id = htmlspecialchars($_GET['id']);
  $sql = "SELECT resume FROM applicant WHERE id = '$id'";
 $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_array($result)) {
 ?>
<embed src="uploads/<?php echo $row['resume']?>" type="application/pdf" width="100%" height="600px" />
 <?php 
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>