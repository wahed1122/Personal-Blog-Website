<?php
include "connection.php";
 if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }
?>


			
	<ol class="breadcrumb">
		<li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		
	</ol>

	<?php
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$file = $_FILES['file']['name'];
		$tmp = $_FILES['file']['tmp_name'];
		move_uploaded_file($tmp,"file/$file");
		
		$query = mysqli_query($con,"INSERT INTO `cv`(`cv`, `file`) VALUES ('$name','$file')");
		if($query){
			echo "
			<script>alert('insert successfully');</script>
			";
		}
	}
	
	
	?>

	
	
<div class="row"> 
	<div class="col-sm-8">
		<form action="" method="POST" enctype="multipart/form-data">
			
			<div class="form-group">
				<label for="name">CV Name</label>
				<input type="text" name="name"  id="name" class="form-control" required=""/>
			</div>
			
			<div class="form-group">
				<label for="file">CV</label>
				<input type="file" name="file"   />
			</div>
			
			
			<div class="form-group">
				
				<input type="submit" name="submit"  value="Add Album" class="btn btn-primary pull-right" />
			</div>
		</form>
	</div>
</div>