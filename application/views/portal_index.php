<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ePengaduan</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url() ?>assets/eStartup/img/favicon.png" rel="icon">
  <link href="<?php echo base_url() ?>assets/eStartup/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="<?php echo base_url() ?>assets/eStartup/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url() ?>assets/eStartup/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/eStartup/lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/eStartup/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/eStartup/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/eStartup/lib/modal-video/css/modal-video.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url() ?>assets/eStartup/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eStartup
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="<?php echo base_url() ?>" class="scrollto"><span>e</span>Pengaduan</a></h1>
      </div>

      <?php $this->load->view('portal/portal_navmenu') ?>
    </div>
  </header>
  <!--==========================
    Hero Section
  ============================-->
  <section id="hero" class="wow fadeIn">
    <div class="hero-container">
      <h1>Selamat Datang di ePengaduan</h1>
      <h2>Berani Lapor, Berani untuk Lebih Baik</h2>
      <img src="<?php echo base_url() ?>assets/eStartup/img/hero-img.png" alt="Hero Imgs">
      <a href="#features" class="btn-get-started scrollto">Mulai</a>
      <div class="btns">
        <a href="#"><i class="fa fa-apple fa-3x"></i> App Store</a>
        <a href="#"><i class="fa fa-play fa-3x"></i> Google Play</a>
        <a href="#"><i class="fa fa-windows fa-3x"></i> windows</a>
      </div>
    </div>
  </section><!-- #hero -->

  <!--==========================
    Features Section
  ============================-->

  <section id="features" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Alur Pengaduan</h2>
        <p class="separator">Alur tindak lanjut Pengaduan masyarakat.</p>
      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="<?php echo base_url() ?>assets/eStartup/img/svg/paint-palette.svg" alt="img" class="img-fluid">
            <h4>1. Tulis Laporan</h4>
            <p>Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap disertai dengan identitas yang jelas.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="<?php echo base_url() ?>assets/eStartup/img/svg/vector.svg" alt="img" class="img-fluid">
            <h4>2. Proses Verifikasi</h4>
            <p>Dalam kurun waktu maksimal 3 x 24 jam, laporan akan di verifikasi dan diteruskan kepada SKPD atau Instansi yang Berwenang</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="<?php echo base_url() ?>assets/eStartup/img/svg/design-tool.svg" alt="img" class="img-fluid">
            <h4>3. Tindak Lanjut</h4>
            <p>Dalam kurun waktu maksimal 5 x 24 jam, laporan anda akan ditindaklanjuti. Anda dapat menanggapi balasan yang diberikan oleh instansi maksimal dalam waktu 8 x 24 jam.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="<?php echo base_url() ?>assets/eStartup/img/svg/asteroid.svg" alt="img" class="img-fluid">
            <h4>4. Selesai</h4>
            <p>Laporan anda akan ditindaklanjuti hingga terselesaikan</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
    Pricing Table Section
  ============================-->
<!-- 
  <section id="pricing" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Meet With Price</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-3">
          <div class="block-pricing">
            <div class="table">
              <h4>basic</h4>
              <h2>$29</h2>
              <ul class="list-unstyled">
                <li><b>4 GB</b> Ram</li>
                <li><b>7/24</b> Tech Support</li>
                <li><b>40 GB</b> SSD Cloud Storage</li>
                <li>Monthly Backups</li>
                <li>Palo Protection</li>
              </ul>
              <div class="table_btn">
                <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="block-pricing">
            <div class="table">
              <h4>PERSONAL</h4>
              <h2>$29</h2>
              <ul class="list-unstyled">
                <li><b>4 GB</b> Ram</li>
                <li><b>7/24</b> Tech Support</li>
                <li><b>40 GB</b> SSD Cloud Storage</li>
                <li>Monthly Backups</li>
                <li>Palo Protection</li>
              </ul>
              <div class="table_btn">
                <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="block-pricing">
            <div class="table">
              <h4>BUSINESS</h4>
              <h2>$29</h2>
              <ul class="list-unstyled">
                <li><b>4 GB</b> Ram</li>
                <li><b>7/24</b> Tech Support</li>
                <li><b>40 GB</b> SSD Cloud Storage</li>
                <li>Monthly Backups</li>
                <li>Palo Protection</li>
              </ul>
              <div class="table_btn">
                <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="block-pricing">
            <div class="table">
              <h4>profeesional</h4>
              <h2>$29</h2>
              <ul class="list-unstyled">
                <li><b>4 GB</b> Ram</li>
                <li><b>7/24</b> Tech Support</li>
                <li><b>40 GB</b> SSD Cloud Storage</li>
                <li>Monthly Backups</li>
                <li>Palo Protection</li>
              </ul>
              <div class="table_btn">
                <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 -->
  <!--==========================
    Blog Section
  ============================-->
<!-- 
  <section id="blog" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Latest posts</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="<?php echo base_url() ?>assets/eStartup/img/blog/blog-image-1.jpg" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
              <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="<?php echo base_url() ?>assets/eStartup/img/blog/blog-image-2.jpg" class="img-responsive" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
              <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="<?php echo base_url() ?>assets/eStartup/img/blog/blog-image-3.jpg" class="img-responsive" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
              <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
 -->
  <!--==========================
    Newsletter Section
  ============================-->
  <section id="newsletter" class="newsletter text-center wow fadeInUp">
    <div class="overlay padd-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-9 col-lg-6">
            <form class="form-inline" method="POST" action="#">

              <input type="email" class="form-control " placeholder="Email Adress" name="email">
              <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i>Subscribe</button>

            </form>

          </div>
        </div>

          <ul class="list-unstyled">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>


      </div>
    </div>
  </section>

  <!--==========================
    Footer
  ============================-->
  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-5">
          <div class="footer-logo">

            <a class="navbar-brand" href="#">ePengaduan</a>
            <p>Pengelolaan pengaduan pelayanan memiliki tujuan yaitu masyarakat memiliki satu saluran layanan pengaduan yang terpusat dan terintegrasi. Dengan menggunakan ePengaduan ini, masyarakat dapat mudah melakukan pengaduan dan Pengaduan kejadian yang ada di lingkungan sekitar. Setiap pengaduan akan ditindaklanjuti oleh SKPD yang bersangkutan.</p>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Tentang Kami</h4>

            <ul class="list-unstyled">
              <li><a href="#">Tentang Kami</a></li>
              <li><a href="#">Fitur Sistem</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>
      </div>
    </div>

    <div class="copyrights">
      <div class="container">
        <p>&copy; Copyleft ePengaduan. All rights reserved.</p>
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>

  </footer>



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url() ?>assets/eStartup/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/eStartup/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo base_url() ?>assets/eStartup/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>assets/eStartup/lib/superfish/hoverIntent.js"></script>
  <script src="<?php echo base_url() ?>assets/eStartup/lib/superfish/superfish.min.js"></script>
  <script src="<?php echo base_url() ?>assets/eStartup/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url() ?>assets/eStartup/lib/modal-video/js/modal-video.js"></script>
  <script src="<?php echo base_url() ?>assets/eStartup/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>assets/eStartup/lib/wow/wow.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url() ?>assets/eStartup/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url() ?>assets/eStartup/js/main.js"></script>

</body>
</html>
