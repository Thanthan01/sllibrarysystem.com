<?php
   include('include/dbcon.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($con,"select * from user where school_number = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $id_session = $row['user_id'];
   $user_name = $row['firstname']." ".$row['middlename']." ".$row['lastname'];
//-------------------------------------------Record User Time When Login------------------------------------------------------------------------
                             
    // Insert User Time Login
       $success = false;
    // Get the User IP
      $userIP = $_SERVER['REMOTE_ADDR'];                                        
      $nowTimeStamp = date("Y-m-d H:i:s");
        // Prepare the SQL Statements  to Insert User Login Time                                            
                                             
       mysqli_query($con,'INSERT INTO user_log (user_id,user_name,date_log ) VALUES ('.$id_session.',"'.$user_name.'","'.$nowTimeStamp.'"'.')')or die(mysqli_error());
                       
                                                 
                                                     
//------------------------------------------------------------------------------------------------------------------------------------------------------

   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
      die();
   }
?>