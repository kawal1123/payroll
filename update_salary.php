<?php
	
		require("db.php");
		
		@$id 			= $_POST['salary_id'];
		@$salary		= $_POST['salary_rate'];

$sall = "UPDATE salary SET salary_rate='$salary' WHERE salary_id='1'";
		$sql = mysqli_query($connection,$sall);

		if($sql)
		{
			?>
		        <script>
		            alert('Salary rate successfully changed...');
		            window.location.href='home_salary.php';
		        </script>
		    <?php 
		}
		else {
			echo "Not Successfull!"; 
		}
 ?>