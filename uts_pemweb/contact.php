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

  <title>darren</title>

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
                <li class="nav-item ">
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
  </div>


  <!-- contact section -->
  <form action="confirm.php" method="POST">

  <section class="contact_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Contact Us
            </h2>
            <img src="images/plug.png" alt="">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="confirm.php" method="POST">
                    <div>
                        <input type="text" name="name" placeholder="Name" required />
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Email" required />
                    </div>
                    <div>
                        <input type="text" name="phone" placeholder="Phone Number" required />
                    </div>
                    <div>
                        <input type="text" class="message-box" name="message" placeholder="Message" required />
                    </div>
                    <div class="d-flex">
                        <button type="submit">
                            SEND
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="map_container">
                    <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.781438323509!2d106.72287607407975!3d-6.292430293696624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f007dedc7de1%3A0x70288cde58f42a97!2sUPJ%20Bintaro!5e0!3m2!1sid!2sid!4v1729698459021!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <!-- end contact section -->


  

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