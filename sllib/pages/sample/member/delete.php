<?php 
include('../include/dbcon.php');
$stud = $_GET['user_id'];
$sql = $con->query("DELETE FROM user WHERE user_id='".$stud."'");
header("location:../member.php");
?>