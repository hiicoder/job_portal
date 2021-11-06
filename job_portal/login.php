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
        background-image: url("img/register.jpg");/*Image by <a href="https://pixabay.com/users/chenspec-7784448>*/
        background-size: cover;
      }
      form{
          margin-top: 10em;
          margin-left: 35em;
          margin-right: 5em;
          padding: 20px;
          background-color: #fff;
          box-shadow: 10px 10px 8px 10px #236548;
      }
    </style>

    <title>Login</title>
  </head>
  <body>
    <div class="container">
          <form action="login_val.php" method="POST">
        <h3 class="mb-3">Login Here</h3>
        <div class="form-group">
          <label for="Email">Email address</label>
          <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name="email">
         </div>

        <div class="form-group">
          <label for="Password">Password</label>
          <input type="password" class="form-control" id="Password" name="password">
        </div>

        <button type="submit" class="btn btn-primary" name="submit" >Submit</button><br>
        <center>New User?<br>Create Account | <a href="signup.php">Register</a></center>
      </form>

</div>




    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

 
  </body>
</html>
