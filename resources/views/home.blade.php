@extends('layouts.app')

@section('content')

<main id="main">


    <div class="mt-5 mainServices" ></div>
       <!-- ======= Counts Section ======= -->
       <section id="services" class="counts">
        <div class="container">
            <div class="section-title">
              <h2>Servicios Principales</h2>
            </div>
          <div class="row ">
            <div class="col-lg-4 col-md-6">
              <div class="count-box serv1">
                <a data-toggle="tab" href="#tab-8" class="scrollto" onclick="activar('tab8')">
                  <img src="img/services/pilar-camara.jpg" alt="" class="img-rounded">
                  <span class="titleServices">Camaras (cableadas e inalámbricas).</span>
                </a>
              </div>
            </div>
    
            <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
              <div class="count-box serv2">
                <a data-toggle="tab" href="#tab-8" class="scrollto" onclick="activar('tab8')">
                  <img src="img/services/pilar-mantenimiento.jpg" alt="" class="img-rounded">
                  <span class="titleServices">Mantenimiento Mensual</span>
                </a>
              </div>
            </div>
    
            <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
              <div class="count-box serv3">
                <a data-toggle="tab" href="#tab-1" class="scrollto" onclick="activar('tab1')">
                  <img src="img/services/pilar-fibraoptica.jpg" alt="" class="img-rounded">
                  <span class="titleServices">Enlaces de Fibra Optica</span>
                </a>
                </a>
              </div>
            </div>
    
            {{-- <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <a data-toggle="tab" href="#tab-4" class="scrollto" onclick="activar('tab4')">
                  <img src="img/services/pilar-desarrollo.jpg" alt="" style="width: 200px; height: 200px; border-radius: 50%;">
                  <span class="titleServices">Desarrollo Web</span>
                </a>
              </div>
            </div> --}}
    
          </div>
          <div class="row">
            <div class="col-12">
              <div class="mt-4 text-center">
                <!-- <a href="#services" class="appointment-btn scroll masinfo to">Más Información</a> -->
              </div>
            </div>
          </div>
        </div>

        
      <!-- ======= Hero Section ======= -->
  <section id="heroDev" class="d-flex align-items-center">

    <div class="container-fluid padding0 "  data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center ">
          <h1 class="pb-5 ">Desarrollo Web</h1>
          <div>
            <a data-toggle="tab" href="#tab-4"  onclick="activar('tab4')" class="text-white scrollto">
              <p>
                <i>Materializamos sus ideas, desde lo más simple a lo más complejo. Desarrollamos software a medida. Sistemas web totalmente escalables.</i>
              </p>
            </a>
          </div>

          <h2 class="font-weight-bold"> Diseño de E-commerce</h2>
          <div>
            <a data-toggle="tab" href="#tab-4"  onclick="activar('tab4')" class="text-white scrollto">
              <p>
                <i>Soluciones ecommerce adaptadas a las necesidades de nuestros clientes. Diseñamos, implementamos e integramos tu tienda online.</i>
              </p>
            </a>
          </div>
          <h2 class="font-weight-bold"> Diseño de Sitio Web</h2>
          <div>
            <a data-toggle="tab" href="#tab-4"  onclick="activar('tab4')" class="text-white scrollto">
              <p>
                <i>Desarrollamos sitios web a medida. Páginas web de alto impacto, priorizando la usabilidad y experiencia del usuario. Adaptables a cualquier dispositivo.</i>
              </p>
            </a>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img src="img/dev0.png" class="img-fluid animated" alt="" id="dev">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
    
      </section><!-- End Counts Section -->
    
    
        <!-- ======= Services Section ======= -->
        <section  class="departments">
          <div class="container">
    
            <div class="section-title">
              <h2>Todos los Servicios</h2>
              <p>A continuación, detalle de servicios que ZONIT puede brindar:</p>
            </div>
    
            <div class="row">
              <div class="col-lg-3">
                <ul class="nav nav-tabs flex-column">
                  <li class="nav-item">
                    <a class="nav-link active show" data-toggle="tab" href="#tab-1" id="tab1">Solución Integral por Equipo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-2" id="tab2">Windows Server / Storage Server</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-3" id="tab3">Mail Server</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-4" id="tab4">Desarrollo WEB</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-5" id="tab5">Desarrollo de Software</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-6" id="tab6">Bases de Datos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-7" id="tab7">Hosting</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-8" id="tab8">Seguridad Electrónica</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="tab-content">
                  <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                      <div class="col-lg-8 details order-2 order-lg-1">
                        <h3>Solución Integral por Equipo</h3>
                        <p class="font-italic">El servicio tiene la finalidad de estandarizar los equipos, se realiza relevamiento del parque informático.</p>
                        <p>
                          <ul>
                            <li>Networking (Cableado estructurado, Fibra óptica).</li>
                            <li>Enlaces (Por aire, radio o fibra óptica).</li>
                            <li>Carpeta compartida.</li>
                            <li>Acceso para asistencia remota (Teamviewer).</li>
                            <li>Instalación de programas (Acrobat Reader, Antivirus, Chrome, Etc.).</li>
                            <li>Office (Word, Excel, Power Point, Outlook, etc.).</li>
                          </ul>
                        </p>
                      </div>
                      <div class="col-lg-4 text-center order-1 order-lg-2">
                        <img src="img/services/services-1.jpg" alt="" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab-2">
                    <div class="row">
                      <div class="col-lg-8 details order-2 order-lg-1">
                        <h3>Windows Server / Storage Server</h3>
                        <p>
                          <ul>
                            <li>Sistema de almacenamiento personal.</li>
                            <li>Acceso con Usuario y Clave.</li>
                            <li>BackUp personalizado.</li>
                            <li>Windows Server (Ver licencias de ser necesario).</li>
                          </ul>
                        </p>
                      </div>
                      <div class="col-lg-4 text-center order-1 order-lg-2">
                        <img src="img/services/services-2.jpg" alt="" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab-3">
                    <div class="row">
                      <div class="col-lg-8 details order-2 order-lg-1">
                        <h3>Mail Server</h3>
                        <p>
                          <ul>
                            <li>Registración de dominio en secretaría legal y técnica de la Nación.</li>
                            <li>Alojamiento de dominio en Mail Server.</li>
                            <li>Sistema redundado de energía.</li>
                            <li>Forwarding de mails.</li>
                            <li>Creación de casillas (Altas, Bajas y/o Modificaciones).</li>
                            <li>Webmail.</li>
                          </ul>
                        </p>
                      </div>
                      <div class="col-lg-4 text-center order-1 order-lg-2">
                        <img src="img/services/services-3.jpg" alt="" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab-4">
                    <div class="row">
                      <div class="col-lg-8 details order-2 order-lg-1">
                        <h3>Desarrollo WEB</h3>
     
                        <p class="font-italic">
                          Esta División se encarga del análisis y programación Web a medida para todas las áreas de una empresa.
                          <br> <br>
                          Nuestra experiencia está desarrollada sobre plataforma de Software Libre como PHP, MySQL, Software de Macromedia.
                        </p>
                      </div>
                      <div class="col-lg-4 text-center order-1 order-lg-2">
                        <img src="img/services/services-4.jpg" alt="" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab-5">
                    <div class="row">
                      <div class="col-lg-8 details order-2 order-lg-1">
                        <h3>Desarrollo de Software</h3>
                        <p class="font-italic">
                          Esta División se encarga del análisis y programación de software a medida para todas las áreas de una empresa.
                          <br> <br>
                          Nuestra experiencia está desarrollada sobre plataforma UNIX, ORACLE y MYSQL.
                        </p>
                      </div>
                      <div class="col-lg-4 text-center order-1 order-lg-2">
                        <img src="img/services/services-5.jpg" alt="" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab-6">
                    <div class="row">
                      <div class="col-lg-8 details order-2 order-lg-1">
                        <h3>Bases de Datos</h3>
                        <p class="font-italic">
                          Trabajamos con bases de datos en Mysql.
                          <br>
                          Sistemas de BackUp.
                        </p>
                      </div>
                      <div class="col-lg-4 text-center order-1 order-lg-2">
                        <img src="img/services/services-6.jpg" alt="" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab-7">
                    <div class="row">
                      <div class="col-lg-8 details order-2 order-lg-1">
                        <h3>Hosting</h3>
                        <p class="font-italic">
                          
                          <ul>
                            <li>Alojamiento de páginas web en Data Center.</li>
                            <li>Sistema de BackUp.</li>
                            <li>Servidores Unix.</li>
                          </ul>
                        </p>
                      </div>
                      <div class="col-lg-4 text-center order-1 order-lg-2">
                        <img src="img/services/services-7.jpg" alt="" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab-8">
                    <div class="row">
                      <div class="col-lg-8 details order-2 order-lg-1">
                        <h3>Seguridad Electrónica</h3>
                        <p>
                          <ul>
                            <li>Seguridad, monitoreo y alarmas.</li>
                            <li>Supervisión.</li>
                            <li>DVR / CCTV</li>
                            <li>Control de accesos</li>
                            <li>Alarmas (cableadas e inalámbricas).</li>
                            <li>Cámaras (cableadas e inalámbricas).</li>
                          </ul>
                        </p>
                      </div>
                      <div class="col-lg-4 text-center order-1 order-lg-2">
                        <img src="img/services/services-8.jpg" alt="" class="img-fluid">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
          </div>
        </section><!-- End Services Section -->
    
    
          <!-- ======= About Section ======= -->
        <section id="about" class="about">
          <div class="container-fluid">
    
            <div class="row">
              <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch mb-2 mb-lg-0">
                <!-- <a href="#" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> -->
              </div>
    
              <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center pb-5 px-lg-5">
               <div class="section-title">
                <h2 class="mt-5 mt-lg-0">Nosotros</h2>
               </div>
                <p>
                  La visión de Zona Norte iT va más allá de la implementación, el soporte técnico y la asesoría. <br>
                  A lo largo de 20 años de experiencia en soluciones IT, la estrategia ha sido simple y exitosa: ofrecer productos y servicios de primer nivel con un alto compromiso hacia nuestros clientes.
                </p>
                <span class="font-italic justificado">
                  La amplia oferta de ZONIT incluye la provisión de todas las herramientas para que los usuarios puedan traducir el máximo potencial de la tecnología en productividad
                </span>
    
               
                 <div class="icon-box">
                  <div class="icon  d-none d-md-flex"><i class="bx bx-fingerprint"></i></div>
                  <h4 class="title"><span class="mr-1">S o l u c i ó n e s</span> <span> I n t e g r a l e s</span></h4>
                  <p class="description">  Buscamos garantizar un respaldo y atención personalizada; enfocándose en la necesidad del cliente. Consiste en convertirse en asesor IT, dándole al mismo la tranquilidad y seguridad de que está respaldado, de manera que pueda delegar en su totalidad los requerimientos del parque informático, olvidándose de los problemas y recibiendo soluciones. Pensando en la escalabilidad y la adaptación de nuevas tecnologías.</p>
                </div>
    
              </div>
            </div>
    
          </div>
        </section><!-- End About Section -->
    
       
    
    
            <!-- ======= Gallery Section ======= -->
        <section id="galeria" class="gallery">
          <div class="container">
    
            <div class="section-title">
              <h2>Proyectos Destacados</h2>
              <p>Conocé los últimos proyectos destacados.</p>
            </div>
          </div>
    
          <div class="container-fluid">
            <div class="row no-gutters">
    
              <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                  <a href="img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                    <img src="img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                  <a href="img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                    <img src="img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                  <a href="img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                    <img src="img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                  <a href="img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
                    <img src="img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                  <a href="img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
                    <img src="img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                  <a href="img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
                    <img src="img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                  <a href="img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
                    <img src="img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                  <a href="img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
                    <img src="img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
    
            </div>
    
          </div>
        </section><!-- End Gallery Section -->


@include('layouts.contacto')

</main>

@endsection
