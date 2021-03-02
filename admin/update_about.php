<?php
include "connection.php";
 if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }
?>

<h1 class="text-primary"><i class="fa fa-user-plus"></i> Update About <small>Update About</small></h1>
			
	<ol class="breadcrumb">
		<li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		<li><a href="index.php?page=user_profile"><i class="fa fa-user"></i> Profile</a></li>
		<li><a href="index.php?page=all_user"><i class="fa fa-user"></i> All Users</a></li>
		 <li class="active"><i class="fa fa-pencil-square-o"></i> Update About</li>
	</ol>
	
	<?php 
	
	
	
	
	
	$query = mysqli_query($con,"SELECT * FROM `about` where Id= 10 ");
	$result = mysqli_fetch_assoc($query);

	
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$designation = $_POST['designation'];
		$discription = $_POST['discription'];

		
				$query = "UPDATE `about` SET `name`='$name',`designation`='$designation',`discription`='$discription' WHERE `Id`=10";
				$run = mysqli_query($con,$query);
				
				if($run){
					header('location:index.php?page=dashboard');
				}
				
			
		
		
		
	}
	
	?>
	
	<div class="row"> 
	<div class="col-sm-6">
		<form action="" method="POST" >
			<div class="form-group">
				<label for="name"> Name</label>
				<input type="text" name="name" placeholder="Enter Student Name" id="name" class="form-control" value="<?php echo $result['name'];?>" required=""/>
			</div>
			
			<div class="form-group">
				<label for="designation">Designation</label>
				<textarea name="designation" cols="40" rows="5" class="form-control" id="designation"  required=""><?php echo $result['designation'];?></textarea>
			</div>
			
			
			<div class="form-group">
				<label for="discription">Discription</label>
				<textarea name="discription" cols="50" rows="10" class="form-control" id="discription"  required=""><?php echo $result['discription'];?></textarea>
			</div>

			<div class="form-group">
				
				<input type="submit" name="submit"  value="Update About" class="btn btn-primary pull-right" />
			</div>
		</form>
	</div>
</div>