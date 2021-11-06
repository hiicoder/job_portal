<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style type="text/css">

      .cover{
        background-image: url(img/write.jpg);
        background-size: cover;
        padding: 60px 0px 60px 0px;
      }
      .main_top{
      background-color:rgba(0, 0, 0, 0.3);
      padding: 50px;
      width: 100%;
      }

      .card{
          display: inline-block;
          padding: 20px;
          margin: 20px;
          background-color: #fff;
          box-shadow: 8px 8px 6px 8px #336669;
      }
      .content{
        display: grid;
        grid-template-columns: 3fr 3fr 3fr;
      }
    </style>
    <title>Career</title>
  </head>
  <body>
    <div class="cover">
<?php
session_start();
if(isset($_SESSION['name'])){
    echo "<div>";
    echo "<nav class='navbar navbar-expand-lg navbar-dark bg-primary 'style = 'position:sticky; width: 100%;'>";
  echo "<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav'aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>";
    echo "<span class='navbar-toggler-icon'></span></button>";
  echo "<button class='btn btn-dark ml-auto '><a class='text-light'href='logout.php'>LOGOUT</a></button>";
}
else{

  echo "<div>";
    echo "<nav class='navbar navbar-expand-lg navbar-light bg-primary 'style = 'position:sticky; width: 100%;'>";
  echo "<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav'aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>";
    echo "<span class='navbar-toggler-icon'></span></button>";
  echo "<button class='btn btn-dark ml-auto '><a class='text-light'href='login.php'>LOGIN / SIGNIN</a></button>";
}
?>
 </nav>
</div>  
<div class="main_top">
         <div class="container">
          <h1 class="display-3 text-white">JOB POINT</h1>
        
        <p class="lead text-white">Jobs that Match your skills</p>
        </div>
       
      </div>
      <nav class='navbar navbar-expand-lg navbar-light bg-primary 'style = 'position:sticky; height: 55px;" width: 100%;'>
    </div>
 
<div class="container mt-5">
   <h1 class="text-center">Latest Jobs</h1>
<hr>
<div class="content">
<?php
  require "config.php";
  $sql = "SELECT * FROM jobs";
 $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<div class='card'>";
    echo "<h3 class='text-center'>". $row["position"]."</h3>";
    echo "<h4 class='text-center'>". $row["cname"]."</h4>";
    echo "<p><b>Skill required </b>: ". $row["skills"]."</p>";
    echo "<p><b>Job Description </b>: ". $row["jdesc"]."</p>";
    echo "<p><b>Location </b>: " . $row["location"]."</p>";
    echo "<p><b>CTC </b>: " . $row['ctc']."</p>";
     if(isset($_SESSION['name'])){
       echo " <a class ='btn btn-primary'href='#' data-toggle='modal' data-target='#exampleModal'>Apply Now</a>";
     }
    else{
      echo " <a class ='btn btn-primary'href='login.php'>Apply Now</a>";
    }
    echo " </div>";

  }
} else {
  echo "0 results";
}
mysqli_close($conn);
?>
  </div>
 </div>     
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="applicant.php" method = "POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="Name">Name</label>
              <input type="text" class="form-control" id="Name" name = "name" >
           </div>
        <div class="form-group">
          <label for="Email">Email address</label>
          <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name = "email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
              <label for="Company Name">Company Name</label>
              <input type="text" class="form-control" id="company_name" name="company_name">
           </div>
         <div class="form-group">
              <label for="Position">Applying For</label>
              <input type="text" class="form-control" id="position" name="position">
           </div>
        <div class="form-group">
          <label for="Qualification">Qualification</label>
          <input type="text" class="form-control" id="qualification" name = "qualification">
        </div>
          <div class="form-group">
          <label for="Passout">Year Passout</label>
          <input type="date" class="form-control" id="passout" name = "passout">
        </div>
        <div class="form-group">
          <label for="Resume">Upload Resume</label>
          <input type="file" class="form-control" id="file" name="resume">
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" name = "submit" class="btn btn-primary">Apply</button>
      </div>
    </div>
  </div>
</div>




    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

   
  </body>
</html>
