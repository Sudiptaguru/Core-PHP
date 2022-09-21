<?php  
$hostname = 'localhost';  
$username = 'root';  
$password = '';  
$conn = mysqli_connect($hostname, $username, $password);  
if(!$conn)  
{  
  die('Could not connect: ' . mysqli_connect_error());  
}  
echo 'Connected successfully <br>';  
  
$sql = 'CREATE DATABASE phpconnect';  
if(mysqli_query($conn,$sql)){  
  echo "Database phpconnect created successfully.";  
}else{  
echo "Sorry, database creation failed ". mysqli_error($conn);  
}  
//mysqli_close($conn);  
?>  