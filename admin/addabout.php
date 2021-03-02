<?php
include "connection.php";
 if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }
?>

<h1 class="text-primary"><i class="fa fa-user-plus"></i> About <small>About</small></h1>
			
	<ol class="breadcrumb">
		<li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		 <li class="active"><i class="fa fa-user-plus"></i> Add About</li>
	</ol>

	<?php
	
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		
		$designation = $_POST['designation'];
		$photo = $_FILES['photo']['name'];
		$tmp = $_FILES['photo']['tmp_name'];
		move_uploaded_file($tmp,"about/$photo");
		
		$discription = $_POST['discription'];
		
		$query = "INSERT INTO `about`( `name`, `designation`, `photo`, `discription`) VALUES ('$name','$designation','$photo','$discription')";
		$result = mysqli_query($con,$query);
		if($result){
			echo "<script>alert('successfully');</script>";
		}else{
			echo "failed";
		}
		
	}
	
	?>

	
	
<div class="row"> 
	<div class="col-sm-8">
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name"> Name</label>
				<input type="text" name="name" placeholder="Enter Student Name" id="name" class="form-control" required=""/>
			</div>
			
			<div class="form-group">
				<label for="designation">Designation</label>
				<textarea name="designation" cols="40" rows="5" class="form-control" id="designation" placeholder="Designation" required=""></textarea>
			</div>
			
			<div class="form-group">
				<label for="photo">Picture</label>
				<input type="file" name="photo"   />
			</div>
			
			<div class="form-group">
				<label for="discription">Discription</label>
				<textarea name="discription" cols="50" rows="10" class="form-control" id="discription" placeholder="discription" required=""></textarea>
			</div>

			<div class="form-group">
				
				<input type="submit" name="submit"  value="Add About" class="btn btn-primary pull-right" />
			</div>
		</form>
	</div>
</div>