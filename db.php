<?php
	$connection = mysqli_connect('localhost', 'root', '','salary');

	if (!$connection)
	{
		die("Database Connection Failed" . mysqli_error());
	}

	
?>