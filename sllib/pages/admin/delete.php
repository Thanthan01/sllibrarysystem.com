<?php 
	include('../include/dbcon.php');
session_start();
$get_id=$_GET['admin_id'];

$query_run = mysqli_query($con,"delete from admin where admin_id = '$get_id' ")or die(mysqli_error());
//$_SESSION['status'] = "successfully Deleted";
//$_SESSION['status_code'] = "alert-info";
//header('location:../admin.php');

if ($query_run) {
	$_SESSION['status'] = "Admin Successfully Deleted";
	$_SESSION['status_code'] = "alert-success";
	$_SESSION['status_icon']="fa-check";
	header('location:../admin.php');
}
else{
	$_SESSION['status'] = "Admin Not Successfully Deleted";
	$_SESSION['status_code'] = "alert-warning";
	$_SESSION['status_icon'] = "fa-warning";
	header("location:../admin.php");
}
 ?>
