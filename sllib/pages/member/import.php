<?php
session_start();
if (isset($_POST['submit'])) 
{
include('../include/dbcon.php');

// add if needed to preview
//  if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
//    echo "<h1>" . "File ". $_FILES['filename']['name'] ." Uploaded successfully." . "</h1>";
//    echo "<h2>Displaying contents:</h2>";
//    readfile($_FILES['filename']['tmp_name']);
//  }

  //Import uploaded file to Database
  $handle = fopen($_FILES['filename']['tmp_name'], "r");
$count = 0;
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    if($count == 0){
      $count++;
      continue;
    }
    mysqli_query($con,"INSERT into user (school_number, firstname ,middlename, lastname, contact, gender, address, type, level, section, status, user_added)
    values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]',NOW())");
    
    }

  fclose($handle);

  //print "Import done";
  $_SESSION['status'] = "New Member Successfully Added";
            $_SESSION['status_code'] = "alert-success";
            $_SESSION['status_icon'] ="fa-check";
  echo "<script>document.location='../member.php'</script>";
  
  //view upload form
}

?>