<?php
session_start();

include "connection.php";

$Id = $_GET['Id'];
	
$delete = "DELETE FROM `contact` WHERE `Id`='$Id' ";
$query = mysqli_query($con,$delete);
	
	header('location:index.php?page=contact');
	
		



?>