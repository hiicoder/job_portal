<?php 
session_start();
if(isset($_SESSION['name'])){
include 'header.php';
include 'sidenav.php';
?>
<!-- Page content -->
<div class="content" style="padding-top:65px" id="main">
 

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Reg_date</th>
      <th scope="col">Delete User</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
  require "config.php";
  $sql = "SELECT * FROM users";
 $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo"<tr>";
    echo "<th scope='row'>" .$row["id"]."</th>";
    echo "<td>".$row["Name"]."</td>";
    echo "<td>".$row["Email"]."</td>";
     echo "<td>".$row["Phone"]."</td>";
     echo "<td>".$row["Reg_Date"]."</td>";
     echo "<td><a href=''>Delete</a></td>";
    
    echo"</tr>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>
  </tbody>
</table>

</div>
</div>

<?php
}
else{
  header("location:admin_login.php");
}
?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>