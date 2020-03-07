<?php 
	include('db.php');
	
	$id=$_GET['id'];
	$query = "DELETE FROM staffinfo WHERE id=$id"; 
	$result = mysqli_query($connection,$query);
	header("Location: addstaff.php"); 
 ?>