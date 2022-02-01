<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>SLTCFI | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="text/css" href="../img/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../templates/login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../templates/login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../templates/login/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="../templates/login/css/style.css">
    <script>
        NProgress.start();
    </script>
    
  </head>
  <body>
  

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('../templates/login/images/bg.png');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
                <img src="../templates/login/images/logo.png" style="height: 150px;">
              </div>
              
                <?php
                   include("include/dbcon.php");
                   session_start();
                   $error = "";
                   if($_SERVER["REQUEST_METHOD"] == "POST") {
                      // username and password sent from form 
                      
                      $myusername = mysqli_real_escape_string($con,$_POST['username']);
                      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
                      
                      $sql = "SELECT * FROM admin WHERE username = '$myusername' and password = '$mypassword'";
                      $result = mysqli_query($con,$sql);
                      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                      $active = $row;
                      
                      $count = mysqli_num_rows($result);
                      
                      // If result matched $myusername and $mypassword, table row must be 1 row
                      
                      if($count == 1) {
                         
                         $_SESSION['login_user'] = $myusername;
                         
                         header("location: dashboard.php");
                      }
                      else{?>
                              <div class="alert alert-danger  alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p >These Credential do not match our records.</p>
                              </div>
                              <?php
                        
                      }
                   }
                ?>
              <form action="" method="post">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Your Password" name="password">
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                  </label>
                  <!--<span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> -->
                </div>

                <input type="submit" value="Log In" name="login" class="btn btn-block py-2 btn-primary">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </div>
    <script src="../templates/login/js/jquery-3.3.1.min.js"></script>
    <script src="../templates/loginjs/popper.min.js"></script>
    <script src="../templates/loginjs/bootstrap.min.js"></script>
    <script src="../templates/loginjs/main.js"></script>
    <script type="script/footer_script.php"></script>
  </body>
</html>