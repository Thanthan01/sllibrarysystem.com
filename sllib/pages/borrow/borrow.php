
<!DOCTYPE html>
<?php include('../session.php'); ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SLTCFI | Borrow Book</title>
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
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
              <?php if($row['admin_image'] != ""){ ?>
              <img src="../../img/upload/<?php echo $row['admin_image']; ?>" class="user-image" alt="User Image">
              <?php }else{ ?>
              <img src="../../img/logo.png" class="user-image" alt="User Image">
              <?php } ?>
              <span class="hidden-xs"><?php echo $row['firstname']; ?></span>
            </a>
            <?php } ?>
            <ul class="dropdown-menu">
              <!-- User image -->
                <?php
                  include('../include/dbcon.php');
                  $user_query=mysqli_query($con,"select *  from admin where admin_id='$id_session'")or die(mysqli_error());
                  $row=mysqli_fetch_array($user_query); {
                ?>
              <li class="user-header">
                <?php if($row['admin_image'] != ""){ ?>
                <img src="../../img/upload/<?php echo $row['admin_image']; ?>" class="img-circle" alt="User Image">
                <?php }else{?>
                  <img src="../../img/logo.png" class="img-circle" alt="User Image">
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
                  <a href="../profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
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
          <?php if($row['admin_image'] != ""){ ?>
          <img src="../../img/upload/<?php echo $row['admin_image']; ?>" class="img-circle" alt="User Image">
          <?php }else{ ?>
           <img src="../../img/logo.png" class="img-circle" alt="User Image">
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
        <li><a href="../dashboard.php"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>
        <li><a href="../member.php"><i class="fa fa-users "></i> <span>Members</span></a></li>
        <li><a href="../book.php"><i class="fa fa-book "></i> <span>Books</span></a></li>
        <li><a href="../admin.php"><i class="fa fa-user"></i> <span>Admin</span></a></li>
        <li><a href="../attendances.php"><i class="fa fa-users"></i> <span>Members Attendances</span></a></li>
        </a></li>
        <li class="header">Transaction Information</li>
        <li class="active"><a href="../borrow.php"><i class="fa fa-edit"></i> <span>Transaction</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../borrowed.php"><i class="fa fa-book"></i> <span>Borrowed Books</span></a></li>
          <li><a href="../returned.php"><i class="fa fa-book"></i> <span>Returned Books</span></a></li>
          </ul>
        </li>
        <li><a href="../setting.php"><i class="fa fa-cogs"></i> <span>Setting</span></a></li>
        <li><a href="../about.php"><i class="fa fa-info"></i> <span>About Us</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <?php 
  $school_number = $_GET['school_number'];
  
  $user_query = mysqli_query($con,"SELECT * FROM user WHERE school_number = '$school_number' ");
  $user_row = mysqli_fetch_array($user_query);
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          Transaction Information
        </h1>
        <ol class="breadcrumb">
            <li><a href="../dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="../borrow.php">Transaction</a></li>
            <li class="active">Tranasaction Information</li>
        </ol>
      <br>
          <?php
            $sql = mysqli_query($con,"SELECT * FROM user WHERE school_number = '$school_number' ");
            $row = mysqli_fetch_array($sql);
          ?>
    <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Borrower Name : <span style="color:maroon;"><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']; ?></span></h3>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Barcode</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>ISBN</th>
                  <th>Date Borrowed</th>
                  <th>Due Date</th>
                  <th>Penalty</th>
                  <th>Action</th>
                </tr>
                </thead>
                <?php 
                $borrow_query = mysqli_query($con,"SELECT * FROM borrow_book
                  LEFT JOIN book ON borrow_book.book_id = book.book_id
                  WHERE user_id = '".$user_row['user_id']."' && borrowed_status = 'borrowed' ORDER BY borrow_book_id DESC") or die(mysqli_error());
                $borrow_count = mysqli_num_rows($borrow_query);
                while($borrow_row = mysqli_fetch_array($borrow_query)){
                  $due_date= $borrow_row['due_date'];
                
                $timezone = "Asia/Manila";
                if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
                $cur_date = date("Y-m-d H:i:s");
                $date_returned = date("Y-m-d H:i:s");
                //$due_date = strtotime($cur_date);
                //$due_date = strtotime("+3 day", $due_date);
                //$due_date = date('F j, Y g:i a', $due_date);
                ///$checkout = date('m/d/Y', strtotime("+1 day", strtotime($due_date)));
                
                  $penalty_amount_query= mysqli_query($con,"select * from penalty order by penalty_id DESC ") or die (mysqli_error());
                  $penalty_amount = mysqli_fetch_assoc($penalty_amount_query);
                  
                  if ($date_returned > $due_date) {
                    $penalty = round((float)(strtotime($date_returned) - strtotime($due_date)) / (60 * 60 *24) * ($penalty_amount['penalty_amount']));
                  } elseif ($date_returned < $due_date) {
                    $penalty = 'No Penalty';
                  } else {
                    $penalty = 'No Penalty';
                  }
              ?>
                <tbody>
                <tr>
               <td><?php echo $borrow_row['book_barcode']; ?></td>
                <td style="text-transform: capitalize"><?php echo $borrow_row['book_title']; ?></td>
                <td style="text-transform: capitalize"><?php echo $borrow_row['author']; ?></td>
                <td><?php echo $borrow_row['isbn']; ?></td>
                <td><?php echo date("M d, Y h:m:s a",strtotime($borrow_row['date_borrowed'])); ?></td>
                <?php
                  if ($borrow_row['status'] != 'Hardbound') {
                    echo "<td>".date('M d, Y h:m:s a',strtotime($borrow_row['due_date']))."</td>";
                  } else {
                    echo "<td>".'Hardbound Book, Inside Only'."</td>";
                  }
                ?>
              <!--- <td><?php // echo date("M d, Y h:m:s a",strtotime($borrow_row['due_date'])); ?></td>  -->
                <?php
                  if ($borrow_row['status'] != 'Hardbound') {
                    echo "<td>".$penalty."</td>";
                  } else {
                    echo "<td>".'Hardbound Book, Inside Only'."</td>";
                  }
                ?>
              <!--- <td><?php // echo $penalty; ?></td> -->
                <td>
                <form method="post" action="">
                <input type="hidden" name="date_returned" class="new_text" id="sd" value="<?php echo $date_returned ?>" size="16" maxlength="10"  />
                <input type="hidden" name="user_id" value="<?php echo $borrow_row['user_id']; ?>">
                <input type="hidden" name="borrow_book_id" value="<?php echo $borrow_row['borrow_book_id']; ?>">
                <input type="hidden" name="book_id" value="<?php echo $borrow_row['book_id']; ?>">
                <input type="hidden" name="date_borrowed" value="<?php echo $borrow_row['date_borrowed']; ?>">
                <input type="hidden" name="due_date" value="<?php echo $borrow_row['due_date']; ?>">
                <button name="return" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Return</button>
                </form>
                </td> 
                </tr>
                <?php 
              }
              if ($borrow_count <= 0){
                echo '
                  <table style="float:right;">
                    <tr>
                      <td style="padding:10px;" class="alert alert-danger">No books borrowed</td>
                    </tr>
                  </table>
                ';
              }               
              ?>
              <?php
                if (isset($_POST['return'])) {
                  $user_id= $_POST['user_id'];
                  $borrow_book_id= $_POST['borrow_book_id'];
                  $book_id= $_POST['book_id'];
                  $date_borrowed= $_POST['date_borrowed'];
                  $due_date= $_POST['due_date'];
                  $date_returned = $_POST['date_returned'];

                  $update_copies = mysqli_query($con,"SELECT * from book where book_id = '$book_id' ") or die (mysqli_error());
                  $copies_row= mysqli_fetch_assoc($update_copies);
                  
                  $book_copies = $copies_row['book_copies'];
                  $new_book_copies = $book_copies + 1;
                  
                  if ($new_book_copies == '0') {
                    $remark = 'Not Available';
                  } else {
                    $remark = 'Available';
                  }
                  
                  mysqli_query($con,"UPDATE book SET book_copies = '$new_book_copies' where book_id = '$book_id'") or die (mysqli_error());
                  mysqli_query($con,"UPDATE book SET remarks = '$remark' where book_id = '$book_id' ") or die (mysqli_error());
                
                  $timezone = "Asia/Manila";
                  if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
                  $cur_date = date("Y-m-d H:i:s");
                  $date_returned_now = date("Y-m-d H:i:s");
                  //$due_date = strtotime($cur_date);
                  //$due_date = strtotime("+3 day", $due_date);
                  //$due_date = date('F j, Y g:i a', $due_date);
                  ///$checkout = date('m/d/Y', strtotime("+1 day", strtotime($due_date)));      
                  
                  $penalty_amount_query= mysqli_query($con,"select * from penalty order by penalty_id DESC ") or die (mysqli_error());
                  $penalty_amount = mysqli_fetch_assoc($penalty_amount_query);
                  
                  if ($date_returned > $due_date) {
                    $penalty = round((float)(strtotime($date_returned) - strtotime($due_date)) / (60 * 60 *24) * ($penalty_amount['penalty_amount']));
                  } elseif ($date_returned < $due_date) {
                    $penalty = 'No Penalty';
                  } else {
                    $penalty = 'No Penalty';
                  }
                
                  mysqli_query($con,"UPDATE borrow_book SET borrowed_status = 'returned', date_returned = '$date_returned_now', book_penalty = '$penalty' WHERE borrow_book_id= '$borrow_book_id' and user_id = '$user_id' and book_id = '$book_id' ") or die (mysqli_error());
                  
                  mysqli_query($con,"INSERT INTO return_book (user_id, book_id, date_borrowed, due_date, date_returned, book_penalty)
                  values ('$user_id', '$book_id', '$date_borrowed', '$due_date', '$date_returned', '$penalty')") or die (mysqli_error());
                  
                  $report_history1=mysqli_query($con,"select * from admin where admin_id = $id_session ") or die (mysqli_error());
                  $report_history_row1=mysqli_fetch_array($report_history1);
                  $admin_row1=$report_history_row1['firstname']." ".$report_history_row1['middlename']." ".$report_history_row1['lastname'];  
                  
                  mysqli_query($con,"INSERT INTO report 
                  (book_id, user_id, admin_name, detail_action, date_transaction)
                  VALUES ('$book_id','$user_id','$admin_row1','Returned Book',NOW())") or die(mysqli_error());
                  
              ?>
                  <script>
                    window.location="borrow.php?school_number=<?php echo $school_number ?>";
                  </script>
              <?php 
                                }
              ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Barcode</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>ISBN</th>
                  <th>Date Borrowed</th>
                  <th>Due Date</th>
                  <th>Penalty</th>
                  <th>Action</th>
                </tfoot>
              </tr>
              </table>
            <br>
            <form method="post">
              <div class="col-xs-4">
                <input type="text" style="margin-bottom:10px; margin-left:-9px;" class="form-control" name="barcode" placeholder="Enter barcode here....." autofocus required />
              </div>
            </form>
            <table class="table table-bordered">
              <form method="post" action="">
              <tr>
                <th style="width:100px;">Book Image</th>
                <th>Barcode</th>
                <th>Title</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              <?php 
                if (isset($_POST['barcode'])){
                  $barcode = $_POST['barcode'];
                  
                  $book_query = mysqli_query($con,"SELECT * FROM book WHERE book_barcode = '$barcode' ") or die (mysqli_error());
                  $book_count = mysqli_num_rows($book_query);
                  $book_row = mysqli_fetch_array($book_query);
                  
                  if ($book_row['book_barcode'] != $barcode){
                    echo '
                      <table>
                        <tr>
                          <td class="alert alert-info">No match for the barcode entered!</td>
                        </tr>
                      </table>
                    ';
                  } elseif ($barcode == '') {
                    echo '
                      <table>
                        <tr>
                          <td class="alert alert-info">Enter the correct details!</td>
                        </tr>
                      </table>
                    ';
                  }else{
              ?>
              <tbody>
                <tr>
              <input type="hidden" name="user_id" value="<?php echo $user_row['user_id'] ?>">
              <input type="hidden" name="book_id" value="<?php echo $book_row['book_id'] ?>">

              <td>
              <?php if($book_row['book_image'] != ""): ?>
              <img src="../../img/upload/books/<?php echo $book_row['book_image']; ?>" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
              <?php else: ?>
              <img src="../../img/no-image-available.png" width="150px" height="180px" style="border:4px groove #CCCCCC; border-radius:5px;">
              <?php endif; ?>
              </td> 
              <td><?php echo $book_row['book_barcode'] ?></td>
              <td style="text-transform: capitalize"><?php echo $book_row['book_title'] ?></td>
              <td style="text-transform: capitalize"><?php echo $book_row['author'] ?></td>
              <td><?php echo $book_row['isbn'] ?></td>
              <td><?php echo $book_row['status'] ?></td>
              <td>
                <button name="borrow" class="btn btn-info"><i class="fa fa-check"></i> Borrow</button>
              </td>
              </tr>
              <?php } }?>

              <?php
              
              $allowable_days_query= mysqli_query($con,"select * from allowed_days order by allowed_days_id DESC ") or die (mysqli_error());
              $allowable_days_row = mysqli_fetch_assoc($allowable_days_query);
              
              $timezone = "Asia/Manila";
              if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
              $cur_date = date("Y-m-d H:i:s");
              $date_borrowed = date("Y-m-d H:i:s");
              $due_date = strtotime($cur_date);
              $due_date = strtotime("+".$allowable_days_row['no_of_days']." day", $due_date);
              $due_date = date('Y-m-d H:i:s', $due_date);
              ///$checkout = date('m/d/Y', strtotime("+1 day", strtotime($due_date)));
              ?>
              <input type="hidden" name="due_date" class="new_text" id="sd" value="<?php echo $due_date ?>" size="16" maxlength="10"  />
              <input type="hidden" name="date_borrowed" class="new_text" id="sd" value="<?php echo $date_borrowed ?>" size="16" maxlength="10"  />
              
              <?php 
                if (isset($_POST['borrow'])){
                  $user_id =$_POST['user_id'];
                  $book_id =$_POST['book_id'];
                  $date_borrowed =$_POST['date_borrowed'];
                  $due_date =$_POST['due_date'];
                  
                  $trapBookCount= mysqli_query($con,"SELECT count(*) as books_allowed from borrow_book where user_id = '$user_id' and borrowed_status = 'borrowed'") or die (mysqli_error());
                  
                  $countBorrowed = mysqli_fetch_assoc($trapBookCount);
                  
                  $bookCountQuery= mysqli_query($con,"SELECT count(*) as book_count from borrow_book where user_id = '$user_id' and borrowed_status = 'borrowed' and book_id = $book_id") or die (mysqli_error());
                  
                  $bookCount = mysqli_fetch_assoc($bookCountQuery);
                  
                  $allowed_book_query= mysqli_query($con,"select * from allowed_book order by allowed_book_id DESC ") or die (mysqli_error());
                  $allowed = mysqli_fetch_assoc($allowed_book_query);
                  
                  if ($countBorrowed['books_allowed'] == $allowed['qntty_books']){
                    echo "<script>alert(' ".$allowed['qntty_books']." ".'Books Allowed per User!'." '); window.location='borrow_book.php?school_number=".$school_number."'</script>";
                  }elseif ($bookCount['book_count'] == 1){
                    echo "<script>alert('Book Already Borrowed!'); window.location='borrow.php?school_number=".$school_number."'</script>";
                  }else{
                    
                  $update_copies = mysqli_query($con,"SELECT * from book where book_id = '$book_id' ") or die (mysqli_error());
                  $copies_row= mysqli_fetch_assoc($update_copies);
                  
                  $book_copies = $copies_row['book_copies'];
                  $new_book_copies = $book_copies - 1;
                  
                  if ($new_book_copies < 0){
                    echo "<script>alert('Book out of Copy!'); window.location='borrow_book.php?school_number=".$school_number."'</script>";
                  }elseif ($copies_row['status'] == 'Damaged'){
                    echo "<script>alert('Book Cannot Borrow At This Moment!'); window.location='borrow_book.php?school_number=".$school_number."'</script>";
                  }elseif ($copies_row['status'] == 'Lost'){
                    echo "<script>alert('Book Cannot Borrow At This Moment!'); window.location='borrow.php?school_number=".$school_number."'</script>";
                  }else{
                    
                  if ($new_book_copies == '0') {
                    $remark = 'Not Available';
                  } else {
                    $remark = 'Available';
                  }
                  
                  mysqli_query($con,"UPDATE book SET book_copies = '$new_book_copies' where book_id = '$book_id' ") or die (mysqli_error());
                  mysqli_query($con,"UPDATE book SET remarks = '$remark' where book_id = '$book_id' ") or die (mysqli_error());
                  
                  mysqli_query($con,"INSERT INTO borrow_book(user_id,book_id,date_borrowed,due_date,borrowed_status)
                  VALUES('$user_id','$book_id','$date_borrowed','$due_date','borrowed')") or die (mysqli_error());
                  
                  $report_history=mysqli_query($con,"select * from admin where admin_id = $id_session ") or die (mysqli_error());
                  $report_history_row=mysqli_fetch_array($report_history);
                  $admin_row=$report_history_row['firstname']." ".$report_history_row['middlename']." ".$report_history_row['lastname'];  
                  
                  mysqli_query($con,"INSERT INTO report 
                  (book_id, user_id, admin_name, detail_action, date_transaction)
                  VALUES ('$book_id','$user_id','$admin_row','Borrowed Book',NOW())") or die(mysqli_error());
                  
                  }
                  }
              ?>
                  <script>
                    window.location="borrow.php?school_number=<?php echo $school_number ?>";
                  </script>
              <?php 
                }
              ?>
              </tbody>
            </form>
            </table>
        </div>
        <br> 
        </div>
        <br>
          <!-- /.box -->
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
</body>
</html>
