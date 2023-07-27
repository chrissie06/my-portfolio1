<!DOCTYPE html>
<html>

<head>
  
  <title>Chrissie's Avon Store</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

<header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">Chrissie's Store</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a  class="active" href="about.php">About</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>

  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">
        <?php
        // Database connection details
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "portfolio_db";

        // Create a connection to the database
        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

        // Check the connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        // Fetch facts from the database
        $facts_query = "SELECT * FROM about_info WHERE section_type='facts'";
        $facts_result = $conn->query($facts_query);

        if ($facts_result->num_rows > 0) {
          $facts_row = $facts_result->fetch_assoc();
          echo '<div class="section-title">';
          echo '<h2>' . $facts_row["title"] . '</h2>';
          echo '<p>' . $facts_row["description"] . '</p>';
          echo '</div>';

          echo '<div class="row counters">';
          while ($facts_row = $facts_result->fetch_assoc()) {
            echo '<div class="col-lg-3 col-6 text-center">';
            echo '<span class="purecounter">' . $facts_row["description"] . '</span>';
            echo '<p>' . $facts_row["title"] . '</p>';
            echo '</div>';
          }
          echo '</div>';
        }
        ?>
      </div>
    </section>
    <!-- End Facts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <?php
        // Fetch testimonials from the database
        $testimonials_query = "SELECT * FROM about_info WHERE section_type='testimonials'";
        $testimonials_result = $conn->query($testimonials_query);

        if ($testimonials_result->num_rows > 0) {
          $testimonials_row = $testimonials_result->fetch_assoc();
          echo '<div class="section-title">';
          echo '<h2>' . $testimonials_row["title"] . '</h2>';
          echo '<p>' . $testimonials_row["description"] . '</p>';
          echo '</div>';

          echo '<div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">';
          echo '<div class="swiper-wrapper">';

          while ($testimonials_row = $testimonials_result->fetch_assoc()) {
            echo '<div class="swiper-slide">';
            echo '<div class="testimonial-item">';
            echo '<img src="' . $testimonials_row["image_path"] . '" class="testimonial-img" alt="">';
            echo '<h3>' . $testimonials_row["title"] . '</h3>';
            echo '<h4>' . $testimonials_row["role"] . '</h4>';
            echo '<p>';
            echo '<i class="bx bxs-quote-alt-left quote-icon-left"></i>';
            echo $testimonials_row["description"];
            echo '<i class="bx bxs-quote-alt-right quote-icon-right"></i>';
            echo '</p>';
            echo '</div>';
            echo '</div>';
          }
          echo '</div>';
          echo '<div class="swiper-pagination"></div>';
          echo '</div>';
        }

        // Close the database connection
        $conn->close();
        ?>
      </div>
    </section><!-- End Testimonials Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="credits">
        Designed by <a href="#">Chrissie Khowoya</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
