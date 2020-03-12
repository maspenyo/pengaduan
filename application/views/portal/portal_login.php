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

  <section id="contact" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Login</h2>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="form">
           <form action="<?php echo base_url('welcome/auth') ?>" method="post" role="form">
              <div class="form-group">
                <input type="text" name="nik" class="form-control" id="name" placeholder="Nomor Induk Kependudukan" required/>
              </div>
              <div class="form-group">
                <input type="password" name="password1" class="form-control" id="name" placeholder="Password" required>
              </div>
              <div class="text-center"><button type="submit">Login</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

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
