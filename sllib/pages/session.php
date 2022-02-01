<?php
   include('include/dbcon.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($con,"select * from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $id_session = $row['admin_id'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
      die();
   }
?>