<?php  
	$connect = mysqli_connect("localhost", "root", "", "testing");
	$email = $_POST["email"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"]; 
   	
	$sql = "UPDATE address SET ".$column_name."='".$text."' WHERE email='".$email."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Updated';  
	}  
 ?>