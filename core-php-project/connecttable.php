<?php  
$hostname = 'localhost';  
$username = 'root';  
$password = '';  
$dbname = 'phpconnect';  
  
$conn = mysqli_connect($hostname, $username, $password, $dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br>';  
  
$sql = "CREATE TABLE user(id INT(11) AUTO_INCREMENT, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, contact VARCHAR(255) NOT NULL, skill VARCHAR(255) NOT NULL, gender VARCHAR(255) NOT NULL, experience_in_year INT(255) NOT NULL, experience_or_fresher VARCHAR(255)NOT NULL, type VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, file VARCHAR(255) NOT NULL, login_status TINYINT(1) NOT NULL, primary key (id))";  

if(mysqli_query($conn, $sql)){  
 echo "Table user created successfully";  
}else{  
echo "Could not create table: ". mysqli_error($conn);  
}  
  
// mysqli_close($conn);  
?>  