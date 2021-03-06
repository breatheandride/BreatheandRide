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
                <a class="navbar-brand page-scroll sticky-logo" href="ingreso.php">
                  <h1>Breathe<span>&</span>Ride</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                
                   <li>
                    <a href="index.php" >Inicio</a>
                  </li>
                
                      <li>
                    <a class="page-scroll" href="blog-details.php">General</a>
                  </li>
                  
                   <li class="active">
                    <a class="page-scroll" href="#home">Mi informaci??n</a>
                  </li>
                   <li>  
                    <a class="page-scroll" href="meme.php">Memes</a>
                  </li>
                  
                  
                  <li>
                    <a class="page-scroll" href="#contact">contacto</a>
                  </li>
          
                  <li>
                    <a href="php/salir.php" >Cerrar Sesi??n</a>
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
                  <h2 class="title1">Que tu mayor preocupaci??n sea llegar m??s lejos </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Nosotros nos encargamos de monitorear el aire que respiras</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <br><br><br>
                  
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
            
            <!-- recent start -->
              <div class="left-blog">
                <h4>Memes</h4>
                <div class="recent-post">
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="meme.php">
												   <img src="img/memes/MEME_A.png" alt="">
												</a>
                    </div>
                    <div class="pst-content">
                      <p><a href="meme.php">??Click aqui y diviertete un rato!</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                </div>
              </div>
              <!-- recent end -->
              
            <div class="single-blog-page">
              <div class="left-blog">
                <h4>??Quieres saber m??s?</h4>
                <ul>
                  <li>
                    <a href="blog-details.php">Predicciones</a>
                  </li>
                  <li>
                    <a href="blog-details.php">Diagrama en bloques</a>
                  </li>
                  <li>
                    <a href="blog-details.php">Ensamblaje y Sensores</a>
                  </li>
                  <li>
                    <a href="blog-details.php">Procesamiento y comunicaci??n</a>
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
                      <a>Simple</a>
                    </li>
                    <li>
                      <a>Calidad del aire</a>
                    </li>
                    <li>
                      <a>Monitoreo</a>
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
                      <a>Ubicaci??n</a>
                    </li>
                    <li>
                      <a>Predicci??n</a>
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
                  <div class="row">
                <div class="col-md-14 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                    <h2>Tus Datos</h2>
                    </div>
                </div>
            </div>
				  <iframe width="750" height="400" src="https://www.youtube.com/embed/XMBB2rxa_tc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				  
                </div>
              </div>
                <h3><p aling="justify">
                    ??Hola Brider! Aqu?? encontrar??s tus datos en tiempo real. Podr??s monitorear la calidad del aire que est??s respirando, podr??s ver tu localizaci??n y adem??s un promedio por minuto.</p>

                    <br><p aling="justify">Recuerda siempre cuidar de tu salud y planificar tus rutas con anterioridad.
                  </p></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- End Blog Area -->
  
 <iframe src="https://thingsboard.cloud/dashboard/0f122340-bd12-11eb-8553-1520a2e6ced5?publicId=fa59c4e0-bda6-11eb-9e9d-1f8899a6f9b3" title="iframe Example 1" width="1140" height="2200">

</iframe>
                    <br>
<br>    
 <br/>
  <br/>

</div>
  <!-- Start reviews Area -->
<div class="col-md-100 col-sm-12 col-xs-12">
  <div class="reviews-area hidden-xs">
    <div class="work-us">
      <div class="work-left-text">
        <a target="_blank">
						<img src="img/about/pantalla.gif" alt="">
					</a>
      </div>
      <div class="work-right-text text-center">
        <h2>Recuerda</h2>
        <h5>El dispositivo cuenta con una pantalla OLED, la cual te alertar?? cuando la calidad del aire que est??s respirando sea peligrosa para tu salud.</h5>
        
      </div>
    </div>
  </div>
</div>

 <div class="row">
                <div class="col-md-14 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                   
 <br/>
  <br/>
                    </div>
                </div>
            </div>
<div class="col-md-100 col-sm-12 col-xs-12">
  <div class="reviews-area hidden-xs">
    <div class="work-us">
      <div class="work-left-text">
        <a target="_blank">
						<img src="img/about/tele.gif" alt="">
					</a>
      </div>
      <div class="work-right-text text-center">
        <h2>Recuerda</h2>
        <h5>Si se supera el m??nimo umbral para riesgo a tu salud, se env??a un mensaje de alerta a Telegram con tu geolocalizaci??n en el punto de riesgo..</h5>
        
      </div>
    </div>
  </div>
</div>






<div class="row">
    <div class="col-md-14 col-sm-12 col-xs-12">
    </div>
</div>

  <!-- End reviews Area -->
  <!-- Start Footer bottom Area -->
  <footer>
    <div  id="contact" class="footer-area">
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
                      <a href= "mailto:breatheandride@gmail.com?Subject=Quiero%20saber%20m??s" target="_blank"><i class="fa fa-google"></i></a>
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
                <h4>Informaci??n</h4>
                <p>
                  Si tienes algun inconveniente o duda acerca de nuestro producto, no dudes en comunicarte.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span><a href="tel:+57 322 460 6847">+57 322 460 6847</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="tel:+57 323 206 71897">+57 323 206 7189</a></p>
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
 
 
