 <?php 
session_start();
if(isset($_SESSION['name'])){
 include'header.php';
include 'sidenav.php';
?>
<!-- Page content -->
<div class="content" style="padding-top:65px" id="main">
 <p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
   Post Job 
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    <form action="postjobs.php" method="POST">
            <div class="form-group">
              <label for="exampleInputC_name">Company Name</label>
              <input type="text" class="form-control" id="name" name="cname">
           </div>
        <div class="form-group">
          <label for="exampleInputPosition">Position</label>
          <input type="text" class="form-control" id="position" name="position">
        </div>
          <div class="form-group">
          <label for="exampleInputSkills">Skills</label>
          <input type="text" class="form-control" id="skills" name="skills">
        </div>
         <div class="form-group">
              <label for="Job_desc">Job Description</label>
              <textarea  class="form-control" id="job_desc" name="jdesc"></textarea>
           </div>
               <div class="form-group">
          <label for="exampleInputLocation">Location</label>
          <input type="text" class="form-control" id="location" name="location">
        </div>
        <div class="form-group">
          <label for="CTC">CTC</label>
          <input type="text" class="form-control" id="CTC" name="ctc">
        </div>
       
        <button type="submit" class="btn btn-primary" name="submit">Submit</button><br>
       
      </form>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">Skills</th>
      <th scope="col">Description</th>
      <th scope="col">Location</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>



<?php
  require "config.php";
  $sql = "SELECT * FROM jobs";
 $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo"<tr>";
    echo "<th scope='row'>" .$row["id"]."</th>";
    echo "<td>".$row["cname"]."</td>";
    echo "<td>".$row["position"]."</td>";
     echo "<td>".$row["skills"]."</td>";
    echo "<td>".$row["jdesc"]."</td>";
    echo "<td>".$row["location"]."</td>";
    echo "<td>".$row['ctc']."</td>";
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
  header("refresh:2;location:admin_login.php");
}
?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>
