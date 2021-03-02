<?php
include "connection.php";
 if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }
?>

<h1 class="text-primary"><i class="fa fa-user-plus"></i> Albam Add <small>Albam Add</small></h1>
			
	<ol class="breadcrumb">
		<li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		 <li class="active"><i class="fa fa-user-plus"></i> Add Albam</li>
	</ol>

	<?php
	if(isset($_POST['submit'])){
		$photo = $_FILES['photo']['name'];
		$temp = $_FILES['photo']['tmp_name'];
		move_uploaded_file($temp,"image/$photo");
		$query = "INSERT INTO `pgallery`( `photo`) VALUES ('$photo')";
		$result = mysqli_query($con,$query);
		if($result){
			echo "
			<script> alert('inserted');</script>
			";
		}
	}
	
	
	?>

	
	
<div class="row"> 
	<div class="col-sm-8">
		<form action="" method="POST" enctype="multipart/form-data">
			
			
			<div class="form-group">
				<label for="photo">Picture</label>
				<input type="file" name="photo"   />
			</div>
			
			
			<div class="form-group">
				
				<input type="submit" name="submit"  value="Add Album" class="btn btn-primary pull-right" />
			</div>
		</form>
	</div>
</div>