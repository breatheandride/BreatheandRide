<?php 
	session_start();

	if(isset($_SESSION['user'])){
 ?>

 
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Breathe & Ride</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

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

  <div id="preloader"></div>

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
                  <h1>Breathe<span> &</span> Ride </h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home">Inicio</a>
                  </li>
 

                   <li>
                    <a href="inicio.php">Datos</a>
                  </li>
 
                    
                  <li>
                    <a class="page-scroll" href="#about">Aceca de B&R</a>
                  </li>
                  
                 
                  
                  <li>
                    <a class="page-scroll" href="#services">Servicios</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#team">Equipo</a>
                  </li>

                  <li>
                    <a class="page-scroll" href="#blog">Noticias</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#contact">Contacto</a>
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
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="img/slider/slider1.gif" alt="" title="#slider-direction-1"    width="1920" 
     height="930" />
        <img src="img/slider/slider2.jpg" alt="" title="#slider-direction-2" />
        <img src="img/slider/slider3.gif" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Despejamos tu camino</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Nos encargamos de que sepas la calidad<br> del aire que est??s respirando</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#about">Saber M??s</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Los mejores cuid??ndote </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Te ofrecemos sensar, procesar y analizar<br> tus datos con la mayor seguridad.</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">Ver Servicios</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
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
                  <h1 class="title2">??Qui??n piensa a cu??ntos gases contaminantes est??n expuestos al d??a?</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#blog">Leer m??s</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Acerca de Breathe & Ride</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a>
		  <img src="img/about/diagram.png" alt="">
		</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">??Que es Breathe and Ride?</h4>
              </a>
              <p>
                En Breathe and ride buscamos darte acompa??amiento a ti como ciclista en tus rutas diarias, ayudandote a concientizar sobre el aire que respiras con ayuda de diferentes sensores y actuadores, todos estos integrados en una cajita que cabe en tu mano.<br><br> Entre nuestras principales caracteristicas te ofrecemos:
              </p>
              <ul>
                <li>
                  <i class="fa fa-check"></i> Innovaci??n
                </li>
                <li>
                  <i class="fa fa-check"></i> Portabilidad
                </li>
                <li>
                  <i class="fa fa-check"></i> Conectividad
                </li>
                <li>
                  <i class="fa fa-check"></i> Simplicidad
                </li>
                <li>
                  <i class="fa fa-check"></i> Seguridad
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->

  <!-- Start Service area -->
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>Nuestros Servicios</h2>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="services-contents">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon">
                                                <i>
                                  <img src="services/1.png" alt="" width="35" height="35">
										</i>	
										</a>
                  <h4>Posicionamiento</h4>
                  <p>
                    El sistema cuenta con un m??dulo GPS para brindar informaci??n completa del nivel de contaminaci??n de la ruta recorrida.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon">
											   <i>
                                  <img src="services/2.png" alt="" width="35" height="35">
										</i>	
										</a>
                  <h4>Historial de datos</h4>
                  <p>
                    En el perfil de cada usuario se puede acceder a los datos de contaminaci??n de todos sus recorridos junto con estad??sticas descriptivas.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon">
											   <i>
                                  <img src="services/3.png" alt="" width="35" height="35">
										</i>	
										</a>
                  <h4>Sistema de alerta</h4>
                  <p>
                   En la pantalla OLED de la bicicleta se mostrar?? una alerta visual si el aire que est?? respirando el ciclista es peligroso para su salud.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon">
											   <i>
                                  <img src="services/4.png" alt="" width="35" height="35">
										</i>	
										</a>
                  <h4>Anal??tica de datos</h4>
                  <p>
                    Con los datos adquiridos se hace una predicci??n de la contaminaci??n diaria para que el usuario pueda determinar mejor su ruta.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon">
											   <i>
                                  <img src="services/5.png" alt="" width="35" height="35">
										</i>	
										</a>
                  <h4>Sistema de sensado</h4>
                  <p>
                    El sistema cuenta con dos sensores que permiten determinar la calidad del aire que respira el ciclista.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon">
											   <i>
                                  <img src="services/6.png" alt="" width="35" height="35">
										</i>	
										</a>
                  <h4>Red de datos</h4>
                  <p>
                    Cada usuario podr?? ver un mapa de su locaci??n con los niveles de contaminaci??n.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Service area -->

  
   

  <!-- Faq area start -->
  <div class="faq-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Descripci??n</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="faq-details">
            <div class="panel-group" id="accordion">
              <!-- Panel Default -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" class="active" data-parent="#accordion" href="#check1">
                                                <span class="acc-icons"></span>??C??mo funciona la conexi??n a internet?
											</a>
										</h4>
                </div>
                <div id="check1" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <p>
                              Para que el sistema se conecte a internet debes compartir los datos de tu celular con la tarjeta.
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              <!-- Panel Default -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#check2">
                                                <span class="acc-icons"></span>  ??Que fuente de alimentaci??n usa?
											</a>
										</h4>
                </div>
                <div id="check2" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>
                       La alimentaci??n del sistema se realiza mediante una bateria externa, esta es la que deber??s cargar cuando el sistema no tenga m??s energ??a.
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              <!-- Panel Default -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#check3">
                                                <span class="acc-icons"></span>??Para qu?? sirve la pantalla?
											</a>
										</h4>
                </div>
                <div id="check3" class="panel-collapse collapse ">
                  <div class="panel-body">
                    <p>
                      La pantalla te mostrar?? la calidad del aire que est??s respirando durante la rodada. Si la calidad es muy mala y es peligroso para tu salud, entonces el sistema te mostrar?? una alerta.
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              <!-- Panel Default -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#check4">
                                                <span class="acc-icons"></span>??Para qu?? sirve la p??gina web?
											</a>
										</h4>
                </div>
                <div id="check4" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>
                      Al crear tu cuenta en <a href ="login.php">Breathe and Ride</a>, tienes acceso a un hist??rico de los datos de la calidad del aire durante tus recorridos y adem??s una predicci??n de la misma.
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="tab-menu">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="active">
                <a href="#p-view-1" role="tab" data-toggle="tab"> Proyecto</a>
              </li>
              <li>
                <a href="#p-view-2" role="tab" data-toggle="tab">??Por qu?? Breathe & Ride?</a>
              </li>
             
            </ul>
          </div>
          <div class="tab-content">
            <div class="tab-pane active" id="p-view-1">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>Proyecto</h4>
                  <p>
                   Con el fin de que el ciclista obtenga informaci??n sobre el aire que respira y los potenciales riesgos para su salud al atravesar ciertas zonas de las ciudades, se propone el proyecto Breathe and Ride.<br><br> El sistema consiste, en primer lugar, en dos sensores para la calidad del aire: el MQ9 que es un sensor de mon??xido de carbono y gases inflamables, y el sensor MQ135 que mide benceno, alcohol, humo, entre otros gases; luego de obtener los datos por medio de los sensores, el sistema gracias a un m??dulo GPS, permite procesar y subir la informaci??n a la nube, indicando el lugar y los niveles de contaminaci??n en el aire para las respectivas zonas. Esta informaci??n es mostrada tambi??n en una pantalla Oled, todo esto en tiempo real.<br><br> El usuario puede acceder a una p??gina web donde se mostrar?? tanto su informaci??n individual, como las alertas y estad??sticas de todos los usuarios del sistema.
                  </p>
                 
                </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-2">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>??Por qu?? Breathe & Ride?</h4>
                  
                  <p>
                    A pesar de las medidas que han tomado los ??ltimos gabinetes distritales de Bogot??, las condiciones ambientales siguen siendo perjudiciales para la salud de los habitantes, en especial para los ciclistas que tienen m??s contacto con el material particulado. Es tan grave la situaci??n, que se reporta que varias personas han dejado de montar bicicleta por este motivo, han sufrido enfermedades cardiacas y respiratorias, han presentado irritaci??n en los ojos y la nariz. 
                  </p>
                  <p>
                  Por lo cual, existe una preocupacion por parte de los ciclistas, al no tener forma de saber si la ruta que tomar??n para llegar a sus trabajos, a la universidad, a sus casas, est?? contaminada al punto de ser peligroso para ellos, ya que durante un recorrido su salud podria estar en riesgo.
                  </p>
                </div>
              </div>
            </div>
            

            
          </div>
        </div>
      </div>
      <!-- end Row -->
    </div>
  </div>
  <!-- End Faq Area -->




  <!-- Start reviews Area -->
  <div class="reviews-area hidden-xs">
    <div class="work-us">
      <div class="work-left-text">
        <a href="https://www.mercadolibre.com.co/" target="_blank">
						<img src="img/about/2.png" alt="">
					</a>
      </div>
      <div class="work-right-text text-center">
        <h2>Haz parte de Breathe and Ride</h2>
        <h5>Ay??danos a monitorear el aire<br> que respiramos, obten predicciones basadas en tus datos<br> y alertas en tiempo real.</h5>
        <a href="https://www.mercadolibre.com.co/"  target="_blank" class="ready-btn">?? C??mpralo ya !</a>
      </div>
    </div>
  </div>
  <!-- End reviews Area -->




  <!-- Start team Area -->
  
  <div id="team" class="our-team-area area-padding"> 
  
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Nuestro Equipo</h2>
          </div>
        </div>
      </div>
      <div class="row">

        <div class="team-top">
        
        
           <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a>
										<img src="img/team/1.jpeg" alt="">
									</a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="https://www.facebook.com/ddiaz168/" target="_blank">
													<i class="fa fa-facebook"></i>
												</a>
                    </li>
                    <li>
                      <a href="https://twitter.com/didiegopf?s=08" target="_blank">
													<i class="fa fa-twitter"></i>
												</a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/didiegop/" target="_blank">
													<i class="fa fa-instagram"></i>
												</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Diego D??az</h4>
                <p>Analista de Datos</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a>
										<img src="img/team/2.png" alt="">
									</a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="https://www.facebook.com/andresahumada21/" target="_blank">
													<i class="fa fa-facebook"></i>
												</a>
                    </li>
                    <li>
                      <a href="https://twitter.com/ahumada_arevalo" target="_blank">
													<i class="fa fa-twitter"></i>
												</a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/felipe_arevalo/" target="_blank">
													<i class="fa fa-instagram"></i>
												</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Andr??s Ahumada</h4>
                <p>Desarrollador de Hardware</p>
              </div>
            </div>
          </div>
          <!-- End column -->
           <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a>
										<img src="img/team/3.jpeg" alt="">
									</a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="https://www.facebook.com/dairon.barbosabarbosa/" target="_blank">
													<i class="fa fa-facebook"></i>
												</a>
                    </li>
                    <li>
                      <a href="https://twitter.com/JuanDe03851604" target="_blank">
													<i class="fa fa-twitter"></i>
												</a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/daironbarbosabarbosa/?hl=es-la" target="_blank">
													<i class="fa fa-instagram"></i>
												</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Dairon Barbosa</h4>
                <p>Dise??ador Web</p>
              </div>
            </div>
          </div>
          <!-- End column -->
        
        </div>
      </div>
    </div>
  </div>
 </div>
 
  <!-- End Team Area -->




<!-- Start Testimonials -->
  <div class="testimonials-area">
    <div class="testi-inner area-padding">
      <div class="testi-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Start testimonials Start -->
            <div class="testimonial-content text-center">
              <a class="quate"><i class="fa fa-quote-right"></i></a>
              <!-- start testimonial carousel -->
              <div class="testimonial-carousel">
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Nuestro v??nculo com??n m??s b??sico es que todos vivimos en este planeta. <br> Todos respiramos el mismo aire. A todos nos preocupa el futuro de nuestros hijos. Y todos somos mortales.
                    </p>
                    <h6>John F. Kennedy</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                       Respirar en Bogot?? equival??a a fumar en promedio 1,3 cigarrillos diarios.
                    </p>
                    <h6>Marcelo Coelho y Amaury Martiny</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      El hombre de hoy usa y abusa de la naturaleza, como si hubiera de ser el ??ltimo inquilino<br> de este desgraciado planeta, como si detr??s de ??l no se anunciara un futuro.
                    </p>
                    <h6>Miguel Delibes</h6>
                  </div>
                </div>
                <!-- End single item -->
                
                
                                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Me pregunto qui??n nos ha dado el derecho de estropear nuestro planeta.
                    </p>
                    <h6>Kurt Vonnegut Jr</h6>
                  </div>
                </div>
                <!-- End single item -->
                
                
                
                                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      El hombre es due??o de su destino y su destino es la tierra<br> y ??l mismo la est?? destruyendo hasta quedarse sin destino.
                    </p>
                    <h6>Frida Kahlo</h6>
                  </div>
                </div>
                <!-- End single item -->
                
                
              </div>
            </div>
            <!-- End testimonials end -->
          </div>
          <!-- End Right Feature -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Testimonials -->




  <!-- Start Blog Area -->
  <div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Noticias</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start Left Blog -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="https://www.eltiempo.com/bogota/afectacion-de-la-contaminacion-del-aire-para-los-ciclistas-472238" target="_blank">
										<img src="img/blog/noticia1.jpeg" alt="">
									</a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
										<i class="fa fa-comment-o"></i>
										<a href="https://www.eltiempo.com/" target="_blank">El Tiempo</a>
									</span>
                <span class="date-type">
										<i class="fa fa-calendar"></i>13 de marzo 2020
									</span>
              </div>
              <div class="blog-text">
                <h4>
                                        <a href="https://www.eltiempo.com/bogota/afectacion-de-la-contaminacion-del-aire-para-los-ciclistas-472238" target="_blank">As?? afecta la contaminaci??n del aire en Bogot?? a los ciclistas</a>
									</h4>
                <p>
                  Los ciclistas son efectivamente quienes m??s se exponen al tr??fico, el esmog y la poluci??n, por lo que el intercambio con part??culas nocivas es mayor, en especial cuando se recorren largos trayectos.
</p>

              </div>
              <span>
									<a href="https://www.eltiempo.com/bogota/afectacion-de-la-contaminacion-del-aire-para-los-ciclistas-472238" target="_blank" class="ready-btn">Leer m??s</a>
								</span>
            </div>
            <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
          <!-- Start Left Blog -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="https://agenciadenoticias.unal.edu.co/detalle/article/ciclistas-los-mas-expuestos-a-la-contaminacion-en-bogota.html" target="_blank">
										<img src="img/blog/noticia2.jpg" alt="">
									</a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
										<i class="fa fa-comment-o"></i>
										<a href="https://agenciadenoticias.unal.edu.co" target="_blank">Noticias UN</a>
									</span>
                <span class="date-type">
										<i class="fa fa-calendar"></i>14 de junio 2017
									</span>
              </div>
              <div class="blog-text">
                <h4>
                                        <a href="https://agenciadenoticias.unal.edu.co/detalle/article/ciclistas-los-mas-expuestos-a-la-contaminacion-en-bogota.html" target="_blank">Ciclistas, los m??s expuestos a la contaminaci??n en Bogot??</a>
									</h4>
                <p>
                  Los ciclistas son los m??s afectados por las concentraciones de part??culas ultrafinas en el ambiente, dado que requieren un mayor esfuerzo f??sico y, por ende, una tasa de inhalaci??n m??s alta.
                </p>
              </div>
              <span>
									<a href="https://agenciadenoticias.unal.edu.co/detalle/article/ciclistas-los-mas-expuestos-a-la-contaminacion-en-bogota.html" target="_blank" class="ready-btn">Leer m??s</a>
								</span>
            </div>
            <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
          <!-- Start Right Blog-->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="https://caracol.com.co/emisora/2017/06/15/bogota/1497561972_587611.html" target="_blank">
										<img src="img/blog/noticia3.jpg" alt="">
									</a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
										<i class="fa fa-comment-o"></i>
										<a href="https://caracol.com.co/" target="_blank">Caracol</a>
									</span>
                <span class="date-type">
										<i class="fa fa-calendar"></i>15 de junio 2017
									</span>
              </div>
              <div class="blog-text">
                <h4>
                                        <a href="https://caracol.com.co/emisora/2017/06/15/bogota/1497561972_587611.html" target="_blank">Ciclistas, los m??s afectados por la contaminaci??n del aire</a>
									</h4>
                <p>
                  Debido a exposici??n de part??culas contaminantes en el aire, los expertos recomiendan utilizar m??scaras o tapabocas antipoluci??n, mientras se adelantan pol??ticas para disminuir la contaminaci??n en el aire.
                </p>
              </div>
              <span>
									<a href="https://caracol.com.co/emisora/2017/06/15/bogota/1497561972_587611.html" target="_blank" class="ready-btn">Leer M??s</a>
								</span>
            </div>
          </div>
          <!-- End Right Blog-->
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->
  
  
        <div class="section-headline text-center">
               <h2>Emisiones de CO2 de los veh??culos</h2>
            </div>

  <!-- our-skill-area start -->
  <div class="our-skill-area fix hidden-sm">
   
    <div class="test-overly"></div>
    <div class="skill-bg area-padding-2">
      <div class="container">
        <!-- section-heading end -->
        <div class="row">
          <div class="skill-text">
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <input type="text" class="knob" value="0" data-rel="38.5" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">Transportes de carga</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <input type="text" class="knob" value="0" data-rel="17" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">Camperos y camionetas</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <input type="text" class="knob" value="0" data-rel="12.3" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">Los SITP provisionales</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
            
              <div class="single-skill">
                <div class="progress-circular">
                  <input type="text" class="knob" value="0" data-rel="12" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">Motocicletas </h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- our-skill-area end -->
  

  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Cont??ctanos</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>Call: <a href="tel:+57 313 4860036">+57 313 4860036</a><br>
                  <span>Lunes-Viernes (9am-5pm)</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Correo: breatheandride@gmail.com<br>
                  <span>Web: <a href="https://britheride.000webhostapp.com/">https://britheride.000webhostapp.com/</a></span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Locaci??n: Colombia<br>
                  <span>Bogot??, D.C</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

  <!-- Start Google Map -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63627.0917686237!2d-74.06521769658004!3d4.648697185483674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f909e88bf0583%3A0xcee402e0b005bc73!2sComuna%20Chapinero%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1618115662521!5m2!1ses-419!2sco" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- End Map -->
          </div>
          <!-- End Google Map -->

          <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="enviar.php" method="POST" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Tu Nombre" data-rule="minlen:4" data-msg="Ingrese al menos 4 caracteres" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Tu correo" data-rule="email" data-msg="Introduzca una direcci??n de correo electr??nico v??lida" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Ingrese al menos 8 caracteres de asunto" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Por favor escriba algo para nosotros" placeholder="Mensaje"></textarea>
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
                  <p><span>Tel:</span> <a href="tel:+57 322 460 6847">+57 322 460 6847</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="tel:+57 322 460 6847">+57 323 206 7189</a></p>
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
	}
 ?>
