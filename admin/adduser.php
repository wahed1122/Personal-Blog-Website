<?php

include "../connection.php";

 if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }

if(isset($_POST['registration'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$photo = $_FILES['photo']['name'];
	$image_tmp = $_FILES['photo']['tmp_name'];
	move_uploaded_file($image_tmp,"upload/$photo");
	
	$input_error = array();
	if(empty($name)){
		$input_error['name'] = "The Name Field is required";
	}
	if(empty($email)){
		$input_error['email'] = "The email Field is required";
	}

	if(empty($password)){
		$input_error['password'] = "The Password Field is required";
	}
	if(empty($cpassword)){
		$input_error['cpassword'] = "The Confirm Password Field is required";
	}
	if(count($input_error)==0){
		$query_chack = mysqli_query($con,"SELECT * FROM `admin` where email='$email' ");
		if(mysqli_num_rows($query_chack )==0){
			if(strlen($password)>7){
				if($password == $cpassword){
					$query = "INSERT INTO `admin`( `Name`, `email`, `password`, `cpassword`, `photo` ) VALUES ('$name','$email','$password','$cpassword','$photo')";
					$result = mysqli_query($con,$query);
					if($result){
						echo "
						<script> alert('successfully Registration');</script>
						";
					}else{
						echo"<script>alert('connection faild')</script>";
					}
				}else{
					$password_not_match = "Password Noth Match";
				}
			}else{
				$password_length = "Password More Then 8 characters";
			}
		}else{
			$email_error = "This Email Already Exit";
		}
		
	
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
    <title>Add User Form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css" />
	
  </head>
  <body>
		<div class="containen"> 
		
		<h1 style="margin-left:4%;">Add User Form</h1>
		<hr />
		
			<div class="row"> 
				<div class="col-md-12">
				
					<form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-1" for="name">Name</label>
							
							<div class="col-sm-4"> 
								<input class="form-control" type="text" name="name" id="name" placeholder="Enter The Name" value="<?php if(isset($name)){echo $name ;}?>" required=""/>
							</div>
							<label class="error"><?php if(isset($input_error['name'])){echo $input_error['name'];}?></label>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-1" for="email">email</label>
							
							<div class="col-sm-4"> 
								<input class="form-control" type="email" name="email" id="email" placeholder="Enter @gmail.com" value="<?php if(isset($email)){echo $email ;}?>" required=""/>
							</div>
							<label class="error"><?php if(isset($input_error['email'])){echo $input_error['email'];}?></label>
							<label class="error"><?php if(isset($email_error)){echo $email_error;}?></label>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-1" for="password">Password</label>
							
							<div class="col-sm-4"> 
								<input class="form-control" type="password" name="password" id="password" placeholder="Enter The Password" required=""/>
							</div>
							<label class="error"><?php if(isset($input_error['password'])){echo $input_error['password'];}?></label>
							<label class="error"><?php if(isset($password_length)){echo $password_length;}?></label>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-1" for="cpassword">Confirm Password</label>
							
							<div class="col-sm-4"> 
								<input class="form-control" type="password" name="cpassword" id="cpassword" placeholder="Enter The Confirm Password" required=""/>
							</div>
							<label class="error"><?php if(isset($input_error['cpassword'])){echo $input_error['cpassword'];}?></label>
							<label class="error"><?php if(isset($password_not_match)){echo $password_not_match;}?></label>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-1" for="photo" >Photo</label>
							
							<div class="col-sm-4"> 
								<input id="photo" type="file" name="photo" required=""  />
							</div>
						</div>
						
						<div class="col-sm-4 col-sm-offset-3">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="submit" value="Registration" name="registration" class="btn btn-primary " />
						</div>
					</form>
				
				</div>
			</div><br /> <br />
			<p style="margin-left:4%;"> If you have an account? then please <a href="index.php?page=dashboard">Login</a></p>
			<hr /> 
			
			<footer>
				<p style="margin-left:4%;">© All rights reserved © 2020</p>
			</footer>
		</div>
    

    
  </body>
</html>