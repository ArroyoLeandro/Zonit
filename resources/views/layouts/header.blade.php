
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:{{ env('email_contact') }}">{{ env('email_contact') }}</a>
        <i class="icofont-phone"></i> <a href="tel:{{ env('telefono') }}">{{ env('telefono_m') }}</a>
        <i class="icofont-google-map"></i> <a href="#contact">{{ env('direccion') }}</a>
        <i class="icofont-whatsapp"  style="background-color:#fff; color:#25d366;"></i> <a href="https://wa.me/{{ env('telefono') }}?text=Me%20pongo%20en%20contacto%20por:" target="_blank">{{ env('telefono_m') }}</a>
      </div>
      <!-- <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div> -->
    </div>
  </div>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo mr-auto"><a href="index.html">Medilab</a></h1> -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <a href="#hero" class="logo mr-auto scrollto"><img src="img/logos/ZONIT2.png" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Home</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#about">Nosotros</a></li>
          <li><a href="#galeria">Galeria</a></li>
          
          <!-- <li><a href="#contact">Contact</a></li> -->

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#contact" class="appointment-btn scrollto">Contactenos</a>

    </div>
  </header><!-- End Header -->
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1 class="text-white">Bienvenido a ZONIT</h1>
      <h2 class="text-white">Soluciones integrales en comunicaciones</h2>
      <a href="#contact" class="btn-get-started scrollto">Contactenos</a>
    </div>
  </section><!-- End Hero -->