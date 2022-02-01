
<!DOCTYPE html>
<?php require ('../session.php'); ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SLTCF | Book</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="icon" type="text/css" href="../../img/logo.png">
  <link rel="stylesheet" href="../../templates/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../templates/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../templates/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../templates/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../templates/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../templates/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../templates/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../templates/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../templates/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../templates/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<link rel="stylesheet" href="../../templates/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
              include('../include/dbcon.php');
              $user_query=mysqli_query($con,"select *  from admin where admin_id='$id_session'")or die(mysqli_error());
              $row=mysqli_fetch_array($user_query); {
            ?>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php if($row['admin_image'] != ""): ?>
              <img src="../img/<?php echo $row['admin_image']; ?>" class="user-image" alt="User Image">
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
                <img src="../img/<?php echo $row['admin_image']; ?>" class="img-circle" alt="User Image">
                <?php else: ?>
                  <img src="../img/logo.png" class="img-circle" alt="User Image">
                <p>
                   <?php endif; ?>
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
  include('../include/dbcon.php');
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
          <img src="../../img/<?php echo $row['admin_image']; ?>" class="img-circle" alt="User Image">
          <?php else: ?>
           <img src="../../img/logo.png" class="img-circle" alt="User Image">

        </div>
        <div class="pull-left info">
           <?php endif; ?>
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
       <li><a href="../dashboard.php"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>
        <li><a href="../member.php"><i class="fa fa-users "></i> <span>Members</span></a></li>
        <li class="active"><a href="../book.php"><i class="fa fa-book "></i> <span>Books</span></a></li>
        <li><a href="../admin.php"><i class="fa fa-user"></i> <span>Admin</span></a></li>
        <li><a href="../attendances.php"><i class="fa fa-users"></i> <span>Members Attendances</span></a></li>
        </a></li>
        <li class="header">Transaction Information</li>
        <li><a href="../borrow.php"><i class="fa fa-edit"></i> <span>Borrow</span></a></li>
        <li><a href="../borrowed.php"><i class="fa fa-book"></i> <span>Borrowed Books</span></a></li>
        <li><a href="../returned.php"><i class="fa fa-book"></i> <span>Returned Books</span></a></li>
        <li><a href="../setting.php"><i class="fa fa-cogs"></i> <span>Setting</span></a></li>
        <li><a href="../report.php"><i class="fa fa-file"></i> <span>Reports</span></a></li>
        <li><a href="../about.php"><i class="fa fa-info"></i> <span>About Us</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Book
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Book</li>
      </ol>
    <br>
          <div class="box-header">
              
                  <div class="row">
        <div class="col-md-6">
          
            <div class="box-header with-border">
              

              <h3 class="box-title"><h3 class="box-title"><i class="fa fa-users"></i> Book Information</h3></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl>
                <a href="print.php"><button class="btn btn-danger"><i class="fa fa-print"></i> Print Book Barcode</button></a>
                <a href="printlist.php"><button class="btn btn-danger"><i class="fa fa-print"></i> Print Book List</button></a>
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
                <dd >
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default" >
                <i class="fa fa-plus"></i> Add Book
              </button>
                </dd>
              </dl>
            </div>
            <!-- /.box-body -->
             <!---------------------------------Add Book---------------------------------->
                  <?php

                        include ('../include/dbcon.php');

                        $query = mysqli_query($con,"SELECT * FROM `barcode` ORDER BY mid_barcode DESC ") or die (mysqli_error());
                        $fetch = mysqli_fetch_array($query);
                        $mid_barcode = $fetch['mid_barcode'];
                        
                        $new_barcode =  $mid_barcode + 1;
                        $pre_barcode = "SLTCFI";
                        $suf_barcode = "LMS";
                        $generate_barcode = $pre_barcode.$new_barcode.$suf_barcode;
                         ?>
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

                                  move_uploaded_file($_FILES["image"]["tmp_name"],"../../img/upload/books/" . $_FILES["image"]["name"]);          
                                  $book_image=$_FILES["image"]["name"];
                                  
                                  $book_title=$_POST['book_title'];
                                  $category_id=$_POST['category_id'];
                                  $author=$_POST['author'];
                                  $author_2=$_POST['author_2'];
                                  $author_3=$_POST['author_3'];
                                  $author_4=$_POST['author_4'];
                                  $author_5=$_POST['author_5'];
                                  $book_copies=$_POST['book_copies'];
                                  $book_pub=$_POST['book_pub'];
                                  $publisher_name=$_POST['publisher_name'];
                                  $isbn=$_POST['isbn'];
                                  $copyright_year=$_POST['copyright_year'];
                                  $status=$_POST['status'];
                                  
                                  
                                  $pre = "SLTCFI";
                                  $mid = $_POST['new_barcode'];
                                  $suf = "LMS";
                                  $gen = $pre.$mid.$suf;
                                  
                                  if ($status == 'Lost') {
                                      $remark = 'Not Available';
                                  } elseif ($status == 'Damaged') {
                                      $remark = 'Not Available';
                                  } else {
                                      $remark = 'Available';
                                  }
                                  
                                  {
                                  mysqli_query($con,"insert into book (book_title,category_id,author,author_2,author_3,author_4,author_5,book_copies,book_pub,publisher_name,isbn,copyright_year,status,book_barcode,book_image,date_added,remarks)
                                  values('$book_title','$category_id','$author','$author_2','$author_3','$author_4','$author_5','$book_copies','$book_pub','$publisher_name','$isbn','$copyright_year','$status','$gen','$book_image',NOW(),'$remark')")or die(mysqli_error());
                                  
                                  mysqli_query($con,"insert into barcode (pre_barcode,mid_barcode,suf_barcode) values ('$pre', '$mid', '$suf') ") or die (mysqli_error());
                                  }
                                  header("location: barcode.php?code=".$gen);
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
                            <h4 class="modal-title">Add Book</h4>
                          </div>
                          
                          <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="new_barcode" value="<?php echo $new_barcode; ?>">
                                <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Title</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" name="book_title" placeholder="Enter Book Title" required>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-6">
                                  <label for="firstname">Author 1</label>
                              <input type="text" class="form-control" id="firstname" name="author" placeholder="Input Author" required>
                                </div>
                                <div class="col-md-6">
                                  <label for="middlename">Author 2</label>
                                  <input type="name" name="author_2" id="middlename" placeholder="Input Author" class="form-control">
                                </div>
                                <div class="col-md-6">
                                  <label for="lastname">Author 3</label>
                                  <input type="text" name="author_3" id="lastname" placeholder="Input Author" class="form-control">
                                </div>
                                <div class="col-md-6">
                                  <label for="lastname">Author 4</label>
                                  <input type="text" name="author_4" id="lastname" placeholder="Input Author" class="form-control">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="contact">Author 5</label>
                              <input type="text" name="author_4" id="contact" placeholder="Input Author" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="address">Publication</label>
                              <input type="name" name="name_pub" id="address" placeholder="Input Publication" class="form-control">
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="address">Publisher</label>
                              <input type="name" name="publisher_name" id="address" placeholder="Input Publisher" class="form-control">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="isbn">ISBN</label>
                                  <input type="text" name="isbn" placeholder="Input ISBN" class="form-control" id="isbn" required>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="Copyright">Copyright</label>
                                  <input type="text" name="copyright_year" class="form-control" id="Copyright">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="Copies">Copies</label>
                                  <input type="number" name="book_copies" class="form-control" required step="1" min="0" max="1000">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="level">Status</label>
                                  <select class="form-control" name="status" required tabindex="-1">
                                    <option></option>
                                    <option value="New">New Book</option>
                                    <option value="Old">Old Book</option>
                                    <option value="Lost">Lost Book</option>
                                    <option value="Damaged">Damaged Book</option>
                                    <option value="Replacement">For Replacement</option>
                                    <option value="Hardbound">HardBound</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                                    <label for="last-name">Book Image
                                    </label>
                                    
                                        <input type="file" style="height:44px;" name="image" id="last-name" class="form-control">
                                    
                                </div>
                            <div class="form-group">
                              <label for="section">Category</label>
                              <select class="form-control" name="category_id" required tabindex="-1">
                                <?php
                                        $result= mysqli_query($con,"select * from category") or die (mysqli_error());
                                        while ($row= mysqli_fetch_array ($result) ){
                                        $id=$row['category_id'];
                                        ?>
                                <option value="<?php echo $row['category_id']; ?>"><?php echo $row['classname']; ?></option>
                                <?php } ?>
                              </select>
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
                <!---------------------------------Add Book------------------------------------>
                <!----- -----------------------------Ends here--------------------------------->
          <!-- /.box -->
        </div>
       
            </div>
            <!-- /.box-header -->
            
        <div class="col-xs-12">
            <div class="box-body">
              <a href="../book.php"><button type="button" class="btn btn-primary" >All</button></a>
              <a href="new_book.php"><button type="button" class="btn btn-primary">New Book</button></a>
              <a href="old_book.php"><button type="button" class="btn btn-primary">Old Book</button></a>
              <a href="lost_book.php"><button type="button" class="btn btn-primary">Lost Book</button></a>
              <a href="damaged_book.php"><button type="button" class="btn btn-primary">Damaged Book</button></a>
              <a href="SFR.php"><button type="button" class="btn btn-primary">Subject for Replacement</button></a>
              <a href="hard.php"><button type="button" class="btn btn-primary">Hardbound Book</button></a>
            </div>
          </div>
        
      
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Book Image</th>
                  <th>Barcode</th>
                  <th>Title</th>
                  <th>ISBN</th>
                  <th>Author/s</th>
                  <th>Copies</th>
                  <th>Category</th>
                  <th>Status</th>
                  <th>Remarks</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                 
              <?php
              $result= mysqli_query($con,"select * from book where status = 'Old'") or die (mysqli_error());
              while ($row= mysqli_fetch_array ($result) ){
              $id=$row['book_id'];
              $category_id=$row['category_id'];
              
              $cat_query = mysqli_query($con,"select * from category where category_id = '$category_id'")or die(mysqli_error());
              $cat_row = mysqli_fetch_array($cat_query);
              ?>
                <tr>

                <td><?php if($row['book_image'] != ""): ?>
                <img src="../../img/upload/books/<?php echo $row['book_image']; ?>" class="img-thumbnail" width="75px" height="50px">
                <?php else: ?>
                <img src="../../img/no-image-available.png" class="img-thumbnail" width="75px" height="50px">
                <?php endif; ?></td> 
                <td><a target="_blank" href="book/printbarcode.php?code=<?php echo $row['book_barcode']; ?>"><?php echo $row['book_barcode']; ?></a></td> 
                <td><?php echo $row['book_title']; ?></td> 
                <td><?php echo $row['isbn']; ?></td> 
                <td><?php echo $row['author']."<br />".$row['author_2']."<br />".$row['author_3']."<br />".$row['author_4']."<br />".$row['author_5']; ?></td> 
                <td><?php echo $row['book_copies']; ?></td>
                <td><?php echo $cat_row['classname']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td><?php echo $row['remarks']; ?></td>
                <td>
                  <a href="#modal-success<?php echo $row[0]; ?>" class="btn btn-success" data-toggle="modal"><i class="fa fa-search"></i></a>
                  <a href="#modal-default<?php echo $row[0] ?>" class="btn btn-primary" data-toggle="modal"><i class="fa fa-edit"></i></a>
                  <a href="#modal-danger<?php echo $row[0]; ?>" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash"></i></a>
                  

                </td>
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

                          $up = mysqli_query($con,"select * from book where book_id='".$row['book_id']."'");
                          $uprow=mysqli_fetch_array($up);
                         ?>
                            <form enctype="multipart/form-data" action="update.php?id=<?php echo $uprow['book_id']; ?>" method="post">
                                
                            <div class="form-group">
                                 <div class="box-body">       
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="last-name">Admin Image</label><br>
                                    <a href=""><?php if($row['book_image'] != ""): ?>
                                    <img src="../../img/upload/books/<?php echo $row['book_image']; ?>" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
                                    <?php else: ?>
                                    <img src="../../img/no-image-available.png" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
                                    <?php endif; ?>
                                    </a>       
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Book Title</label>
                                        <input type="name" name="book_title" id="address" placeholder="Input Username" class="form-control" value="<?php echo $uprow['book_title'];  ?>">
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
                                        <label for="exampleInputEmail1">Author 1</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="firstname" value="<?php echo $uprow['author'] ?>" placeholder="Author">
                                      </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Author 2</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="author_2" value="<?php echo $uprow['author_2'] ?>" placeholder="Input Author 2">
                                  </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="middlename">Author 3</label>
                                  <input type="name" name="author_3" id="middlename" placeholder="Input Author 3" class="form-control" value="<?php echo $uprow['author_3'] ?>"> 
                            </div>
                            <div class="row">
                              <div class="form-group">
                                <div class="col-md-6">
                                  <label for="pass">Author 4</label>
                                  <input type="text" placeholder="Input Author 4" name="password" class="form-control" value="<?php echo $uprow['author_4'] ?>">
                                </div>
                                <div class="col-md-6">
                                  <label for="con">Author 5</label>
                              <input type="text" name="author_5" class="form-control" placeholder="Author 5" value="<?php echo $uprow['author_5'] ?>">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label>Publication</label>
                              <input type="text" name="book_pub" placeholder="Please Input Publication" required class="form-control" value="<?php echo $uprow['book_pub'] ?>">
                            </div>
                            <div class="form-group">
                              <label>Publisher</label>
                              <input type="text" name="publisher_name" class="form-control" required value="<?php echo $uprow['publisher_name'] ?>" placeholder="Please Input Publisher">
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>ISBN</label>
                                  <input type="text" name="isbn" class="form-control" required value="isbn" placeholder="Please Input ISBN">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Copyright</label>
                                  <input type="tect" name="copyright_year" class="form-control" value="<?php echo $uprow['copyright_year'] ?>" placeholder="Please Input Copyright">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Copies</label>
                                  <input type="tect" name="book_copies" class="form-control" value="<?php echo $uprow['book_copies'] ?>" placeholder="Please Input Copies">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Status</label>
                                  <select name="status" class="select2_single form-control" tabindex="-1" >
                                      <option value="<?php echo $uprow['status']; ?>"><?php echo $uprow['status']; ?></option>
                                      <option value="New">New</option>
                                      <option value="Old">Old</option>
                                      <option value="Lost">Lost</option>
                                      <option value="Damaged">Damaged</option>
                                      <option value="Replacement">Replacement</option>
                                      <option value="Hardbound">Hardbound</option>
                                  </select>
                                </div>
                              </div>
                            </div>  
                            <div class="form-group">
                              <label>Category</label>
                              <select name="category_id" class="form-control" tabindex="-1" >
                        
                          <?php
                    $cat= mysqli_query($con,"select * from category") or die (mysqli_error());
                    while ($catrow= mysqli_fetch_array ($cat) ){
                    $id=$catrow['category_id'];
                    ?>
                    <option value="<?php echo $catrow['category_id']; ?>"><?php echo $catrow['classname']; ?></option>
                    <?php } ?>
                              </select>
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

                <!---------------------------------View Information---------------------------->
                <!----- --------------------------------Start Here----------------------------->
                <div class="modal modal-default fade" id="modal-success<?php echo $row[0];?>">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                         <?php 
                          $view = mysqli_query($con,"select * from book where book_id='".$row['book_id']."'");
                          $erow=mysqli_fetch_array($view);
                         ?>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><?php echo $erow['book_title']; ?></h4>
                      </div>
                      <div class="modal-body">
                         <div class="box-body">
                            <div class="row">
                              <div class="col-md-6">
                                <dl class="dl-horizontal">
                                  <dt><h4>Author/s : </h4></dt>
                                  <dd><h4><?php echo $erow['author']." ".$erow['author_2']." ".$erow['author_3']."".$erow['author_4']." ".$erow['author_5']; ?></h4></dd>
                                  <dt><h4>Publisher Name : </h4></dt>
                                  <dd><h4><?php echo $erow['publisher_name']; ?></h4></dd>
                                  <dt><h4>Copyright Year : </h4></dt>
                                  <dd><h4><?php echo $erow['copyright_year']; ?></h4></dd>
                                  <dt><h4>ISBN : </h4></dt>
                                  <dd><h4><?php echo $erow['isbn']; ?></h4></dd>
                                  <dt><h4>Book Publish : </h4></dt>
                                  <dd><h4><?php echo $erow['book_pub']; ?></h4></dd>
                                  <dt><h4>Status : </h4></dt>
                                  <dd><h4><?php echo $erow['status']; ?></h4></dd>
                              </dl>
                              </div>
                              <div class="col-md-6">
                                <h3 class="box-title"><h3 class="box-title">User Added : <i class="fa fa-calendar-o"></i> <?php echo date("M d, Y h:m:s a", strtotime($erow['date_added'])); ?></h3></h3>
                                <dl class="dl-horizontal">
                                <dt><?php if($erow['book_image'] != ""): ?>
                                  <img src="../../img/upload/books/<?php echo $erow['book_image']; ?>" class="img-responsive pad" >
                                  <?php else: ?>
                                  <img src="../../img/no-image-available.png" class="img-responsive pad" >
                                  <?php endif; ?></dt>
                                </dl>
                              </div>
                            </div>
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
                </tr>
                <!---------------------------------Delete Member-------------------------------->
                <!----- --------------------------------Start Here----------------------------->
                <div class="modal modal-default fade" id="modal-danger<?php echo $row[0]; ?>">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">
                          Delete Book
                        </h4>
                      </div>
                      <?php 
                    $del = mysqli_query($con,"select * from book where book_id='".$row['book_id']."'");
                          $drow=mysqli_fetch_array($del);
                       ?>
                      <div class="modal-body">
                        <p>
                          <div class="callout callout-danger">
                             <h5><center>Are you sure to delete <strong><?php echo ucwords($drow['book_title']); ?></strong> from the list? This method cannot be undone.</center></h5> 
                          </div>
                        </p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                        <a href="delete.php<?php echo '?book_id='.$row[0]; ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                
                <!---------------------------------Delete Member------------------------------->
                <!----- ------------------------------Ends Here-------------------------------->
                </tr>
                <?php }?>
                </tbody>
                <!--Info Modal-->
      

                <tfoot>
                <tr>
                  <th>Book Image</th>
                  <th>Barcode</th>
                  <th>Title</th>
                  <th>ISBN</th>
                  <th>Author/s</th>
                  <th>Copies</th>
                  <th>Category</th>
                  <th>Status</th>
                  <th>Remarks</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          
    </section>

 
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      
    </div>
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">SLTCFI | LIB</a>.</strong> All rights
    reserved.
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../templates/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../templates/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../../templates/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../../templates/bower_components/raphael/raphael.min.js"></script>
<script src="../../templates/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../../templates/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../templates/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../templates/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../templates/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../templates/bower_components/moment/min/moment.min.js"></script>
<script src="../../templates/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../../templates/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../templates/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../../templates/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src=../../templates/"bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../templates/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../templates/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src=" ../../templates/dist/js/demo.js"></script>
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
<script src="../../templates/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../templates/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
</body>
</html>
