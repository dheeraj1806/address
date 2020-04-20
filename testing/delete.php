<?php  
	$connect = mysqli_connect("localhost", "root", "", "testing");
	$sql = "DELETE FROM address WHERE email = '".$_POST["email"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>