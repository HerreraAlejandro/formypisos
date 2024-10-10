<?php
$mailTo = "formypisos@gmail.com";
$Email = $_POST['Email'];
$mailHeaders = "From: ". $Email . "\n";
$mailHeaders .= "Reply-To: " . $Email . "\n";
$mailSubject = "Contact Form Spanish";
 
$mailBody  = "Formy Pisos\n\n";
reset ($_POST);
 while (list ($key, $val) = each ($_POST)) {
        $mailBody .= $key . ": " . $val . "\n";
 }
  
/* Send Mail */
mail($mailTo, $mailSubject, $mailBody, $mailHeaders);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Pisos de mareda | mantenimiento | pulido | instalaciones</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<meta name="viewport" content="initial-scale=1; maximum-scale=1">-->

        <link rel="stylesheet" type="text/css" href="css/theme-style.css">
        <link rel="stylesheet" href="css/ie.style.css">

        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->

        <script src="js/vendor/modernizr.js"></script>
                <!--[if IE 8]><script src="js/vendor/less-1.3.3.js"></script><![endif]-->
        <!--[if gt IE 8]><!--><script src="js/vendor/less.js"></script><!--<![endif]-->

    </head>
    <body>

        <header id="header">
            <div class="header-top-row">
                <div class="container">
                    <div class="header-quick-call pull-left">
 <span><mark>Telefonos: 3115852738 / 3193155477 / 4883948</mark></span>
                    </div>
                    <div class="header-socials pull-right">
                       
                        <a href="#">
                            <span class="icon-stack">
                                <i class="icon-circle icon-stack-base"></i>
                                <i class="icon-twitter icon-dark"></i>
                            </span>
                        </a>
                       
                        <a href="#">
                            <span class="icon-stack">
                                <i class="icon-circle icon-stack-base"></i>
                                <i class="icon-facebook icon-dark"></i>
                            </span>
                        </a>
                     
                        <a href="#">
                            <span class="icon-stack">
                                <i class="icon-circle icon-stack-base"></i>
                                <i class="icon-google-plus icon-dark"></i>
                            </span>
                        </a>
                    </div><!-- /header-socials -->
                   
                </div><!-- /container -->
            </div><!-- /header-top-row -->

            <div class="header-main-menu">
                <div class="container">
                    <a href="index.html" class="header-logo pull-left"></a>
                    <div class="top-navigation pull-right">
                        <a class="toggleMenu" href="#"><i class="icon-reorder"></i></a>
                        <ul class="nav">
           <li class="active"><a href="index.html">Inicio</a></li>
           <li><a href="mantenimiento-pisos-madera.html">Matenimiento</a></li>
           <li><a href="Servicios.html">Servicios</a></li>
           <li><a href="pulido-pisos-madera.html">Pulido</a></li>                      
           <li><a href="maquinaria-pisos-madera.html">Maquinaria</a></li>
           <li><a href="galeria.html">Galeria</a></li>
           <li><a href="contactenos.html">Contactenos</a></li>
                        </ul>
                    </div>
                </div><!-- /container -->
            </div><!-- /header-main-menu -->
        </header>

        <section>
            <div class="block-slider">
                <div id="myCarousel" class="carousel slide">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                           <img src="img/slider/1.jpg" />
                          
                            <div class="carousel-caption hidden-phone">
                              <h4>Pulida pisos en madera</h4>
                                <p>Si sus pisos de madera ya están opacos por el paso de los años y el constante uso, en Madetech los hacemos volver a brillar.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slider/2.jpg" />
                            <div class="carousel-caption hidden-phone">
                                <h4>Lacada</h4>
                                <p>Formy Pisos utiliza lacas de la mejor calidad para darle a sus pisos un brillo fantástico y duradero.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slider/3.jpg" />
                            <div class="carousel-caption hidden-phone">
                                <h4>Pulido de piso sin POLVO</h4>
                                <p>Le damos la tranquilidad de que su familia no sufrirá por el polvo al pulir el piso  ya que contamos con una variedad de maquinas CERO POLVO que no permite que se dañe el acabado de sus paredes, sus electrodomésticos y/o tapizados. </p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slider/4.jpg" />
                            <div class="carousel-caption hidden-phone">
                                <h4>Mantenimiento pisos de madera</h4>
                                <p>El deterioro de su pisos puede hacer que la belleza de su piso se pierda, es por que nuestro servicio no provoca el mas mínimo desgaste de la madera al pulir por lo que se es posible prolongar la vida de su piso.</p>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
                </div>
            </div><!-- /slider-->
        </section>

        <section><!-- /welcome block -->
        </section>

        <section>
            <div class="block block-featured-info">
                <div class="container">
                    <div class="row">
                        <div class="span4">
                            <div class="image-with-transparent-border">
                                <div class="image-overlay">
                                    <a href="" class="bubble-more">Formy Pisos</a>
                                </div>
                               <img src="img/4.jpg" />
                            </div>
                            <h2><i class="icon-wrench"></i> Mantenimiento</h2>
                           
                        </div>
                        <div class="span4">
                            <div class="image-with-transparent-border">
                                <div class="image-overlay">
                                    <a href="" class="bubble-more">Formy Pisos</a>              </div>
                              <img src="img/5.jpg" />
                            </div>
                            <h2><i class="icon-briefcase"></i> Pulido</h2>
                        
                        </div>
                        <div class="span4">
                            <div class="image-with-transparent-border">
                                <div class="image-overlay">
                                    <a href="" class="bubble-more">Formy Pisos</a>                 </div>
                                <img src="img/6.jpg" />
                            </div>
                            <h2><i class="icon-bullhorn"></i>Maquinaria</h2>
                         
                        </div>
                    </div>
                </div>
            </div><!-- /block-featured-services -->
        </section>

        <section>
            <div class="block block-why-choose-us color-scheme-1">
                <div class="container">
                     <ul class="row">
                        <li class="span3">
                            <p align="justify">Tenemos la experiencia requerida para garantizar que los procesos de reparación y mantenimiento de sus pisos cumplan con los procesos y técnicas más adecuadas para cada caso.</p>
                        </li>
                        <li class="span3">
                             <p align="justify">Instalamos todo tipo de pisos y escaleras, en madera o laminados. Cada detalle en la distribución de las tablas, cada empalme y cada moldura son considerados para un acabado perfecto.</p>
                        </li>
                        <li class="span3">
                            <p align="justify">instaladores profesionales de pisos para los siguientes materiales:  mármol, granito, cerámica, porcelanato, azulejos convencional y de vidrio, sellado preventivo y mantenimiento de piedras naturales mármol, granito y otros </p>
                        </li>
                        <li class="span3">
                          
                            <p align="justify">instalacion de  pisos bogota y cundinamarca de madera  y laminados en los siguientes materiales: Piso flotante, pisos PVC, bambu pisos laminados, duela maciza, duela estufada, con diamante, sin diamante, empatada, con diferentes materiales de madera</p>
                        </li>
                    </ul>
                </div>
            </div><!-- /block-why-choose-us -->
        </section>

       
        <section>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="span4">
                            <div class="banner-text-with-icon banner-text-light clearfix">
                             <iframe width="320" height="240" src="//www.youtube.com/embed/xy3H8Pl27r4?rel=0" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="banner-text banner-text-dark">
                               <iframe width="320" height="240" src="//www.youtube.com/embed/KRbkXd_2m_8?rel=0" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="banner-text-with-icon banner-text-light clearfix">
                               <iframe width="320" height="240" src="//www.youtube.com/embed/H6Vk-Cg_pCg?rel=0" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/-->
        </section>

        <section>
            <div class="block block-partners">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <ul class="flexisel">
                                <li><img src="img/sl/1.jpg" alt="1"></li>
                                <li><img src="img/sl/2.jpg" alt="1"></li>
                                <li><img src="img/sl/3.jpg" alt="1"></li>
                                <li><img src="img/sl/4.jpg" alt="1"></li>
                                <li><img src="img/sl/5.jpg" alt="1"></li>
                                <li><img src="img/sl/6.jpg" alt="1"></li>
                                <li><img src="img/sl/7.jpg" alt="1"></li>
                                <li><img src="img/sl/8.jpg" alt="1"></li>
                                <li><img src="img/sl/9.jpg" alt="1"></li>
                                <li><img src="img/sl/10.jpg" alt="1"></li>
                                <li><img src="img/sl/11.jpg" alt="1"></li>
                                <li><img src="img/sl/12.jpg" alt="1"></li>
                                <li><img src="img/sl/13.jpg" alt="1"></li>
                                <li><img src="img/sl/14.jpg" alt="1"></li>
                                <li><img src="img/sl/15.jpg" alt="1"></li>
                                <li><img src="img/sl/16.jpg" alt="1"></li>
                                <li><img src="img/sl/17.jpg" alt="1"></li>
                                <li><img src="img/sl/18.jpg" alt="1"></li>
                                <li><img src="img/sl/19.jpg" alt="1"></li>
                                <li><img src="img/sl/20.jpg" alt="1"></li>
                             </ul>
                        </div>
                    </div>
                </div>
            </div><!--/-->
        </section>


        <footer>
            <div class="footer-information color-scheme-1">
                <div class="container">
                    <div class="row">
                        <div class="span4">
                            <h4>Tags</h4>
                            <ul class="footer-tags">
                                <li><a href="">Limpieza de pisos</a></li>
                                <li><a href="">Mantenimiento</a></li>
                                <li><a href="">Desmanchado</a></li>
                                <li><a href="">Sellado</a></li>
                                <li><a href="">Personal capacitado</a></li>
                                <li><a href="">Pulido</a></li>
                            </ul>
                           
                        </div>
                        
                           <div class="span4">
                            <h4>Datos de contacto</h4>
                            <p style="font-size:20px"><strong>Telefono: (057)4883948</strong><br>
                              <strong>Celulares: 3115852738  / 
                          3193155477</strong>
                          Bogotá - Colombia </p>
                        </div>
                        <div class="span4">
                            <h4>PULIDAS 100% LIBRE DE POLVO</h4>
                            <p align="justify">
                              Maderas, Granadillo, Incienso, Zapan, Parqueton, Escaleras, Pisos Laminados de 8.3 y 12.3 mm de espesor, Garantizado, Cotizamos sin compromiso, Asesoramos, Calidad, Seriedad y Cumplimiento.
                            </p>
                            
                        </div>
                     
                    </div>
                </div>
            </div>
            <div class="footer-copy color-scheme-2">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <a href="index.html" class="logo-copy pull-left"></a>
                            <p class="pull-left">
                               Copyright © 2014 | www.formypisos.com<br> <a href="http://www.orangesys.net" target="_blank">Paginas Web Bogota</a>
                            </p>

                        </div>

                    </div>
                </div>
            </div>
        </footer>

        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/bootstrap.js"></script>
        <script src="js/vendor/holder.js"></script>
        <script src="js/vendor/jquery.easing.1.3.js"></script>
        <script src="js/vendor/jquery.magnific-popup.js"></script>
        <script src="js/vendor/jquery.grid.js"></script>
        <script src="js/vendor/jquery.bxslider.js"></script>
        <script src="js/vendor/jquery.flexisel.js"></script>
        <script src="js/vendor/jquery.quicksand.js"></script>
        <script src="js/vendor/jquery.transit.js"></script>
        <script src="js/vendor/parallax.js"></script>
        <script src="js/vendor/jquery.parallax.content.slider.js"></script>
        <script src="js/vendor/jquery.jPages.js"></script>
        <script src="js/vendor/raphael.js"></script>
        <script src="js/responsive-navbar.js"></script>
        
        <script src="js/main.js"></script>
        <script src="js/kite-animation.js"></script>

     
    </body>
</html>
