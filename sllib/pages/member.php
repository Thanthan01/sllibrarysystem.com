
<!DOCTYPE html>
<?php require ('session.php'); ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SLTCFI | Member</title>
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
              <?php if($row['admin_image'] != ""){ ?>
              <img src="../img/upload/<?php echo $row['admin_image']; ?>" class="user-image" alt="User Image">
              <?php }else{ ?>
              <img src="../img/logo.png" class="user-image" alt="User Image">
              <?php } ?>
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
                <?php if($row['admin_image'] != ""){?>
                <img src="../img/upload/<?php echo $row['admin_image']; ?>" class="img-circle" alt="User Image">
                <?php }else{ ?>
                  <img src="../img/logo.png" class="img-circle" alt="User Image">
                <?php } ?>
                <p>
                  <?php echo $row['firstname']; ?> <?php echo $row['middlename']; ?> <?php echo $row['lastname']; ?>
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
          <?php if($row['admin_image'] != ""){?>
          <img src="../img/upload/<?php echo $row['admin_image']; ?>" class="img-circle" alt="User Image">
          <?php }else{?>
           <img src="../img/logo.png" class="img-circle" alt="User Image">
         <?php } ?>
        </div>
        <div class="pull-left info">
          <p><?php echo $row['firstname']; ?> <?php echo $row['middlename']; ?> <?php echo $row['lastname']; ?></p>

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
        <li class="active"><a href="member.php"><i class="fa fa-users "></i> <span>Members</span></a></li>
        <li><a href="book.php"><i class="fa fa-book "></i> <span>Books</span></a></li>
        <li><a href="admin.php"><i class="fa fa-user"></i> <span>Admin</span></a></li>
        <li><a href="attendances.php"><i class="fa fa-users"></i> <span>Members Attendances</span></a></li>
        </a></li>
        <li class="header">Transaction Information</li>
        <li><a href="borrow.php"><i class="fa fa-edit"></i> <span>Transaction</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        
        <ul class="treeview-menu">
          <li><a href="borrowed.php"><i class="fa fa-book"></i> <span>Borrowed Books</span></a></li>
        <li><a href="returned.php"><i class="fa fa-book"></i> <span>Returned Books</span></a></li>
        </ul>
        </li>
        <li><a href="setting.php"><i class="fa fa-cogs"></i> <span>Setting</span></a></li>
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
        Member
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Member</li>
      </ol>
    <br>
    <div class="box box-primary">
      <div class="box-header">
        <div class="row">
          <div class="col-md-6">
          
            <div class="box-header with-border">
              

              <h3 class="box-title"><h3 class="box-title"><i class="fa fa-users"></i> Member Information</h3></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl>
                <a href="member/printmember.php"><button class="btn btn-danger"><i class="fa fa-print"></i> Print Member Barcode</button></a>
                <a href="member/printlist.php"><button class="btn btn-danger"><i class="fa fa-print"></i> Print Member List</button></a>
              </dl>
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default" >
                <i class="fa fa-plus"></i> Add Member
              </button>

              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                <i class="fa fa-upload"></i> Import Member
              </button></dd>
              </dl>
            </div>
            <!-- /.box-body -->
       
          <!-- /.box -->
        </div>
            </div>
            <div class="box-body">
          <?php 
          if (isset($_SESSION['status'])) {
          ?>
              <div class="alert <?php echo $_SESSION['status_code']; ?> alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa <?php echo $_SESSION['status_icon']; ?>"></i> Alert!</h4>
                <?php echo $_SESSION['status']; ?>
              </div>
          <?php unset($_SESSION['status']);} ?>
      </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>School ID</th>
                  <th>Member Full Name</th>
                  <th>Type</th>
                  <th>Level</th>
                  <th>Section</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                  <?php
              $result= mysqli_query($con,"select * from user order by user_id DESC") or die (mysqli_error());
              while ($row= mysqli_fetch_array ($result) ){
              $id=$row['user_id'];
              ?>
                <tr>
               <td><a target="_blank" href="member/printbarcode.php?code=<?php echo $row['school_number']; ?>"><?php echo $row['school_number']; ?></a></td> 
                <td><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']; ?></td> 
                <td><?php echo $row['type']; ?></td> 
                <td><?php echo $row['level']; ?></td> 
                <td><?php echo $row['section']; ?></td> 
                <td><?php echo $row['status']; ?></td>
                <td>   
                  <a href="#modal-success<?php echo $row[0]; ?>" class="btn btn-success" data-toggle="modal"><i class="fa fa-search"></i></a>
                  <a href="#modal-default<?php echo $row[0] ?>" class="btn btn-primary" data-toggle="modal"><i class="fa fa-edit"></i></a>
                  <a href="#modal-danger<?php echo $row[0]; ?>" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash"></i></a>
                </td>
                </tr>
                <!---------------------------------View Information---------------------------->
                <!----- --------------------------------Start Here----------------------------->
                <div class="modal modal-default fade" id="modal-success<?php echo $row[0];?>">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                         <?php 
                          $view = mysqli_query($con,"select * from user where user_id='".$row['user_id']."'");
                          $erow=mysqli_fetch_array($view);
                         ?>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><?php echo $erow['firstname']." ".$erow['middlename']." ".$erow['lastname']; ?></h4>
                      </div>
                      <div class="modal-body">
                       
                         <div class="box-body">
                            <dl class="dl-horizontal">
                              <dt><h4>School Id Number</h4></dt>
                              <dd><?php echo "<img src = 'BCG/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=10&text=".$erow['school_number']."&thickness=50&start=NULL&code=BCGcode128' />"; ?></dd>
                              <dt><h4>Contact number : </h4></dt>
                              <dd><h4><?php echo $erow['contact']; ?></h4></dd>
                              <dt><h4>Gender : </h4></dt>
                              <dd><h4><?php echo $erow['gender']; ?></h4></dd>
                              <dt><h4>Address : </h4></dt>
                              <dd><h4><?php echo $erow['address']; ?></h4></dd>
                              <dt><h4>Type : </h4></dt>
                              <dd><h4><?php echo $erow['type']; ?></h4></dd>
                              <dt><h4>Level : </h4></dt>
                              <dd><h4><?php echo $erow['level']; ?></h4></dd>
                              <dt><h4>Status : </h4></dt>
                              <dd><h4><?php echo $erow['status']; ?></h4></dd>
                              <dt><h4></h4></dt>
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

                          $up = mysqli_query($con,"select * from user where user_id='".$row['user_id']."'");
                          $uprow=mysqli_fetch_array($up);
                         ?>
                            <form action="member/update.php?id=<?php echo $uprow['user_id']; ?>" method="post">
                                <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Id Number</label>
                              <input type="text" value="<?php echo $uprow['school_number'] ?>" class="form-control" id="exampleInputEmail1" name="school_number" placeholder="Enter ID Number">
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-6">
                                  <label for="firstname">First Name</label>
                              <input type="text" value="<?php echo $uprow['firstname'] ?>" class="form-control" id="firstname" name="firstname" placeholder="Input FirstName">
                                </div>
                                <div class="col-md-6">
                                  <label for="middlename">Middle Name</label>
                                  <input type="name" name="middlename" id="middlename" placeholder="Input Middle Name" value="<?php echo $uprow['middlename'] ?>" class="form-control">
                                </div>
                                <div class="col-md-6">
                                  <label for="lastname">Last Name</label>
                                  <input type="text" name="lastname" id="lastname" placeholder="Input Last Name" value="<?php echo $uprow['lastname'] ?>" class="form-control">
                                </div>
                                <div class="col-md-6">
                                  <label for="gender">Gender</label>
                                  <select class="form-control" name="gender">
                                    <option value="<?php echo $uprow['gender'] ?>"><?php echo $uprow['gender']; ?></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="contact">Contact Number</label>
                              <input type="number" name="contact" id="contact" placeholder="Input Contact Number" value="<?php echo $uprow['contact'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="address">Address</label>
                              <input type="name" name="address" id="address" placeholder="Input Address" class="form-control" value="<?php echo $uprow['address'] ?>">
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="type">Type</label>
                                  <select class="form-control" name="type">
                                    <option value="<?php echo $uprow['type']; ?>"><?php echo $uprow['type']; ?></option>
                                    <option value="Teacher">Teacher</option>
                                    <option value="Student">Student</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="level">Level</label>
                                  <select class="form-control" name="level">
                                    <option value="<?php echo $uprow['level'] ?>"><?php echo $uprow['level']; ?></option>
                                    <option value="Grade 7">Grade 7</option>
                                    <option value="Grade 8">Grade 8</option>
                                    <option value="Grade 9">Grade 9</option>
                                    <option value="Grade 10">Grade 10</option>
                                    <option value="Grade 11">Grade 11</option>
                                    <option value="Grade 12">Grade 12</option>
                                    <option value="1st year">1st Year</option>
                                    <option value="2nd year">2nd year</option>
                                    <option value="3rd year">3rd year</option>
                                    <option value="4th year">4th year</option>
                                    <option value="Faculty">Faculty</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="section">Section</label>
                              <input type="name" name="section" placeholder="Section" id="section" value="<?php echo $uprow['section'] ?>" class="form-control">
                            </div>
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
                        $del = mysqli_query($con,"select * from user where user_id='".$row['user_id']."'");
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
                        <a href="member/delete.php<?php echo '?user_id='.$row[0]; ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <!---------------------------------Delete Member------------------------------->
                <!----- ------------------------------Ends Here-------------------------------->

                <?php }?>
                </tbody>
                
                <!--------------------------------Import Member-------------------------------->
                <!----- ----------------------------Start Here--------------------------------->

             <div class="modal modal-default fade" id="modal-info">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title"><i class="fa fa-upload"></i> Import Member</h4>
                    </div>
                    <div class="modal-body">

                      <div class="box-body ">
                         <a  href="upload/import_member_fmt.csv" download="">Click here to download the CSV Format</a>
                        <form class="form-horizontal well" action="member/import.php" method="post" name="upload_excel" enctype="multipart/form-data">
                          <fieldset>
                            <div class="control-group">
              
                              <label>CSV/Excel File:</label>
                            
                            <div class="controls">
                              <input type="file" multiple name="filename" id="filename" class="input-large">
                            </div>
                          </div>
                           </fieldset>
                      </div>
                     
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default pull-left" data-dismiss="modal" >Cancel</button>
                              <button type="submit"data-loading-text="Loading..." id="submit" name="submit" class="btn btn-primary">Upload</button>
                            </div>
                                 
                      </form>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->

               
                <!---------------------------------Add Member---------------------------------->
                <?php 
              include ('include/dbcon.php');
                if (isset($_POST['submit'])){
              
    //          if (!isset($_FILES['image']['tmp_name'])) {
    //          echo "";
    //          }else{
    //          $file=$_FILES['image']['tmp_name'];
    //          $image = $_FILES["image"] ["name"];
    //          $image_name= addslashes($_FILES['image']['name']);
    //          $size = $_FILES["image"] ["size"];
    //          $error = $_FILES["image"] ["error"];
    //          
    //          {
    //                if($size > 10000000) //conditions for the file
    //                {
    //                die("Format is not allowed or file size is too big!");
    //                }
    //                
    //              else
    //                {
    //
    //              move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);      
    //              $profile=$_FILES["image"]["name"];
                  $school_number = $_POST['school_number'];
                  $firstname = $_POST['firstname'];
                  $middlename = $_POST['middlename'];
                  $lastname = $_POST['lastname'];
                  $contact = $_POST['contact'];
                  $gender = $_POST['gender'];
                  $address = $_POST['address'];
                  $type = $_POST['type'];
                  $level = $_POST['level'];
                  $section = $_POST['section'];
          
          $result=mysqli_query($con,"select * from user WHERE school_number='$school_number' ") or die (mysqli_error());
          $row=mysqli_num_rows($result);
          if ($row > 0)
          {
            $_SESSION['status'] = "ID Number is already Active";
            $_SESSION['status_code'] = "alert-success";
            $_SESSION['status_icon'] ="fa-warning";
          echo "<script>window.location='member.php'</script>";
          }
          else
          {   
            mysqli_query($con,"insert into user (school_number,firstname, middlename, lastname, contact, gender, address, type, level, section, status, user_added)
            values ('$school_number','$firstname', '$middlename', '$lastname', '$contact', '$gender', '$address', '$type', '$level', '$section', 'Active', NOW())")or die(mysqli_error());
            $_SESSION['status'] = "New Member Successfully Added";
            $_SESSION['status_code'] = "alert-success";
            $_SESSION['status_icon'] ="fa-check";
            echo "<script>window.location='member.php'</script>";
          }
      //            }
      //            }
              }
                ?>
                <!----- ----------------------------Start Here--------------------------------->
                    <div class="modal fade" id="modal-default">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Add Member</h4>
                          </div>
                          <div class="modal-body">
                            <form action="" method="post">
                                <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Id Number</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" name="school_number" placeholder="Enter ID Number">
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-6">
                                  <label for="firstname">First Name</label>
                              <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Input FirstName">
                                </div>
                                <div class="col-md-6">
                                  <label for="middlename">Middle Name</label>
                                  <input type="name" name="middlename" id="middlename" placeholder="Input Middle Name" class="form-control">
                                </div>
                                <div class="col-md-6">
                                  <label for="lastname">Last Name</label>
                                  <input type="text" name="lastname" id="lastname" placeholder="Input Last Name" class="form-control">
                                </div>
                                <div class="col-md-6">
                                  <label for="gender">Gender</label>
                                  <select class="form-control" name="gender">
                                    <option></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="contact">Contact Number</label>
                              <input type="number" name="contact" id="contact" placeholder="Input Contact Number" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="address">Address</label>
                              <input type="name" name="address" id="address" placeholder="Input Address" class="form-control">
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="type">Type</label>
                                  <select class="form-control" name="type">
                                    <option></option>
                                    <option value="Teacher">Teacher</option>
                                    <option value="Student">Student</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="level">Level</label>
                                  <select class="form-control" name="level">
                                    <option></option>
                                    <option value="Grade 7">Grade 7</option>
                                    <option value="Grade 8">Grade 8</option>
                                    <option value="Grade 9">Grade 9</option>
                                    <option value="Grade 10">Grade 10</option>
                                    <option value="Grade 11">Grade 11</option>
                                    <option value="Grade 12">Grade 12</option>
                                    <option value="1st year">1st Year</option>
                                    <option value="2nd year">2nd year</option>
                                    <option value="3rd year">3rd year</option>
                                    <option value="4th year">4th year</option>
                                    <option value="Faculty">Faculty</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="section">Section</label>
                              <input type="name" name="section" placeholder="Section" id="section" class="form-control">
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

                <tfoot>
                <tr>
                  <th>School ID</th>
                  <th>Member Full Name</th>
                  <th>Type</th>
                  <th>Level</th>
                  <th>Section</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>  
          </div>
          <br>
            <!-- /.box-body -->
          
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
