<?php
include './db.connection/db_connection.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Foton Decors</title>
  <link href="images/favicon.png" rel="icon">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <?php include 'header.php'; ?>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Our Works</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Gallery <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>


  <section id="contact" class="contact">



    <div class="container  blog_container" >

      <div class="container mb-5">

        <h3 class="text-center blog_heading">Completed Projects</h3>
        <div class="row">
          <?php
          // Fetch completed projects
          $completed_sql = "SELECT id, image_path FROM project_images WHERE project_type = 'completed' ORDER BY created_at DESC";
          $completed_result = $conn->query($completed_sql);

          if ($completed_result->num_rows > 0) {
            while ($completed_row = $completed_result->fetch_assoc()) {
              $image_base = "admin/public/";
              $image_path = $image_base . $completed_row['image_path'];
              echo "
          <div class='col-6 col-md-3 col-custom my-2  d-flex flex-column justify-content-center'>
            <div class='card card-custom'>
              <img src='{$image_path}' class='card-img-top' alt='Completed Project'>
            </div>
          </div>
        ";
            }
          } else {
            echo "<p>No completed projects found.</p>";
          }
          ?>
        </div>
      </div>


      <div class="container  blog_container ">
        <h3 class="text-center blog_heading">Ongoing Projects</h3>
        <div class="row mb-5">
          <?php
          // Fetch ongoing projects
          $ongoing_sql = "SELECT id, image_path FROM project_images WHERE project_type = 'ongoing' ORDER BY created_at DESC";
          $ongoing_result = $conn->query($ongoing_sql);

          if ($ongoing_result->num_rows > 0) {
            while ($ongoing_row = $ongoing_result->fetch_assoc()) {
              $image_base = "admin/public/";
              $image_path = $image_base . $ongoing_row['image_path'];
              echo "
          <div class='col-6 col-md-3 col-custom my-2 d-flex flex-column justify-content-center'>
            <div class='card card-custom'>
              <img src='{$image_path}' class='card-img-top' alt='Ongoing Project'>
            </div>
          </div>
        ";
            }
          } else {
            echo "<p>No ongoing projects found.</p>";
          }
          ?>
        </div>

      </div>

    </div>


  </section>



  <?php include('./footer.php'); ?>




  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>