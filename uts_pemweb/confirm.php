<?php
include 'koneksi.php'; // Pastikan koneksi ke database sudah benar

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Siapkan SQL untuk menyimpan data
    $sql = "INSERT INTO contact (name, email, phone, message) VALUES (?, ?, ?, ?)";
    
    // Persiapkan dan bind
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $phone, $message);

    // Eksekusi statement
    if ($stmt->execute()) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }

    // Tutup statement dan koneksi
    $stmt->close();
    $connect->close();
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

  <title>Electrochip</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
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
            <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About me</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="experience.php"> Experience </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="project.php"> Project </a>
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
    </div>

    <div class="container">
        <?php if (isset($successMessage)): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $successMessage; ?>
            </div>
        <?php elseif (isset($errorMessage)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>
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
