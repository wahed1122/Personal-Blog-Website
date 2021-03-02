<?php
session_start();
include "connection.php";


if(isset($_POST['submit'])){
	$email = $_POST{'email'};
	$password = $_POST{'password'};
	
	$query = mysqli_query($con,"select * from admin where email='$email' And password= '$password'");
	$count = mysqli_num_rows($query);
	if($count==1){
		$_SESSION['email']=$email;
		echo " <script>alert('successfully login');
			window.location.href='index.php';</script>
			
		";
		
	}else{
		echo " <script>alert('login faild');
			window.location.href='login.php';</script>
		";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css" />
	
  </head>
  <body>
  <div class="content animated shake"> 
	<h1 class="text-center">Ab Wahed</h1>
	  <div class="row"> 
		<div class="col-sm-4 col-sm-offset-0">
			<h2 class="center">Admin Login Form </h2>
			<form action="" method="POST"  >
				<div>
				<input  class="control"type="text" name="email" placeholder="Enter The Email" required=""  />
				<input type="password" name="password" placeholder="Enter The Password" required=""  class="control"/><br />
				<input type="submit" value="submit" name="submit" class="conten btn btn-info " />
				</div>
			</form>
		</div>
	  </div>
	  
  </div>
    

    
  </body>
</html>