<?php 
	include('db.php');
	
	$id=$_GET['id'];
	$query = "DELETE FROM contarct1 WHERE id=$id"; 
	$result = mysqli_query($connection,$query);
	header("Location: home_employee1.php"); 
 ?>