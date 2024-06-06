<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gp Digital WEb</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('digital-web')}}/img/favicon.png" rel="icon">
  <link href="{{asset('digital-web')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('digital-web')}}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('digital-web')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('digital-web')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('digital-web')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('digital-web')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('digital-web')}}/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('digital-web')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('digital-web')}}/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Updated: Nov 25 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    @include('partials.header')
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    @include('partials.section')
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      @include('partials.about')
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      @include('partials.client')
    </section><!-- End Clients Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      @include('partials.features')
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      @include('partials.services')
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
     @include('partials.cta')
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      @include('partials.portfolio')
    </section><!-- End Portfolio Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      @include('partials.count')
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      @include('partials.testimonail')
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      @include('partials.team')
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
     @include('partials.contact')
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
   @include('partials.main')
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('digital-web')}}/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{asset('digital-web')}}/vendor/aos/aos.js"></script>
  <script src="{{asset('digital-web')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('digital-web')}}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('digital-web')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('digital-web')}}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('digital-web')}}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('digital-web')}}/js/main.js"></script>

</body>

</html>
