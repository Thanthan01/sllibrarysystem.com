
<!DOCTYPE html>
<?php require ('session.php'); ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SLTCFI | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="icon" type="text/css" href="../img/logo.png">
  <link rel="stylesheet" href="../templates/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../templates/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../templates/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../templates/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../templates/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../templates/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../templates/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../templates/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../templates/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../templates/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<link rel="stylesheet" href="../templates/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SL</b>LIB</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SLTCFI</b> | LIB</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <?php
              include('include/dbcon.php');
              $user_query=mysqli_query($con,"select *  from admin where admin_id='$id_session'")or die(mysqli_error());
              $row=mysqli_fetch_array($user_query); {
            ?>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php if($row['admin_image'] != ""): ?>
              <img src="../img/upload/<?php echo $row['admin_image']; ?>" class="user-image" alt="User Image">
              <?php else: ?>
              <img src="../img/logo.png" class="user-image" alt="User Image">
              <?php endif; ?>
              <span class="hidden-xs"><?php echo $row['firstname']; ?></span>
            </a>
            <?php } ?>
            <ul class="dropdown-menu">
              <!-- User image -->
                <?php
                  include('include/dbcon.php');
                  $user_query=mysqli_query($con,"select *  from admin where admin_id='$id_session'")or die(mysqli_error());
                  $row=mysqli_fetch_array($user_query); {
                ?>
              <li class="user-header">
                <?php if($row['admin_image'] != ""): ?>
                <img src="../img/upload/<?php echo $row['admin_image']; ?>" class="img-circle" alt="User Image">
                <?php else: ?>
                  <img src="../img/logo.png" class="img-circle" alt="User Image">
                <p>
                   <?php endif; ?>
                  <?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']; ?>
                  <small></small>
                </p>
                 <?php } ?>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <?php
  include('include/dbcon.php');
  $user_query=mysqli_query($con,"select *  from admin where admin_id='$id_session'")or die(mysqli_error());
  $row=mysqli_fetch_array($user_query); {
  ?>

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php if($row['admin_image'] != ""): ?>
          <img src="../img/upload/<?php echo $row['admin_image']; ?>" class="img-circle" alt="User Image">
          <?php else: ?>
           <img src="../img/logo.png" class="img-circle" alt="User Image">

        </div>
        <div class="pull-left info">
           <?php endif; ?>
          <p><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']; ?></p>

          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
           <?php } ?>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">File Information</li>
       <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>
        <li><a href="member.php"><i class="fa fa-users "></i> <span>Members</span></a></li>
        <li><a href="book.php"><i class="fa fa-book "></i> <span>Books</span></a></li>
        <li class="active"><a href="admin.php"><i class="fa fa-user"></i> <span>Admin</span></a></li>
        <li><a href="attendances.php"><i class="fa fa-users"></i> <span>Members Attendances</span></a></li>
        </a></li>
        <li class="header">Transaction Information</li>
        <li><a href="borrow.php"><i class="fa fa-edit"></i> <span>Borrow</span></a></li>
        <li><a href="borrowed.php"><i class="fa fa-book"></i> <span>Borrowed Books</span></a></li>
        <li><a href="returned.php"><i class="fa fa-book"></i> <span>Returned Books</span></a></li>
        <li><a href="setting.php"><i class="fa fa-cogs"></i> <span>Setting</span></a></li>
        <li><a href="report.php"><i class="fa fa-file"></i> <span>Reports</span></a></li>
        <li><a href="about.php"><i class="fa fa-info"></i> <span>About Us</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
      <h1>
        Admin
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Admin</li>
      </ol>
    <br>
      <div class="box-header">
        <div class="row">
          <div class="col-md-6">
          
            <div class="box-header with-border">
              

              <h3 class="box-title"><h3 class="box-title"><i class="fa fa-users"></i> Admin Profile</h3></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
            </div>
            <!-- /.box-body -->
          
          <!-- /.box -->
        </div>
         <div class="col-md-6">
          
            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-header with-border">
              

              <h3 class="box-title"></h3>
            </div>
              <dl class="dl-horizontal">
                
                <dd>
                  <?php
                  $user_query  = mysqli_query($con,"select * from admin where admin_id = '$id_session'")or die(mysqli_error());
                  $user_row =mysqli_fetch_array($user_query);
                  $admin_type  = $user_row['admin_type'];
                  ?>
                  <?php if ($admin_type == 'Admin') {
                  ?>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default" >
                <i class="fa fa-plus"></i> Add Admin
              </button>
              <?php } ?>
                </dd>
              </dl>
            </div>
            <!-- /.box-body -->
        
          <!-- /.box -->
        </div>
       
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Image</th>
                  <th>Full Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                 <?php
              $result= mysqli_query($con,"select * from admin order by admin_id ASC") or die (mysqli_error());
              while ($row= mysqli_fetch_array ($result) ){
              $id=$row['admin_id'];
              ?>
                <tr>
               <td><?php if($row['admin_image'] != ""): ?>
                  <img src="../img/upload/<?php echo $row['admin_image']; ?>" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
                  <?php else: ?>
                  <img src="../img/user.png" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
                  <?php endif; ?> </td> 
                <td><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']; ?></td>
              <!--- <td><?php // echo $row['admin_type']; ?></td> --></td> 
                <td>
                  <a href="#modal-success<?php echo $row[0]; ?>" class="btn btn-success" data-toggle="modal"><i class="fa fa-search"></i></a>
                  <a href="#modal-default<?php echo $row[0] ?>" class="btn btn-primary" data-toggle="modal"><i class="fa fa-edit"></i></a>
                  <a href="#modal-danger<?php echo $row[0]; ?>" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash"></i></a>

                </td>
                <!---------------------------------Delete Member-------------------------------->
                <!----- --------------------------------Start Here----------------------------->
                <div class="modal modal-default fade" id="modal-danger<?php echo $row[0]; ?>">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">
                          Delete Member
                        </h4>
                      </div>
                      <?php 
                    $del = mysqli_query($con,"select * from admin where admin_id='".$row['admin_id']."'");
                          $drow=mysqli_fetch_array($del);
                       ?>
                      <div class="modal-body">
                        <p>
                          <div class="callout callout-danger">
                             <h5><center>Are you sure to delete <strong><?php echo ucwords($drow['firstname'].' '.$drow['lastname']); ?></strong> from the list? This method cannot be undone.</center></h5> 
                          </div>
                        </p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                        <a href="admin/delete.php<?php echo '?admin_id='.$row[0]; ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                
                <!---------------------------------Delete Member------------------------------->
                <!----- ------------------------------Ends Here-------------------------------->

                <!---------------------------------View Information---------------------------->
                <!----- --------------------------------Start Here----------------------------->
                <div class="modal modal-default fade" id="modal-success<?php echo $row[0];?>">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                         <?php 
                          $view = mysqli_query($con,"select * from admin where admin_id='".$row['admin_id']."'");
                          $erow=mysqli_fetch_array($view);
                         ?>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><?php echo $erow['firstname']." ".$erow['middlename']." ".$erow['lastname']; ?></h4>
                      </div>
                      <div class="modal-body">
                       
                         <div class="box-body">
                            <dl class="dl-horizontal">
                              <dt><h4>Password : </h4></dt>
                              <dd><h4><?php echo $erow['password']; ?></h4></dd>
                              <dt><h4>User Name : </h4></dt>
                              <dd><h4><?php echo $erow['username']; ?></h4></dd>
                              <dt><h4>Date Added : </h4></dt>
                              <dd><h4><?php echo date("M d, Y h:m:s a", strtotime($row['admin_added'])); ?></h4></dd>
                            </dl>
                          </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <!---------------------------------View Information---------------------------->
                <!----- --------------------------------Ends Here----------------------------->

                <!---------------------------------Update Member---------------------------------->
                <!----- ----------------------------Start Here--------------------------------->
                    <div class="modal fade" id="modal-default<?php  echo $row[0];?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Update Member</h4>
                          </div>
                          <div class="modal-body">
                          <?php 

                          $up = mysqli_query($con,"select * from admin where admin_id='".$row['admin_id']."'");
                          $uprow=mysqli_fetch_array($up);
                         ?>
                            <form enctype="multipart/form-data" action="admin/update.php?id=<?php echo $uprow['admin_id']; ?>" method="post">
                                
                            <div class="form-group">
                                 <div class="box-body">
                                  
                                      
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="last-name">Admin Image</label><br>
                                    
                    <a href=""><?php if($row['admin_image'] != ""): ?>
                    <img src="../img/upload/<?php echo $row['admin_image']; ?>" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
                    <?php else: ?>
                    <img src="../img/user.png" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
                    <?php endif; ?>
                    </a>
                                        
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">User Name</label>
                                        <input type="name" name="username" id="address" placeholder="Input Username" class="form-control" value="<?php echo $uprow['username'];  ?>">
                                    </div>
                                </div>
                              </div>    
                                    
                                
                             
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-6">
                                  <input type="file" name="image" id="img" class="form-control">
                                </div>
                                <div class="col-md-6">
                                  
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="firstname" value="<?php echo $uprow['firstname'] ?>" placeholder="First Name">
                                      </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Midlle Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="middlename" value="<?php echo $uprow['middlename'] ?>" placeholder="First Name">
                                  </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="middlename">Last Name</label>
                                  <input type="name" name="lastname" id="middlename" placeholder="Input last Name" class="form-control" value="<?php echo $uprow['lastname'] ?>">
                                  
                            </div>
                            <div class="row">
                              <div class="form-group">
                                <div class="col-md-6">
                                  <label for="pass">Password</label>
                                  <input type="password" placeholder="Input Password" name="password" required class="form-control" value="<?php echo $uprow['password'] ?>">
                                </div>
                                <div class="col-md-6">
                                  <label for="con">Confirm Password</label>
                              <input type="password" name="confirm_password" class="form-control" required placeholder="Confirm Password" value="<?php echo $uprow['confirm_password'] ?>">
                                </div>
                              </div>
                            </div>
                            </div>
                           
                          </div>
                          <!-- /.box-body --> 
                           
                          </div>
                          <!-- /.box-body -->                
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="update" class="btn btn-primary">Update</button>
                          </div>
                          </form>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                <!---------------------------------Update Member---------------------------------->
                <!----- -----------------------------Ends here--------------------------------->
                </tr>

                <?php }?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Image</th>
                  <th>Full Name</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!---------------------------------Add Member---------------------------------->
            <?php 
              include ('include/dbcon.php');
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

                  move_uploaded_file($_FILES["image"]["tmp_name"],"../img/upload/" . $_FILES["image"]["name"]);      
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
          echo "<script>alert('Username already taken!'); window.location='admin.php'</script>";
          }
          elseif($password != $confirm_password)
          {
          echo "<script>alert('Password do not match!'); window.location='admin.php'</script>";
          }else
          {   
            mysqli_query($con,"insert into admin (firstname, middlename, lastname, username, password, confirm_password, admin_image, admin_type, admin_added)
            values ('$firstname', '$middlename', '$lastname', '$username', '$password', '$confirm_password', '$profile', 'Admin', NOW())")or die(mysqli_error());
            echo "<script>alert('Account successfully added!'); window.location='admin.php'</script>";
          }
                  }
                  }
              } 
              }
                ?>
                <!----- ----------------------------Start Here--------------------------------->
                    <div class="modal fade" id="modal-default">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Add Admin</h4>
                          </div>
                          <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">First Name</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" name="firstname" placeholder="First Name">
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-6">
                                  <label for="firstname">Middle Name</label>
                              <input type="text" class="form-control" id="firstname" name="middlename" placeholder="MI/ Middle Name">
                                </div>
                                <div class="col-md-6">
                                  <label for="middlename">Last Name</label>
                                  <input type="name" name="lastname" id="middlename" placeholder="Input last Name" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                              <div class="form-group">
                                <div class="col-md-6">
                                  <label for="pass">Password</label>
                                  <input type="password" name="password" required class="form-control">
                                </div>
                                <div class="col-md-6">
                                  <label for="con">Confirm Password</label>
                              <input type="password" name="confirm_password" class="form-control" required placeholder="Confirm Password">
                                </div>
                              </div>
                            </div>
                            </div>
                            <div class="form-group">
                              <label for="address">User Name</label>
                              <input type="name" name="username" id="address" placeholder="Input Address" class="form-control">
                            </div>
                            
                            <div class="form-group">
                              <label for="img">Image</label>
                              <input type="file" name="image" id="img" class="form-control">
                            </div>
                          </div>
                          <!-- /.box-body -->                
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                          </div>
                          </form>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                <!---------------------------------Add Member---------------------------------->
                
                <!----- -----------------------------Ends here--------------------------------->
          
  </section>

 
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      
    </div>
    <strong>Copyright &copy; 2021 <a href="www.SLTCFI.org">SLTCFI | LIB</a>.</strong> All rights
    reserved.
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../templates/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../templates/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../templates/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../templates/bower_components/raphael/raphael.min.js"></script>
<script src="../templates/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../templates/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../templates/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../templates/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../templates/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../templates/bower_components/moment/min/moment.min.js"></script>
<script src="../templates/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../templates/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../templates/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../templates/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src=../templates/"bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../templates/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../templates/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src=" ../templates/dist/js/demo.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script src="../templates/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../templates/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
</body>
</html>
