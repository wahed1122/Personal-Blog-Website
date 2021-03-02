<?php
session_start();

include "../connection.php";

$id = $_GET['Id'];
	
$delete = "DELETE FROM `admin` WHERE `Id`='$id' ";
$query = mysqli_query($con,$delete);
	
header('location:index.php?page=all_user');


	
		



?>