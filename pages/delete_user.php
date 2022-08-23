<?php
include ('connect.php');

$id=$_REQUEST['id'];
$query = "DELETE FROM users WHERE id=$id"; 
$result = mysqli_query($conn,$query);
header("Location: users.php"); 
?>