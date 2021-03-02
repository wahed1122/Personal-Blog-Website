
<?php
include "connection.php";
session_start();

    if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }
?>



<?php

$user_email=$_SESSION['email'];
$query = mysqli_query($con,"SELECT * FROM `admin` WHERE `email`='$user_email' ");
$result = mysqli_fetch_assoc($query);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css" />
	
	
	<script type="text/javascript" src="js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	

 
  </head>
  <body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    
      <a class="navbar-brand" href="index.php">Admin Page</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php?page=user_profile"><i class=" fa fa-user "></i> Welcome <?php echo $result['name'];?></a></li>
        <li><a href="index.php?page=adduser"><i class=" fa fa-user-plus "></i> Add User</a></li>
        <li><a href="index.php?page=user_profile"><i class=" fa fa-user "></i> Profile</a></li>
        <li><a href="logout.php"><i class=" fa fa-power-off "></i> Logout</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid"> 
	<div class="row ">
		<div class="col-sm-3 	">
			<div class="list-group ">
				  <a href="index.php?page=dashboard" class="list-group-item active ">
					<i class="fa fa-dashboard"></i>  Dashboard
				  </a>
				  <a href="index.php?page=update_about" class="list-group-item "> <i class="fa fa-user-plus"></i> Update About</a>
				  
				  <a href="index.php?page=all_user" class="list-group-item"> <i class="fa fa-user-plus"></i> All User</a>
				  
				  <a href="index.php?page=addabout" class="list-group-item"> <i class="fa fa-user-plus"></i> Add About</a>
				  <a href="index.php?page=add_pgallery" class="list-group-item"> <i class="fa fa-user-plus"></i> Add Picture</a>
				  <a href="index.php?page=addcv" class="list-group-item"> <i class="fa fa-user-plus"></i> Add CV</a>
				  <a href="index.php?page=contact" class="list-group-item"> <i class="fa fa-user-plus"></i> Messege</a>
				  
			</div>
		</div>
		<div class="col-sm-9">
			<div class="content" style="min-hight:500px;">
			
				<?php
				if(isset($_GET['page'])){
					$page = $_GET['page'].'.php';
				}else{
					$page = "dashboard.php";
				}
				
				
				if(file_exists($page)){
					require_once $page;
				}else{
					echo"<h1>File Not Found</h1>";
				}
				 
				?>
				
			</div>
			
			
		</div>
	</div>
</div>

<footer class="footer-area" style="
		background:#3CA9E8;
		text-align:center;
		padding:20px 0;color:#fff;
		margin-top:20px;">
	
 
	<p style="margin:0;">© All rights reserved © 2020 </p>
</footer>
   
  </body>
</html>