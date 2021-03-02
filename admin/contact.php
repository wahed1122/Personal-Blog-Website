		<?php

 if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }
?>
		
		<h1 class="text-primary"><i class="fa fa-users"></i> Message<small>Message</small></h1>
			
	<ol class="breadcrumb">
		<li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		 <li class="active"><i class="fa fa-user-plus"></i> Message</li>
	</ol>

		
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