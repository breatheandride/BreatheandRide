<?php 
	session_start();

	if(isset($_SESSION['user'])){
 ?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>General</title>
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
                
                      <li class="active">
                    <a class="page-scroll" href="#home">General</a>
                  </li>
                  
                  <li>
                    <a class="page-scroll" href="inicio.php">Mi información</a>
                  </li>
                     <li>  
                    <a class="page-scroll" href="meme.php">Memes</a>
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
        <img src="img/slider/datos.png" alt="" title="#slider-direction-1"    width="1920" 
     height="930" />
      </div>
      </div>


      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">¿Qué hacemos? </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Nos preocupamos porque conozcas tu entorno</h1>
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
                      <p><a href="meme.php">¡Click aquí y diviertete un rato!</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                </div>
              </div>
              <!-- recent end -->
            <div class="single-blog-page">
              <div class="left-blog">
                <h4>Predicción de datos</h4>
                <ul>
                   <li>
                    <a href="#Suba">Suba</a>
                  </li>
                  <li>
                    <a href="#Usaquen">Usaquén</a>
                  </li>
                  <li>
                    <a href="#Tunal">Tunal</a>
                  </li>
                  <li>
                    <a href="#kennedy">Kennedy</a>
                  </li>
                  <li>
                    <a href="#Ferias">Las Ferias</a>
                  </li>
                  <li>
                    <a href="#Fontibon">Fontibón</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="single-blog-page">
              <div class="left-blog">
                <h4>Especificaciones Técnicas</h4>
                <ul>
                  <li>
                    <a href="#services">Sensores y Actuadores</a>
                  </li>
                  <li>
                    <a href="#blog">Esquematico y PCB</a>
                  </li>
                  <li>
                    <a href="#datos">Conectividad</a>
                  </li>
                  <li>
                    <a href="#datos">Analitica Descriptiva</a>
                  </li>
                  <li>
                    <a href="#datos">Analitica Predictiva</a>
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
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                    <h2>Índice de Contaminación</h2>
                    </div>
                </div>
            </div>
              
            <h3>A continuación, se muestran los niveles de contaminación con su respectiva gravedad, para que sepas qué índices son malos, muy malos, moderados y buenos.</h3><br><br>
            
            
              <div  id="Niveles">
              <div class="infogram-embed" data-id="e5603f4c-9fcc-42ab-ac5d-2fb31c6a14ec" data-type="interactive" data-title="Sales Report Grey"></div><script>!function(e,i,n,s){var t="InfogramEmbeds",d=e.getElementsByTagName("script")[0];if(window[t]&&window[t].initialized)window[t].process&&window[t].process();else if(!e.getElementById(n)){var o=e.createElement("script");o.async=1,o.id=n,o.src="https://e.infogram.com/js/dist/embed-loader-min.js",d.parentNode.insertBefore(o,d)}}(document,0,"infogram-async");</script><div style="padding:8px 0;font-family:Arial!important;font-size:13px!important;line-height:15px!important;text-align:center;border-top:1px solid #dadada;margin:0 30px"><a href="https://infogram.com/e5603f4c-9fcc-42ab-ac5d-2fb31c6a14ec" style="color:#989898!important;text-decoration:none!important;" target="_blank">Sales Report Grey</a><br><a href="https://infogram.com" style="color:#989898!important;text-decoration:none!important;" target="_blank" rel="nofollow">Infogram</a></div>
            </div>
          </div>
        </div>
        
        <div class="row">
                <div class="col-md-14 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                    
                    <a class="ready-btn right-btn page-scroll" href="https://aqicn.org/here/" target="_blank">Más Información</a>
                </div>
            </div>
        </div>
        <br><br><br>
        
        <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                    <h2>AQI, Nivel de conaminación del aire</h2>
                </div>
            </div>
        </div>
        <h3>Desde el año 2007, el proyecto World Air Quality Index se ha encargado de brindar una concienciación sobre la contaminacion del aire de los ciudadanos, proporcionando información sobre la calidad del aire para más de 130 países, cubriendo más de 30.000 estaciones en 2000 ciudades importantes.</h3>
    </div> 
        <h3>Como ejemplo de ellos podemos observar el índice de calidad del aire en tiempo real en 4 importantes ciudades.</h3>
              <br>  


<script type="text/javascript" charset="utf-8">
        (function(w,d,t,f){ w[f]=w[f]||function(c,k,n){s=w[f],k=s['k']=(s['k']||(k?('&k='+k):''));s['c']= c=(c instanceof Array)?c:[c];s['n']=n=n||0;L=d.createElement(t),e=d.getElementsByTagName(t)[0];
        L.async=1;L.src='//feed.aqicn.org/feed/'+(c[n].city)+'/'+(c[n].lang||'')+'/feed.v1.js?n='+n+k;
        e.parentNode.insertBefore(L,e); }; })( window,document,'script','_aqiFeed' );
</script>
            
<span id="city-aqi-container"></span>



<script type="text/javascript" charset="utf-8">
var cities =[ "Bogota", "guangzhou", "tokyo", "shanghai", "paris","hongkong"];
var aqiWidgetConfig = [];
cities.forEach(function(city){ aqiWidgetConfig.push({container:"city-aqi-container",city:city, callback: displayCity});});
_aqiFeed(aqiWidgetConfig);
function displayCity(aqi) {
$("#mutiple-city-aqi").append(aqi.text("<center>%cityname<br>%aqi<br><small>%date</small></center>"));
}
</script>

<script type="text/javascript" charset="utf-8">
	_aqiFeed({display:" <div style='%style;max-width:1900px;text-align:center;'><small>%cityname AQI:</small> <div style='font-size:88px;height:88px;padding-top:30px;'>%aqiv</div> %impact</div> ", container:"city-aqi-container", city:"cities", lang:"es"
	});
</script>

  <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                     <br> 
                      <br> 
                      
                </div>
            </div>
        </div>
    
        <!-- End Blog Area -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>Predicciones Por Estación</h2>
                </div>
            </div>
        </div>
    
        <!-- PREDICCION SUBA -->
        <div  id="Suba">
        <div class="infogram-embed" data-id="2e50abc2-587b-4ddf-8f8b-77175cb25702" data-type="interactive" data-title="Suba"></div><script>!function(e,i,n,s){var t="InfogramEmbeds",d=e.getElementsByTagName("script")[0];if(window[t]&&window[t].initialized)window[t].process&&window[t].process();else if(!e.getElementById(n)){var o=e.createElement("script");o.async=1,o.id=n,o.src="https://e.infogram.com/js/dist/embed-loader-min.js",d.parentNode.insertBefore(o,d)}}(document,0,"infogram-async");</script><div style="padding:8px 0;font-family:Arial!important;font-size:13px!important;line-height:15px!important;text-align:center;border-top:1px solid #dadada;margin:0 30px"><a href="https://infogram.com/2e50abc2-587b-4ddf-8f8b-77175cb25702" style="color:#989898!important;text-decoration:none!important;" target="_blank">Suba</a><br><a href="https://infogram.com" style="color:#989898!important;text-decoration:none!important;" target="_blank" rel="nofollow">Infogram</a></div>
        </div>
        <!-- PREDICCION USAQUEN -->
        <div  id="Usaquen">
        <div class="infogram-embed" data-id="07e4c024-e563-451f-9fbe-84ba5c89dfaf" data-type="interactive" data-title="Usaquen"></div><script>!function(e,i,n,s){var t="InfogramEmbeds",d=e.getElementsByTagName("script")[0];if(window[t]&&window[t].initialized)window[t].process&&window[t].process();else if(!e.getElementById(n)){var o=e.createElement("script");o.async=1,o.id=n,o.src="https://e.infogram.com/js/dist/embed-loader-min.js",d.parentNode.insertBefore(o,d)}}(document,0,"infogram-async");</script><div style="padding:8px 0;font-family:Arial!important;font-size:13px!important;line-height:15px!important;text-align:center;border-top:1px solid #dadada;margin:0 30px"><a href="https://infogram.com/07e4c024-e563-451f-9fbe-84ba5c89dfaf" style="color:#989898!important;text-decoration:none!important;" target="_blank">Usaquen</a><br><a href="https://infogram.com" style="color:#989898!important;text-decoration:none!important;" target="_blank" rel="nofollow">Infogram</a></div>
        </div>
        <!-- PREDICCION TUNAL -->
        <div  id="Tunal">
        <div class="infogram-embed" data-id="8b8e68ae-b809-4f6f-aa4b-82226f0ec107" data-type="interactive" data-title="Tunal"></div><script>!function(e,i,n,s){var t="InfogramEmbeds",d=e.getElementsByTagName("script")[0];if(window[t]&&window[t].initialized)window[t].process&&window[t].process();else if(!e.getElementById(n)){var o=e.createElement("script");o.async=1,o.id=n,o.src="https://e.infogram.com/js/dist/embed-loader-min.js",d.parentNode.insertBefore(o,d)}}(document,0,"infogram-async");</script><div style="padding:8px 0;font-family:Arial!important;font-size:13px!important;line-height:15px!important;text-align:center;border-top:1px solid #dadada;margin:0 30px"><a href="https://infogram.com/8b8e68ae-b809-4f6f-aa4b-82226f0ec107" style="color:#989898!important;text-decoration:none!important;" target="_blank">Tunal</a><br><a href="https://infogram.com" style="color:#989898!important;text-decoration:none!important;" target="_blank" rel="nofollow">Infogram</a></div>
        </div>
        <!-- PREDICCION KENNEDY -->
        <div  id="kennedy">
        <div class="infogram-embed" data-id="6ec7fdd2-6cdc-429e-a8da-c8e9a691c5b9" data-type="interactive" data-title="Kennedy"></div><script>!function(e,i,n,s){var t="InfogramEmbeds",d=e.getElementsByTagName("script")[0];if(window[t]&&window[t].initialized)window[t].process&&window[t].process();else if(!e.getElementById(n)){var o=e.createElement("script");o.async=1,o.id=n,o.src="https://e.infogram.com/js/dist/embed-loader-min.js",d.parentNode.insertBefore(o,d)}}(document,0,"infogram-async");</script><div style="padding:8px 0;font-family:Arial!important;font-size:13px!important;line-height:15px!important;text-align:center;border-top:1px solid #dadada;margin:0 30px"><a href="https://infogram.com/6ec7fdd2-6cdc-429e-a8da-c8e9a691c5b9" style="color:#989898!important;text-decoration:none!important;" target="_blank">Kennedy</a><br><a href="https://infogram.com" style="color:#989898!important;text-decoration:none!important;" target="_blank" rel="nofollow">Infogram</a></div>
        </div>
        <!-- PREDICCION FERIAS -->
        <div  id="Ferias">
        <div class="infogram-embed" data-id="9b186945-88db-4d63-b0be-346887794038" data-type="interactive" data-title="Las Ferias"></div><script>!function(e,i,n,s){var t="InfogramEmbeds",d=e.getElementsByTagName("script")[0];if(window[t]&&window[t].initialized)window[t].process&&window[t].process();else if(!e.getElementById(n)){var o=e.createElement("script");o.async=1,o.id=n,o.src="https://e.infogram.com/js/dist/embed-loader-min.js",d.parentNode.insertBefore(o,d)}}(document,0,"infogram-async");</script><div style="padding:8px 0;font-family:Arial!important;font-size:13px!important;line-height:15px!important;text-align:center;border-top:1px solid #dadada;margin:0 30px"><a href="https://infogram.com/9b186945-88db-4d63-b0be-346887794038" style="color:#989898!important;text-decoration:none!important;" target="_blank">Las Ferias</a><br><a href="https://infogram.com" style="color:#989898!important;text-decoration:none!important;" target="_blank" rel="nofollow">Infogram</a></div>
        </div>
        <!-- PREDICCION FONTIBON -->
        <div  id="Fontibon">
        <div class="infogram-embed" data-id="9d777663-62a5-48f6-9b78-8e141616e3e1" data-type="interactive" data-title="Fontibón"></div><script>!function(e,i,n,s){var t="InfogramEmbeds",d=e.getElementsByTagName("script")[0];if(window[t]&&window[t].initialized)window[t].process&&window[t].process();else if(!e.getElementById(n)){var o=e.createElement("script");o.async=1,o.id=n,o.src="https://e.infogram.com/js/dist/embed-loader-min.js",d.parentNode.insertBefore(o,d)}}(document,0,"infogram-async");</script><div style="padding:8px 0;font-family:Arial!important;font-size:13px!important;line-height:15px!important;text-align:center;border-top:1px solid #dadada;margin:0 30px"><a href="https://infogram.com/9d777663-62a5-48f6-9b78-8e141616e3e1" style="color:#989898!important;text-decoration:none!important;" target="_blank">Fontibón</a><br><a href="https://infogram.com" style="color:#989898!important;text-decoration:none!important;" target="_blank" rel="nofollow">Infogram</a></div>
        </div>
         <!-- Start About area -->
    
            <div class="container">
              
             <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                    <h2>Diagrama de Bloques Técnico</h2>
                    </div>
                </div>
            </div>
              <div class="row">
                <!-- single-well start-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="well-left">
                    <div class="single-well">
                      <a>
        		  <img src="img/about/diagram_T.png" alt="">
        		</a>
                    </div>
                  </div>
                </div>
                <!-- single-well end-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="well-middle">
                    <div class="single-well">
                      <a href="#">
                        <h4 class="sec-head">Descripción</h4>
                      </a>
                      <p>
                        Para prestar nuestro servicio, equipamos al Brider con un dispositivo que consta principalmente del sistema embebido raspberry PI, el cual se conecta con los periféricos de interés por medio de los buses tanto UART como I2C integrados en la tarjeta, así como por medio de un ADC externo, garantizando una adquisición confiable de los datos.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- End col-->
              </div>
            </div>
          
          <!-- End About area -->
              <br><br><br>
          <!-- Start Service area -->
            <div id="services" class="services-area area-padding">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="section-headline services-head text-center">
                        <h2>Sensores & Actuadores</h2>
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
                                              <img src="img/sensors/ADS1115.png" alt="" width="35" height="35">
            										</i>	
            										</a>
                              <h4>ADS 1115</h4>
                              <p>
                                V. alimentación: 5v
                                Convertidor analógico digital externo de 16 Bits, con interfaz I2C y 4 entradas independientes.
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
                                              <img src="img/sensors/MQ135.png" alt="" width="35" height="35">
            										</i>	
            										</a>
                              <h4>MQ 135</h4>
                              <p>
                                V. alimentación: 5v
                                Detector de concentracion de gas, con rango de detección de 10ppm~1000ppm de Amoniaco, sulfuro, benceno o humo.
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
                                              <img src="img/sensors/MQ9.png" alt="" width="35" height="35">
            										</i>	
            										</a>
                              <h4>MQ 9</h4>
                              <p>
                                V. alimentación: 5v
                                Detector de concentración de gas, con rango de detección de 10ppm~1000ppm de metano, propano o CO.
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
                                              <img src="img/sensors/GPS.png" alt="" width="35" height="35">
            										</i>	
            										</a>
                              <h4>GPS Neo 6</h4>
                              <p>
                                V. alimentación: 3v-5v
                                GPS con interfaz UART, antena cerámica y memoria EEPROM, frecuencia de refresco de 5hz.
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
                                              <img src="img/sensors/OLED.png" alt="" width="35" height="35">
            										</i>	
            										</a>
                              <h4>Pantalla OLED</h4>
                              <p>
                                V. alimentación: 3v-5.5v
                                con interfaz I2C, driver sh1106 y resolución de 128 x 64 .
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
                                              <img src="img/sensors/Raspberry.png" alt="" width="35" height="35">
            										</i>	
            										</a>
                              <h4>Raspberry PI 3</h4>
                              <p>
                                V. alimentacion: 5v/2.5A
                                Procesador Broadcom BCM2837B0, LAN inalámbrica de 2,4 GHz y 5 GHz, 40 puertos GPIO.
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
              <!-- Start Blog Area -->
                <div id="blog" class="blog-area">
                    <div class="blog-inner area-padding">
                      <div class="blog-overly"></div>
                      <div class="container ">
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                              <h2>Esquemático y PCB</h2>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <!-- Start Left Blog -->
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                              <div class="single-blog-img">
                                <a href="https://www.eltiempo.com/bogota/afectacion-de-la-contaminacion-del-aire-para-los-ciclistas-472238" target="_blank">
                										<img src="img/memes/squematic.png" alt="">
                									</a>
                              </div>
                              <div class="blog-meta">
                                
                              </div>
                              <div class="blog-text">
                                <h4>
                                                        <a>Esquemático del dispositivo.</a>
                									</h4>
                			  </div>
                            </div>
                            <!-- Start single blog -->
                          </div>
                          <!-- End Left Blog-->
                          <!-- Start Left Blog -->
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                              <div class="single-blog-img">
                                <a href="https://agenciadenoticias.unal.edu.co/detalle/article/ciclistas-los-mas-expuestos-a-la-contaminacion-en-bogota.html" target="_blank">
                										<img src="img/memes/PCB.png" alt="">
                									</a>
                			  </div>
                              <div class="blog-meta">
                                
                              </div>
                              <div class="blog-text">
                                <h4>
                                                        <a>Capa "top layer" del circuito impreso.</a>
                									</h4>
                              </div>
                            </div>
                            <!-- Start single blog -->
                          </div>
                          <!-- End Left Blog-->
                          <!-- Start Right Blog-->
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                              <div class="single-blog-img">
                                <a href="https://caracol.com.co/emisora/2017/06/15/bogota/1497561972_587611.html" target="_blank">
                										<img src="img/memes/PCB_2.png" alt="">
                									</a>
                              </div>
                              <div class="blog-meta">
                                
                              </div>
                              <div class="blog-text">
                                <h4>
                                                        <a>Vista 2D circuito impreso. </a>
                									</h4>
                              </div>
                            </div>
                          </div>
                          <!-- End Right Blog-->
                        </div>
                      </div>
                    </div>
                    <div id="datos"></div>
                  </div>
                <!-- End Blog -->
                <!-- Faq area start -->
                  <div class="faq-area area-padding">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="section-headline text-center">
                            <h2>Adquisición y Procesamiento de los Datos</h2>
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
                                                                <span class="acc-icons"></span>I2C, UART & ADC
                											</a>
                										</h4>
                                </div>
                                <div id="check1" class="panel-collapse collapse in">
                                  <div class="panel-body">
                                    <p>
                                              Con el fin de adquirir los datos analógicos de los sensores de manera óptima, se usó un ADC con una muy buena resolución, así como el uso de los buses I2C como UART para transmitir estos datos hacia la raspberry.
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
                                                                <span class="acc-icons"></span>Raspberry PI
                											</a>
                										</h4>
                                </div>
                                <div id="check4" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <p>
                                      Este sistema embebido cuenta con sistema operativo, permite gestionar y controlar los sensores y actuadores usados, concatenar los datos con una marca de tiempo y realizar un primer análisis a los datos.
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
                                                                <span class="acc-icons"></span>  MQTT
                											</a>
                										</h4>
                                </div>
                                <div id="check2" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <p>
                                        Este sencillo protocolo establece la comunicación entre un publicador (en este caso la raspberry) y un suscriptor (el servidor WEB).
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
                                                                <span class="acc-icons"></span>ThinkSpeak
                											</a>
                										</h4>
                                </div>
                                <div id="check3" class="panel-collapse collapse ">
                                  <div class="panel-body">
                                    <p>
                                      Se usa esta plataforma abierta para recibir, visualizar y analizar los datos recibidos en vivo en la nube y así mismo enviar alertas.
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
                                <a href="#p-view-1" role="tab" data-toggle="tab"> Analítica Descriptiva</a>
                              </li>
                              <li>
                                <a href="#p-view-2" role="tab" data-toggle="tab">Analítica Predictiva</a>
                              </li>
                             
                            </ul>
                          </div>
                          <div class="tab-content">
                            <div class="tab-pane active" id="p-view-1">
                              <div class="tab-inner">
                                <div class="event-content head-team">
                                  <h4>Analítica Descriptiva</h4>
                                  <p>
                                    Desde Breathe and Ride te mostramos gráficas en tiempo real sobre la calidad del aire que estás respirando, asi como el promedio del nivel de CO por minuto, tu localización vía GPS y una tabla con todos tus datos durante tu ruta.
                                  </p>
                                  <p>
                                    Este procesamiento se realiza con ayuda de una plataforma IoT de código abierto llamada "ThingsBoard", la cual permite  almacenar, visualizar y analizar los datos enviados desde los diferentes sensores.
                                  </p>
                                 
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="p-view-2">
                              <div class="tab-inner">
                                <div class="event-content head-team">
                                  <h4>Analítica Predictiva</h4>
                                  
                                  <p>
                                    Breathe and Ride te provee de un pronóstico por estación para el índice de calidad del aire de CO. Predecimos las principales estaciones y las más concurridas por los biciusuarios, para que estos puedan planificar sus rutas con anterioridad basados en su salud. 
                                  </p>
                                  <p>
                                  Para el Brider interesado en la parte técnica, utilizamos modelos como los autorregresivos integrados de promedio móvil o ARIMA para realizar las predicciones de las estaciones de Kennedy, Las Feries, Usaquén, Tunal, Fontibón y Suba.
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
          
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <!-- Start Footer bottom Area -->
  <footer>
    <div id="contact" class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2>Breathe<span> &</span> Ride</h2>
                </div>

                <p>Síguenos en nuestras redes sociales:</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="https://www.facebook.com/BreatheAndRide" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="https://twitter.com/BreatheAndRide" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href= "mailto:breatheandride@gmail.com?Subject=Quiero%20saber%20m%E1s" target="_blank"><i class="fa fa-google"></i></a>
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



