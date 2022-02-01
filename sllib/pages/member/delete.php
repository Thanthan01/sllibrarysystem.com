<?php 
include('../include/dbcon.php');
session_start();
$stud = $_GET['user_id'];
$sql = $con->query("DELETE FROM user WHERE user_id='".$stud."'");
if ($sql) {
			$_SESSION['status'] = "Member Successfully Deleted";
            $_SESSION['status_code'] = "alert-success";
            $_SESSION['status_icon'] ="fa-check";
            header("location:../member.php");
}
else{
	$_SESSION['status'] = "Member Not Successfully Deleted";
	$_SESSION['status_code'] = "alert-warning";
	$_SESSION['status_icon'] = "fa-warning";
	header("location:../admin.php");
}
?>