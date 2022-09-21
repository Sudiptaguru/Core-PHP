<?php
include "connect.php";
$rowCount = count($_POST["user"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($conn, "DELETE FROM user WHERE id='" . $_POST["user"][$i] . "'");
}
header("Location:adminpro.php");
?>