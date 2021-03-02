<?php 

include "connection.php";

    if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }

?>

<h1 class="text-primary"><i class="fa fa-user"></i> User Profile <small>My Profile</small></h1>
			
	<ol class="breadcrumb">
		<li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		 <li class="active"><i class="fa fa-user"></i> Profile</li>
	</ol>
	
	<?php 
	
	 $user_email=$_SESSION['email'];
	 $user_data = mysqli_query($con,"SELECT * FROM `admin` WHERE `email`='$user_email'");
	 $user_row = mysqli_fetch_assoc($user_data );
	
	?>
	
	<div class="row"> 
		<div class="col-sm-6">
			<table class="table table-bordered"> 
				<tr> 
					<td>User Id</td>
					<td><?php echo $user_row['Id'] ?></td>
				</tr>
				<tr> 
					<td>Name</td>
					<td><?php echo ucwords($user_row['name']) ?></td>
				</tr>
				<tr> 
					<td>Email</td>
					<td><?php echo $user_row['email'] ?></td>
				</tr>
				<tr> 
					<td>Singup Date</td>
					<td><?php echo $user_row['datetime'] ?></td>
				</tr>
			</table>
			<a href="index.php?page=update_admin&Id=<?php echo $user_row['Id']?>" class="btn btn-sm btn-info pull-right">Edit Profile</a>
		</div>
		
		<div class="col-sm-6">
			<img class="img-thumbnail" style="width:150px;" src="upload/<?php echo $user_row['photo'] ?>" alt="" /><br /><br />
			
			<?php
			
			if(isset($_POST['upload'])){
				$photo = $_FILES['photo']['name'];
				$image_tmp = $_FILES['photo']['tmp_name'];
				
				
				$query = mysqli_query($con,"UPDATE `admin` SET `photo`='$photo' WHERE`email`='$user_email' ");
				if($query){
					move_uploaded_file($image_tmp,"upload/$photo");
				}
			}
			
			?>
			
			<form action="" method="POST" enctype="multipart/form-data">
				<label for="photo">Profile Picture</label>
				<input type="file" name="photo" id="photo" required="" />
				 <br />
				<input type="submit" name="upload" value="Upload" class="btn btn-sm btn-info  col-sm-offset-3" />
			</form>
		</div>
	</div>