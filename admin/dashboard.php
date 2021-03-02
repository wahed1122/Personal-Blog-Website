<?php

 if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }
?>
<h1 class="text-primary"><i class="fa fa-dashboard"></i> Dashboard <small>Statistics Overview</small></h1>
				
				<ol class="breadcrumb">
				  <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
				</ol>
		
<?php




$query = mysqli_query($con,"SELECT * FROM `admin`");
$total_user = mysqli_num_rows($query);

?>

		
				<div class="row"> 
					
					
					<div class="col-sm-4"> 
						<div class="panel panel-primary"> 
							
							<div class="panel-heading">
								<div class="row">								
									<div class="col-xs-3"> 
										<i class="fa fa-users fa-5x"></i>
									</div>
									<div class="col-xs-9"> 
										<div class="pull-right"style="font-size:45px"><?php echo $total_user;?></div>
										<div class="clearfix"></div>
										<div class="pull-right">All Users</div>
									</div>
								</div>
							</div>
							<a href="index.php?page=all_user">
								<div class="panel-footer"> 
									<span class="pull-left">All Users</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-o-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
							
						</div>
					</div>
					

					
				</div>
				<hr />
				<h3>New Message</h3>
				<div class="table-responsive">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Message</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
		
<?php
		
		$query = mysqli_query($con,"SELECT * FROM `contact`");
		while($row = mysqli_fetch_assoc($query)){
			
		
		?>
		
            <tr>
                <td><?php echo $row['Id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['phoneno'];?></td>
                <td><?php echo $row['discription'];?></td>
                <td><a href="message_delete.php?Id=<?php echo $row['Id']?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>Delete</a></td>
            </tr>
		<?php }?>
			
           </tbody>
	
			
           </tbody>
        
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Message</th>
                <th>Action</th>
              
            </tr>
        </tfoot>
    </table>
				</div>
				