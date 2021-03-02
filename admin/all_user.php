		<?php

 if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }
?>
		
		<h1 class="text-primary"><i class="fa fa-users"></i> All Users <small>All Users</small></h1>
			
	<ol class="breadcrumb">
		<li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		 <li class="active"><i class="fa fa-user-plus"></i> All Users</li>
	</ol>

		
		<div class="table-responsive">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Photo</th>
                <th>Action</th>
                <th>Singup Date</th>
            </tr>
        </thead>
        <tbody>
		
		<?php
		
		$query = mysqli_query($con,"SELECT * FROM `admin` ");
		while($row = mysqli_fetch_assoc($query)){
		
		?>
		
            <tr>
                <td><?php echo $row['Id']?></td>
                <td><?php echo ucwords($row['name'])?></td>
                <td><?php echo ucwords($row['email'])?></td>
                <td><img src="upload/<?php echo $row['photo']?>" alt="" style="width:100px"/></td>
                <td>
					<a href="index.php?page=update_admin&Id<?php echo $row['Id']?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i>Edit</a>
					&nbsp;&nbsp;&nbsp;
					<a href="delete_user.php?Id=<?php echo $row['Id']?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>Delete</a>
				</td>
				<td><?php echo $row['datetime'] ?></td>
            </tr>
		<?php }?>
			
           </tbody>
        
        <tfoot>
            <tr>
               <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Photo</th>
                <th>Action</th>
                <th>Singup Date</th>
            </tr>
        </tfoot>
    </table>
				</div>