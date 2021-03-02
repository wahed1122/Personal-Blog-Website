<h1 class="text-primary"><i class="fa fa-user-plus"></i> Update User <small>Update User</small></h1>
			
	<ol class="breadcrumb">
		<li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		<li><a href="index.php?page=user_profile"><i class="fa fa-user"></i> Profile</a></li>
		<li><a href="index.php?page=all_user"><i class="fa fa-user"></i> All Users</a></li>
		 <li class="active"><i class="fa fa-pencil-square-o"></i> Update Admin</li>
	</ol>
	
	<?php 
	include "../connection.php";
	
	$user_email=$_SESSION['email'];
	$query = mysqli_query($con,"SELECT * FROM `admin` WHERE `email`='$user_email' ");
	$result = mysqli_fetch_assoc($query);

	
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];

		if(strlen($password)>7){
			if($password == $cpassword){
				$query = "UPDATE `admin` SET `Name`='$name',`email`='$email',`password`='$password',`cpassword`='$cpassword' WHERE `email`='$user_email'";
				$result = mysqli_query($con,$query);
				
				if($result){
					header('location:index.php?page=user_profile');
				}else{
					echo "connection error";
				}
				
			}else{
				echo "password and confirm password not match";
			}
		}else{
			$password_length = "Password More Then 8 characters";
			}
		
		
	}
	
	?>
	
	<div class="row"> 
	<div class="col-sm-6">
		<form action="" method="POST" >
			<div class="form-group">
				<label for="name">Admin Name</label>
				<input type="text" name="name"  id="name" class="form-control" required="" value="<?php echo $result['name'];?>"/>
			</div>
			
			<div class="form-group">
				<label for="email">Admin Email</label>
				<input type="email" name="email"  id="email" class="form-control"  value="<?php echo $result['email'];?>"/>
			</div>
			
			<div class="form-group">
				<label for="email">Admin Password</label>
				<input type="password" name="password"  id="email" class="form-control"  value="<?php echo $result['password'];?>"/>
				<label class="error"><?php if(isset($password_length)){echo $password_length;}?></label>
			</div>
			
			<div class="form-group">
				<label for="email">Confirm Password</label>
				<input type="password" name="cpassword"  id="email" class="form-control"  value="<?php echo $result['cpassword'];?>"/>
			</div>
			
		
	
			
			<div class="form-group">
				
				<input type="submit" name="submit"  value="Update Admin" class="btn btn-primary pull-right" />
			</div>
		</form>
	</div>
</div>