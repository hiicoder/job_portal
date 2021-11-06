<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style type="text/css">
      body{
        background-image: url("img/register.jpg");
        background-size: cover;
      }
      form{
          margin: 3em 5em 3em 35em;

          padding: 20px;
          background-color: #fff;
          box-shadow: 10px 10px 8px 10px #236548;
      }
    </style>
 
    <title>Register</title>
  </head>
  <body>
    <div class="container">
          <form action="register.php" method = "POST">
             <h3 class="mb-2">Register Here</h3>
            <div class="form-group">
              <label for="Name">Full Name</label>
              <input type="text" class="form-control" id="Name" name = "name" >
           </div>
        <div class="form-group">
          <label for="Email">Email address</label>
          <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name = "email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
         <div class="form-group">
              <label for="Number">Contact Number</label>
              <input type="number" class="form-control" id="Number" name="phone">
           </div>
        <div class="form-group">
          <label for="Password">Password</label>
          <input type="password" class="form-control" id="Password1" name = "password">
        </div>
        <div class="form-group">
          <label for="Password2">Confirm Password</label>
          <input type="password" class="form-control" id="Password2">
        </div>
        <button type="submit" class="btn btn-primary" name = "submit">Submit</button><br>
       <p class="mt-2 mb-0"> Alredy Rgistered? | <a href="login.php">Login</a></p>
      </form>

</div>




    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

 
  </body>
</html>
