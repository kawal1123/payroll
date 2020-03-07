<?php 
	include('db.php');
	
	$id=$_GET['id'];
	$query = "DELETE FROM contarct WHERE id=$id"; 
	$result = mysqli_query($connection,$query);
	header("Location: home_employee.php"); 
 ?>