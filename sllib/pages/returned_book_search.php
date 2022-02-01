
<!DOCTYPE html>
<?php require ('session.php'); 
?>
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
              <?php if($row['admin_image'] != ""){?>
              <img src="../img/upload/<?php echo $row['admin_image']; ?>" class="user-image" alt="User Image">
              <?php }else{?>
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
                <?php }else{?>
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
        <li><a href="member.php"><i class="fa fa-users "></i> <span>Members</span></a></li>
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
        <i class="fa fa-users"></i> Returned Books
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Returned Books</li>
      </ol>

    <br>
    <div class="box box-primary">
    <div class="row">
        <div class="col-md-6">
          
            <div class="box-header with-border">
              

              <h3 class="box-title"><h3 class="box-title"><i class="fa fa-book"></i> Returned Books Monitoring
              </h3></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
            </div>
            <!-- /.box-body -->
          
          <!-- /.box -->
        </div>
         <div class="col-md-6">
          
            
            <div class="col-md-6">
              
            </div>
            <div class="col-md-6">
              <div class="box-header with-border">
              <a href="attendance/print.php"><button class="btn btn-danger"><i class="fa fa-print"></i> Print</button></a>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
            </div>
            <!-- /.box-body -->
          
          <!-- /.box -->
        </div>

      </div>

    <div class="row">
     
        <div class="col-xs-12">
          
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <div class="box-body">
             <form method="POST" action="returned_book_search.php" class="form-inline">
                                <div class="control-group">
                                    <div class="controls">
                                        <div class="col-md-3">
                                            
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                  <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="date" name="datefrom" placeholder="Date From" aria-describedby="inputSuccess2Status4" required value="<?php echo date('Y-m-d'); ?>" class="form-control pull-right" id="datepicker">
                                            </div>
                                              <!-- /.input group -->
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <div class="col-md-3">
                                            
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                  <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="date" name="dateto" placeholder="Date From" aria-describedby="inputSuccess2Status4" required value="<?php echo date('Y-m-d'); ?>" class="form-control pull-right" id="datepicker">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                <button type="submit" name="search" class="btn btn-primary"><i class="fa fa-calendar-o"> </i>  Search By Date Returned</button>
                
            </form>
            </div>
          </div>

        </div>
        <div class="box-body">
           <?php
      $_SESSION['datefrom'] = $_POST['datefrom'];
      $_SESSION['dateto'] = $_POST['dateto'];
    ?>
              <?php
      $datefrom = $_POST['datefrom'];
      $dateto = $_POST['dateto'];
              $return_query= mysqli_query($con,"select * from return_book 
              LEFT JOIN book ON return_book.book_id = book.book_id 
              LEFT JOIN user ON return_book.user_id = user.user_id 
              where return_book.date_returned BETWEEN '".$_POST['datefrom']." 00:00:01' and '".$_POST['dateto']." 23:59:59' 
              order by return_book.return_book_id DESC") or die (mysqli_error());
              $return_count = mysqli_num_rows($return_query);
                
              $count_penalty = mysqli_query($con,"SELECT sum(book_penalty) FROM return_book 
              where return_book.date_returned BETWEEN '".$_POST['datefrom']." 00:00:01' and '".$_POST['dateto']." 23:59:59'  ")or die(mysqli_error());
              $count_penalty_row = mysqli_fetch_array($count_penalty);
              
              ?>
              <span style="float:left;">
          <?php 
          // $count = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(*) as total FROM `report` where report.date_transaction BETWEEN '$datefrom 00:00:01' and '$dateto 23:59:59' and report.detail_action like '%$status%'")) or die(mysqli_error());
          // $count1 = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(*) as total FROM `report` WHERE `detail_action` = 'Borrowed Book'")) or die(mysqli_error());
          // $count2 = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(*) as total FROM `report` WHERE `detail_action` = 'Returned Book'")) or die(mysqli_error());
          ?>
              <a href="returned.php"><button class="btn btn-primary"><i class="fa fa-reply"></i> All Reports <?php // echo $count_penalty['total']; ?></button></a>
          <!---   <a href="borrowed_report.php"><button class="btn btn-success btn-outline"><i class="fa fa-info"></i> Borrowed Reports (<?php // echo  $count1['total']; ?>)</button></a>
              <a href="returned_report.php"><button class="btn btn-danger btn-outline"><i class="fa fa-info"></i> Returned Reports (<?php // echo $count2['total']; ?>)</button></a>
          -->
            </span>
            <br>
            <br>
                           <div class="pull-left">
                                    <div class="span">
                                      <div class="alert alert-info"><i class="icon-credit-card icon-large"></i>&nbsp;Total Amount of Penalty:&nbsp;<?php echo "Php ".$count_penalty_row['sum(book_penalty)'].".00"; ?>
                                    </div>
                                    </div>
                                </div>
        </div>
      <div class="box-header"> 
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Barcode</th>
                  <th>Borrower Name</th>
                  <th>Title</th>
                <!--- <th>Author</th>
                  <th>ISBN</th> -->
                  <th>Date Borrowed</th>
                  <th>Due Date</th>
                  <th>Date Returned</th>
                  <th>Penalty</th>
                </tr>
                </thead>
                
                <tbody>
                 <?php
              while ($return_row= mysqli_fetch_array ($return_query) ){
              $id=$return_row['return_book_id'];
?>
                <tr>
               <td><?php echo $return_row['book_barcode']; ?></td> 
                <td><?php echo $return_row['firstname']." ".$return_row['lastname']; ?></td> 
                <td><?php echo $return_row['book_title']; ?></td> 
                <td><?php echo date("M d, Y h:m:s a",strtotime($return_row['date_borrowed'])); ?></td>
                <?php
                 if ($return_row['book_penalty'] != 'No Penalty'){
                   echo "<td class='' style='width:100px;'>".date("M d, Y h:m:s a",strtotime($return_row['due_date']))."</td>";
                 }else {
                   echo "<td>".date("M d, Y h:m:s a",strtotime($return_row['due_date']))."</td>";
                 }
                
                ?>
                <?php
                 if ($return_row['book_penalty'] != 'No Penalty'){
                   echo "<td class='' style='width:100px;'>".date("M d, Y h:m:s a",strtotime($return_row['date_returned']))."</td>";
                 }else {
                   echo "<td>".date("M d, Y h:m:s a",strtotime($return_row['date_returned']))."</td>";
                 }
                
                ?>
                <?php
                 if ($return_row['book_penalty'] != 'No Penalty'){
                   echo "<td class='alert alert-warning' style='width:100px;'>Php ".$return_row['book_penalty'].".00</td>";
                 }else {
                   echo "<td>".$return_row['book_penalty']."</td>";
                 }
                
                ?> 
                </tr>
                <?php 
              }
              if ($return_count <= 0){
                echo '
                  <table style="float:right;">
                    <tr>
                      <td style="padding:10px;" class="alert alert-danger">No Books returned at this moment</td>
                    </tr>
                  </table>
                ';
              }               
              ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Barcode</th>
                  <th>Borrower Name</th>
                  <th>Title</th>
                <!--- <th>Author</th>
                  <th>ISBN</th> -->
                  <th>Date Borrowed</th>
                  <th>Due Date</th>
                  <th>Date Returned</th>
                  <th>Penalty</th>
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
