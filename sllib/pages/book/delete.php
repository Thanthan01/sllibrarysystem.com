<?php 
	include('../include/dbcon.php');
session_start();
$get_id=$_GET['book_id'];

$sql = mysqli_query($con,"delete from book where book_id = '$get_id' ")or die(mysqli_error());
if ($sql) {
	$_SESSION['status'] = "BOOK Successfully DELETED";
            $_SESSION['status_code'] = "alert-success";
            $_SESSION['status_icon'] ="fa-check";
header('location:../book.php');
}

 ?>