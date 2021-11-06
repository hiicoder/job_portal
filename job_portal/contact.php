<?php
session_start();
if(isset($_SESSION['name'])){
	 include'header.php';
include 'sidenav.php';
?>
<div class="content" style="padding-top:65px" id="main">
<h3 class="pt-5">We are working on it :(</h3>
</div>
<?php
}
else{
  header("location:admin_login.php");
}
?>