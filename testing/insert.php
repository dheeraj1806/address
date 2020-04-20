<?php  
$connect = mysqli_connect("localhost", "root", "", "testing");
$sql = "INSERT INTO address(first_name, last_name,email,mob_no, address, city, state, pin_code) VALUES('".$_POST["first_name"]."', '".$_POST["last_name"]."','".$_POST["email"]."','".$_POST["mob_no"]."','".$_POST["address"]."','".$_POST["city"]."','".$_POST["state"]."','".$_POST["pin_code"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>