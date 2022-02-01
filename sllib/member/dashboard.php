
<!DOCTYPE html>
<html lang="en">
<?php require ('session.php'); ?>
<head>
  <meta charset="utf-8">
  <title>SLTCFI LMS</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="../img/logo.png" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <?php
              include('include/dbcon.php');
              $user_query=mysqli_query($con,"select *  from user where user_id='$id_session'")or die(mysqli_error());
              $row=mysqli_fetch_array($user_query); {
            ?>
          <h1 style="font-family: Segoe Script;"><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']; ?></h1>
        </div>
        <?php } ?>
        <h1>Welcome </h1>
        
              </div>
    </div>
  </section>

  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><h2 style="font-family: Segoe Script; color: white;">SLTCFI LMS</h2></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#testimonials">Transaction Information</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

  <!--==========================
  Porfolio Section
  
  <section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Portfolio</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Si stante, hoc natura videlicet vult, salvam esse se, quod concedimus ses haec dicturum fuisse</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-1.jpg);" href="">
            <div class="details">
              <h4>Portfolio 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-2.jpg);" href="">
            <div class="details">
              <h4>Portfolio 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-3.jpg);" href="">
            <div class="details">
              <h4>Portfolio 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-4.jpg);" href="">
            <div class="details">
              <h4>Portfolio 4</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-5.jpg);" href="">
            <div class="details">
              <h4>Portfolio 5</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-6.jpg);" href="">
            <div class="details">
              <h4>Portfolio 6</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-7.jpg);" href="">
            <div class="details">
              <h4>Portfolio 7</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-8.jpg);" href="">
            <div class="details">
              <h4>Portfolio 8</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>
============================-->
 <!--==========================
  Testimonials Section
  ============================-->
  <section id="testimonials">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Transaction Information</h3>
          <div class="section-title-divider"></div>
        </div>
      </div>
<br>
      <div class="row">            
  <table class="table table-striped">
    <thead>
        
      <tr>
        <th>Barcode</th>
        <th>Title</th>
        <th>Author</th>
        <th>ISBN</th>
        <th>Date Borrowed</th>
        <th>Due Date</th>
        <th>Penalty</th>
      </tr>
    </thead>
    <?php 
                $borrow_query = mysqli_query($con,"SELECT * FROM borrow_book
                  LEFT JOIN book ON borrow_book.book_id = book.book_id
                  WHERE user_id = '".$id_session."' && borrowed_status = 'borrowed' ORDER BY borrow_book_id DESC") or die(mysqli_error());
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
                  
              <?php 
                                }
              ?>
    </tbody>
  </table>
      </div>

    </div>
  </section>
  <!--==========================
  Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contact Us</h3>
          <div class="section-title-divider"></div>
          <p class="section-description"></p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>Ramon Santos ST. Brgy. 33 Penaranda, Legazpi City</p>
            </div>

            <div>
              <i class="fa fa-facebook"></i>
              <p>www.facebook.com/sltcfi</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>(052) 480 8939</p>
            </div>

          </div>
        </div>

        <div class="col-md-5 col-md-push-2">
          <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Astillero%20Building,%20Quezon%20Ave,%20Oro%20Site,%20Legazpi%20City,%20Albay&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">google maps widget html</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
  Footer
============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>SLTCFI Legazpi</strong>. All Rights Reserved
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>


</body>

</html>