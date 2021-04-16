<?php 
	session_start();

	if(isset($_SESSION['user'])){
 ?>

 <!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Mi Perfil</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">


  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                  <h1>Breathe<span>&</span>Ride</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                
                   <li>
                    <a href="index.html" >Inicio</a>
                  </li>
                
                      <li class="active">
                    <a class="page-scroll" href="blog-details.html">General</a>
                  </li>
                  
                  <li>
                    <a class="page-scroll" href="#home">Mi información</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="blog-details.html">Rutas</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#contact">contacto</a>
                  </li>
          
                  <li>
                    <a href="php/salir.php" >Cerrar Sesión</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->
  


  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
      <div id="ensign-nivoslider" class="slides">
        <img src="img/slider/4.png" alt="" title="#slider-direction-1"    width="1920" 
     height="930" />
      </div>


      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Ciclismo, el deporte que no contamina pero, </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">¿Quién piensa a cuántos gases contaminantes están expuestos al día?</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <br><br><br>
                  <a class="ready-btn right-btn page-scroll" href="blog-details.html">Leer más</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>



  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">
              
            </div>
            <div class="single-blog-page">
              
            </div>
            <div class="single-blog-page">
              <div class="left-blog">
                <h4><a href="blog-details.html">Memes</a></h4>
              </div>
            </div>
            <div class="single-blog-page">
              <div class="left-blog">
                <h4>¿Quieres saber más?</h4>
                <ul>
                  <li>
                    <a href="blog-details.html">Diagrama en bloques</a>
                  </li>
                  <li>
                    <a href="blog-details.html">Ensamblaje y Sensores</a>
                  </li>
                  <li>
                    <a href="blog-details.html">Procesamiento y comunicación</a>
                  </li>
                </ul>
              </div>
            </div>
            
            <div class="single-blog-page">
              <div class="left-tags blog-tags">
                <div class="popular-tag left-side-tags left-blog">
                  <h4># Populares</h4>
                  <ul>
                    <li>
                      <a>Calidad del aire</a>
                    </li>
                    <li>
                      <a>Raspberry</a>
                    </li>
                    <li>
                      <a>Ciclismo Urbano</a>
                    </li>
                    <li>
                      <a>MQTT</a>
                    </li>
                    <li>
                      <a>Deporte</a>
                    </li>
                    <li>
                      <a>Ubicación</a>
                    </li>
                    <li>
                      <a>Predicción</a>
                    </li>
                    <li>
                      <a>CO2</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End left sidebar -->
        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="blog-text">
                  <h4>
											<a href="#">Bienvenido Brider</a>
										</h4>
                  <p>
                    Geolocalización
                  </p>
                </div>
               </div>
            </div>
            <!-- End single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
              <div class="single-blog">
                <div class="single-blog-img">
                  
                </div>
                <div class="blog-text">
                  <h4>
											<a href="#">Mapa 1.</a>
										</h4>
                  <p>
           <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/apps/matlab_visualizations/394561"></iframe>
           </p>
                </div>
              </div>
            </div>
            <!-- Start single blog -->
            <h4>
											<a href="#">Longitud</a>
										</h4>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
              <div class="single-blog-img">
                  <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1316749/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
                </div>
                <div class="blog-text">
                  
                  <p>
                    Descripción de la grafica.
                  </p>
                </div>
              </div>
            </div>
            
            
             <h4>
											<a href="#">Latitud</a>
										</h4>
            
            <!-- End single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
              <div class="single-blog-img">
                <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1316749/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
                <div class="blog-meta">
                <div class="blog-text">
                 
                  <p>
                    Descripción de la grafica.
                  </p>
                </div>
              </div>
            </div>
             <h4>
											<a href="#">Sensor MQ-9</a>
										</h4>
            <!-- Start single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
              <div class="single-blog-img">
               <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1316749/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=40&title=Bike&type=line&xaxis=Tiempo&yaxis=MQ9"></iframe>
               <div class="blog-meta">
                </div>
                <div class="blog-text">
                 
                  <p>
                    Descripción de la grafica.
                  </p>
                </div>
               </div>
            </div>
             <h4>
											<a href="#">Sensor MQ-135</a>
										</h4>
              <!-- Start single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
              <div class="single-blog-img">
              <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1316749/charts/4?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
              <div class="blog-meta">
                </div>
                <div class="blog-text">
                 
                  <p>
                    Descripción de la grafica.
                  </p>
                </div>
               </div>
            </div>
            
            
            
            <!-- End single blog -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->

      <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="enviar.php" method="POST" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Tu Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Tu correo" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
              </form>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2>Breathe<span> &</span> Ride</h2>
                </div>

                <p>Siguenos en nuestras redes sociales:</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="https://www.facebook.com/BreatheAndRide" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="https://twitter.com/BreatheAndRide" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href= "mailto:breatheandride@gmail.com?Subject=Quiero%20saber%20más" target="_blank"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/breathe_and_ride/" target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Información</h4>
                <p>
                  Si tienes algun inconveniente o duda acerca de nuestro producto, no dudes en comunicarte.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +57 322 460 6847<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+57 323 206 7189</p>
                  <p><span>Email:</span> breatheandride@gmail.com</p>
                  <p><span>Horas de trabajo:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a><img src="img/portafolio/1.jpg" alt=""></a>
                  <a><img src="img/portafolio/2.jpg" alt=""></a>
                  <a><img src="img/portafolio/3.jpg" alt=""></a>
                  <a><img src="img/portafolio/4.jpg" alt=""></a>
                  <a><img src="img/portafolio/5.jpg" alt=""></a>
                  <a><img src="img/portafolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>Breathe & Ride</strong>. All Rights Reserved
             </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
</body>

</html>







<?php
} else {
	header("location:login.php");
	}
 ?>
