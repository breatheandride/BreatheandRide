<!DOCTYPE html>
<html lang="en" >
<head>

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 
<meta charset="UTF-7">

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

  
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
  
  <?php require_once "scripts.php"; ?>
  <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'><link rel="stylesheet" href="./style.css">

 

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
                  <h1>Breathe<span> &</span> Ride </h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a href="index.html">Inicio</a>
                  </li>
              

                  <li class="active">
                    <a href="login.php">Acceder</a>
                    
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
<br><br><br>

<!-- partial:index.partial.html -->
<div class="body">
<div class="cont_centrar">

  <div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
<div class="cont_ba_opcitiy">
        <h2>LOGIN</h2> 
  <p>Ingresar con usuario y contraseña.</p> 
  <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
  </div>
  </div>
<div class="col_md_sign_up">
<div class="cont_ba_opcitiy">
  <h2>SIGN UP</h2>

  
  <p>Cree una nueva cuenta.</p>

  <button class="btn_sign_up" onclick="cambiar_sign_up()">REGISTRARSE</button>
</div>
  </div>
       </div>
       
       <div class="cont_back_info">
       <div class="cont_img_back_black">
       <img src="https://realestatemarket.com.mx/images/2020/09-Septiembre/0109/bogota.gif" alt="" />
       </div>
    </div>
    
    
    
    
    
    
<div class="cont_forms" >
    <div class="cont_img_back_">
       <img src="https://realestatemarket.com.mx/images/2020/09-Septiembre/0109/bogota.gif" alt="" />
       </div>
 <div class="cont_form_login">
<a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
   <h2>LOGIN</h2>
 <input type="text" id="usuario" placeholder="Usuario" />
<input type="password" id="password" placeholder="Contraseña" />
<button class="btn_login" id="entrarSistema" onclick="cambiar_login()">INGRESAR</button>

  </div>
 
    <div class="cont_form_sign_up">
      
    <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
         
         <h2>SIGN UP</h2>
                    
    <input type="text" id="correo" placeholder="Correo" />
    <input type="text" id="usuario2" placeholder="Usuario" />
    <input type="password" id="password2" placeholder="Contraseña" />
    <input type="password" id="password3" placeholder="Confirmar contraseña" /> 
    <br><br>
    <div class="g-recaptcha" data-sitekey="6Lfb9JoaAAAAAG-aLrjFBP4-ZCxVXPvPru3HL2wM"></div>
    <button class="btn_sign_up" id="registrarNuevo"  onclick="cambiar_sign_up()">REGISTRARSE</button>   
   
    </div>
    </div>  
    </div>
    </div>
    
  
<!-- partial -->
  <script  src="./script.js"></script>
  
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

<script type="text/javascript">
  $(document).ready(function(){
    $('#entrarSistema').click(function(){
      if($('#usuario').val()==""){
        alertify.alert("Debes agregar el usuario");
        return false;
      }else if($('#password').val()==""){
        alertify.alert("Debes agregar la contraseña");
        return false;
      }
      cadena="usuario=" + $('#usuario').val() + 
          "&password=" + $('#password').val();
          $.ajax({
            type:"POST",
            url:"php/login.php",
            data:cadena,
            success:function(r){
              if(r==1){
                window.location="inicio.php";
              }else{
                alertify.alert("Fallo al entrar :(");
              }
            }
          });
    }); 


  $('#registrarNuevo').click(function(){
      var pswd = $('#password2').val();
      if($('#correo').val()==""){
        alertify.alert("Debes agregar el correo");
        return false;
      }else if($('#usuario2').val()==""){
        alertify.alert("Debes agregar el usuario");
        return false;
      }else if($('#password2').val()==""){
        alertify.alert("Debes agregar el password");
        return false;
      }else if($('#password3').val()==""){
        alertify.alert("Debes confirmar el password");
        return false;
      }else if($('#password2').val()!=$('#password3').val()){
        alertify.alert("Las contraseñas no coinciden, intentelo de nuevo :'c");
        return false;
      }else if(pswd.length < 7 ){
        alertify.alert("La contraseña debería tener como mínimo 8 caracteres");
        return false;
      }else if(!(pswd.match(/[A-Z]/))){
        alertify.alert("Debes incluir al menos una mayúscula en tu contraseña ");
        return false;
      }else if(!(pswd.match(/\d/)) ){
        alertify.alert("Debes incluir al menos un número en tu contraseña ");
        return false;
      }
      cadena2="correo=" + $('#correo').val() +
          "&usuario=" + $('#usuario2').val() + 
          "&password=" + $('#password2').val();
  
          $.ajax({
            type:"POST",
            url:"php/registro.php",
            data:cadena2,
            success:function(r2){

              if(r2==2){
                alertify.alert("Este usuario ya existe, prueba con otro :)");
  
              }else if(r2==1){
                alertify.success("Agregado con exito");
                     $('#correo').val("");
                     $('#usuario2').val("");
                     $('#password2').val("");
                     $('#password3').val("");
                }else if(r2==3){
                alertify.alert("Ya existe una cuenta asociada con este correo");
              }else{
                alertify.error("Fallo al agregar");
              }
            }
              
          });

    });



  });
</script>