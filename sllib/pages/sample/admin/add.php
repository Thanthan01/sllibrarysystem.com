<?php 
              include ('../include/dbcon.php');
              if (isset($_POST['submit'])) {
               if (!isset($_FILES['image']['tmp_name'])) {
              echo "";
              }else{
              $file=$_FILES['image']['tmp_name'];
              $image = $_FILES["image"] ["name"];
              $image_name= addslashes($_FILES['image']['name']);
              $size = $_FILES["image"] ["size"];
              $error = $_FILES["image"] ["error"];
              {
                    if($size > 10000000) //conditions for the file
                    {
                    die("Format is not allowed or file size is too big!");
                    }
                    
                  else
                    {

                  move_uploaded_file($_FILES["image"]["tmp_name"],"../../img/upload/" . $_FILES["image"]["name"]);      
                  $profile=$_FILES["image"]["name"];
                  $firstname = $_POST['firstname'];
                  $middlename = $_POST['middlename'];
                  $lastname = $_POST['lastname'];
                  $username = $_POST['username'];
                  $password = $_POST['password'];
                  $confirm_password = $_POST['confirm_password'];
              //    $admin_type = $_POST['admin_type'];
          
          $result=mysqli_query($con,"select * from admin WHERE username='$username' ") or die (mysqli_error());
          $row=mysqli_num_rows($result);
          if ($row > 0)
          {
          echo "<script>alert('Username already taken!'); window.location='../admin.php'</script>";
          }
          elseif($password != $confirm_password)
          {
          echo "<script>alert('Password do not match!'); window.location='../admin.php'</script>";
          }else
          {   
            mysqli_query($con,"insert into admin (firstname, middlename, lastname, username, password, confirm_password, admin_image, admin_type, admin_added)
            values ('$firstname', '$middlename', '$lastname', '$username', '$password', '$confirm_password', '$profile', 'Admin', NOW())")or die(mysqli_error());
            echo "<script>alert('Account successfully added!'); window.location='../admin.php'</script>";
          }
                  }
                  }
              } 
              }
                ?>