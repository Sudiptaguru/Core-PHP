<?php
include 'connect.php';

$name = $_REQUEST['user'];
$email = $_REQUEST['email'];
$address = $_REQUEST['address'];
$number = $_REQUEST['phone'];
$status= $_REQUEST['status'];

$sql ="INSERT INTO user VALUES('','$name','$email','$address','$number','$status')";
//echo $sql; exit;
 $rs=mysqli_query($conn,$sql);

if($rs){
	// echo "<font color='green'>Registation Successfull</font>";
	 header("location:index.php?reg=1");
 
}else
{
	// echo "<font color='red'>Registation Unsuccessfull</font>";
    header("location:registration.php?reg=0");
}

?>