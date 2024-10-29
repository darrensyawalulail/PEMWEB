<?php
    include 'koneksi.php';

    $sqlProject = "SELECT * FROM home WHERE id = 1";
    $resultProject = $connect->query($sqlProject);

    $connect->close();  

    if ($resultProject->num_rows > 0) {
        $row = $resultProject->fetch_assoc();
        $id = $row['id'];
        $namaa = $row['namaa'];
        $tentangsaya = $row['tentangsaya'];
    } else {
        echo " ";
    }
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Portfolio Darren</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <style>
    /* Mengubah warna navbar dan footer menjadi biru tua */
    .navbar, .footer_section {
      background-color: #003366; /* Biru tua */
      color: #ffffff; /* Teks putih */
    }

    .navbar .nav-link, .navbar-brand span {
      color: #ffffff; /* Teks putih pada navbar */
    }

    .navbar .nav-link:hover {
      color: #99ccff; /* Biru muda saat di-hover */
    }

    /* Mengubah warna background dan teks pada bagian About menjadi biru muda */
    .about_section {
      background-color: #e6f2ff; /* Biru muda */
    }

    .about_section .heading_container h2 {
      color: #003366; /* Biru tua untuk judul */
    }

    .about_section p {
      color: #003366; /* Biru tua untuk teks */
    }

    /* Gambar di dalam about */
    .detail-box img {
      border: 2px solid #99ccff; /* Border biru muda pada gambar */
    }

    /* Footer teks warna putih */
    .footer_section p {
      color: #ffffff;
    }

  </style>
</head>

<body>

  <div class="hero_area">
    <!-- header section starts -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="">
            <span>
              darren
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About me</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="experience.php"> Experience </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="hobby.php"> Hobby </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
<section class="slider_section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="detail_box">
          <h1>Darren<br></h1>
          <p>
            <?php echo $namaa ?>
          </p>
          <p>
            <?php echo $tentangsaya ?>
          </p>
          <a href="contact.php">
            Contact Us
          </a>
        </div>
      </div>
      <div class="col-md-5">
        <div class="img_content">
          <div class="img_container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="img-box">
                    <img src="images/darren2.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- end slider section -->
  </div>

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-9 mx-auto">
          <p>
            &copy; 2019 All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>

</body>

</html> 
