<!DOCTYPE html>
<?php
//session_start();
?>
<html lang="en">
    <head>
        <title>Aprenda en el exterior - Inicio</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta id="usuario" content="<?php // echo $_SESSION['userid']         ?>">
        <meta name="keywords" content="Educational Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--// Meta tag Keywords -->
        <!-- css files -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <!-- //css files -->
        <!-- online-fonts -->
        <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&subset=latin-ext" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Covered+By+Your+Grace" rel="stylesheet">
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/accionesLogin.js"></script>
        <!-- //online-fonts -->
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
        <div class="main-w3layouts" id="home">
            <!--top-bar-->
            <div class="top-search-bar">
                <div class="header-top-nav">
                    <ul>
                        <li><a href="#" data-toggle="modal" id="como"data-target="#myModal3"><i class="fa fa-key" aria-hidden="true"></i>Login</a></li>
                        <li><a href="#" data-toggle="modal"id="algo" data-target="#myModal4"><i class="fa fa-lock" aria-hidden="true"></i>Registrarse</a></li>
                        <li><a href="#" data-toggle="dropdown" id="botonUsuario" class="dropdown-toggle" data-target="#"><i class="fa fa-user" aria-hidden="true"></i>Usuario</a>    
                            <ul class="dropdown-menu">
                                <li><a href="#" data-toggle="modal" data-target="#myModal50"><i class="fa fa-check-circle" aria-hidden="true"></i>Agregar Comentario</a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Comprar Curso</a></li>
                                <li><a href="Logout.php"><i class="fa fa-close" aria-hidden="true"></i>Cerrar Sesi&oacuten</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="clearfix"></div>

            <!-- //Modal1 -->

            <!-- Modal3 -->
            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" >
                <div class="modal-dialog" role="document">
                    <!-- Modal content-->
                    <div class="modal-content news-w3l">
                        <div class="modal-header">
                            <button type="button" class="close w3l" data-dismiss="modal">&times;</button>
                            <h4>Ingresa a tu cuenta</h4>
                            <!--newsletter-->
                            <div class="login-main wthree">
                                <form method="post" action="Login.php" enctype="multipart/form-data">
                                    <input type="text" placeholder="Nombre Usuario" name="nombreUsuario" id="nombreUsuario" required="">
                                    <input type="password" placeholder="Contraseña" name="password" id="password" required="">
                                    <div class="g-recaptcha" data-sitekey="6LcqxxsUAAAAAArrOk_VtGKqNsEvRqbLoCAYnJgE"></div>
                                    <input type="submit" value="Ingresar" name="ingresarPagina" class="btn" id="ingresarSistema"> <br>
                                </form>
                            </div>
                            <!--//newsletter-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- //Modal3 -->

            <!-- Modal4 -->
            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
                <div class="modal-dialog" role="document">
                    <!-- Modal content-->
                    <div class="modal-content news-w3l">
                        <div class="modal-header">
                            <button type="button" class="close w3l" data-dismiss="modal">&times;</button>
                            <h4>Registrarse</h4>
                            <!--newsletter-->
                            <div class="login-main wthree">
                                <form method="post" action="Control.php">
                                    <input type="text" placeholder="Nombre Usuario" name="NombreUsuario" id="NombreUsuario" required="">
                                    <input type="password" placeholder="Contraseña" name="pass" id="pass" required="">
                                    <input type="password" placeholder="Repetir Contraseña" name="repetirPass" id="repetirPass" required="">
                                    <input type="submit" value="Registrarse Ahora" name="registrarsePagina" class="btn" id="registrarsePagina">
                                </form>
                            </div>
                            <!--//newsletter-->			
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- //Modal4-->
            <div class="search">
                <form action="#" method="post">
                    <input type="search" placeholder="Buscar..." required="" />
                    <input type="submit" value=" ">
                </form>
            </div>
            <div class="clearfix"></div>
            <!--//top-bar-->
            <!-- navigation -->
            <div class ="top-nav">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <!-- navbar-header -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php" class="hvr-underline-from-center active">Inicio</a></li>
                            <li><a href="#about" class="hvr-underline-from-center scroll">Quienes Somos</a></li>
                            <li><a href="#services" class="hvr-underline-from-center scroll">Cursos</a></li>
                            <li><a href="SolicitarCotizacion.php">Solicitar Cotizaci&oacuten</a></li>
                            <li><a href="#contact" class="hvr-underline-from-center scroll">Contacto</a></li> 
                        </ul>
                    </div>
                    <div class="clearfix"> </div>	
                </nav>
            </div>
            <!-- //navigation -->

            <div class="header">
                <!-- Slider -->
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider">
                            <li>
                                <div class="slider-info">
                                    <p>Mejor educaci&oacuten para un mundo mejor </p>
                                    <h3><a href="index.php"><span>A</span>Prendiendo</a></h3>
                                    <h6>Donde hay educaci&oacuten no hay distinci&oacuten de clases.</h6>
                                </div>
                            </li>
                            <li>

                                <div class="slider-info">
                                    <p>El aprendizaje nunca agota la mente</p>
                                    <h3><a href="index.php"><span>A</span>Prendiendo</a></h3>
                                    <h6>Donde hay educaci&oacuten no hay distinci&oacuten de clases.</h6>
                                </div>
                            </li>
                            <li>

                                <div class="slider-info">
                                    <p>La sabidur&iacutea comienza con preguntarse</p>
                                    <h3><a href="index.php"><span>A</span>Prendiendo</a></h3>
                                    <h6>Donde hay educaci&oacuten no hay distinci&oacuten de clases.</h6>
                                </div>
                            </li>
                            <li>

                                <div class="slider-info">
                                    <p>con&eacutectese con una mejor educaci&oacuten</p>
                                    <h3><a href="index.php"><span>A</span>Prendiendo</a></h3>
                                    <h6>Donde hay educaci&oacuten no hay distinci&oacuten de clases.</h6>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- //Slider -->
            </div>
        </div>
        <!--main-content-->

        <!--about-->
        <div id="about" class="about">
            <div class="container">
                <h1>Quienes<span> Somos</span></h1>
                <h2>Somos una agencia l&iacuteder en el sector de la enseñanza de idiomas, Aprendiendo ofrece programas educativos y cursos de idiomas hechos a la medida en más de 10 destinos en todo el mundo. Nuestros asesores est&aacuten a su disposici&oacuten antes, durante y despu&eacutes de su estad&iacutea para brindarle una experiencia inolvidable.</h2>
                <div class="specialty-grids-top">
                    <div class="col-md-4 service-box" style="visibility: visible; -webkit-animation-delay: 0.4s;">
                        <figure class="icon">
                            <span class="glyphicon glyphicon-education a1" aria-hidden="true"></span>
                        </figure>
                        <h5>Excelente Educaci&oacuten</h5>
                        <p>Con años de experiencia en el &aacutembito educativo, estamos siempre al d&iacutea en las necesidades cambiantes de los estudiantes de idiomas de Aprendiendo.</p>
                    </div>
                    <div class="col-md-4 service-box wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
                        <figure class="icon">
                            <span class="glyphicon glyphicon-text-background a2" aria-hidden="true"></span>
                        </figure>
                        <h5>Clases Dinamicas</h5>
                        <p>Gracias a nuestra trayectoria en el sector y al hecho de que escuchamos las opiniones de nuestros estudiantes, podemos ofrecer clases &uacutenicas y que son innovadoras para que el estudiante tenga una mejor experiencia.</p>
                    </div>
                    <div class="col-md-4 service-box wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
                        <figure class="icon">
                            <span class="glyphicon glyphicon-check   a3" aria-hidden="true"></span>						
                        </figure>
                        <h5>Calidad Certificada</h5>
                        <p>Aprendiendo está avalada por los órganos de control de calidad del turismo y la educación de Colombia.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!-- //Modal1 -->
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="about-info">
            <img src="images/ab.jpg" alt="about-image">
            <div class="right-agile">
                <h5>Nuestra Historia</h5>
                <p>Desde su fundaci&oacuten, en 2015, Aprendiendo ha destacado por proponer cursos de idiomas en destinos cada vez más originales alrededor de todo el mundo, adem&aacutes de por ofrecer un servicio de asesor&iacutea personalizado y gratuito.</p>
                <h5>Nuestra Filosofia</h5>
                <p>El intercambio cultural, la comunicación y la educación son el eje central de nuestra filosofía. En Aprendiendo, todos los miembros de nuestro equipo comparten la pasi&oacuten por los idiomas y los viajes.</p>
            </div>
        </div>
        <div class="clearfix"></div>
        <!--//about-->

        <!-- services -->
        <div class="services" id="services">
            <h3>Cursos</h3>
            <div class="col-md-3 services-gd text-center" data-wow-delay=".5s">
                <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                    <a href="Destinos.php" class="hi-icon"><img src="images/book.png" alt=" " /></a>
                </div>
                <h4>Destinos</h4>
                <p>M&aacutes informac&iacuteon</p>
            </div>
            <div class="col-md-3 services-gd text-center" data-wow-delay=".5s">
                <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                    <a href="Idiomas.php" class="hi-icon"><img src="images/edu.png" alt=" " /></a>
                </div>
                <h4>Idiomas</h4>
                <p>M&aacutes informac&iacuteon</p>
            </div>
            <div class="col-md-3 services-gd text-center" data-wow-delay=".5s">
                <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                    <a a href="SolicitarCotizacion.php" class="hi-icon"><img src="images/uni.png" alt=" " /></a>
                </div>
                <h4>Solicitar Cotizaci&oacuten</h4>
                <p>M&aacutes informac&iacuteon</p>
            </div>
            <div class="col-md-3 services-gd text-center" data-wow-delay=".5s">
                <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                    <a href="DestinoMas.php" class="hi-icon"><img src="images/hourglass.png" alt=" " /></a>
                </div>
                <h4>Destinos mas populares</h4>
                <p>M&aacutes informac&iacuteon</p>
            </div>

            <div class="clearfix"> </div>
        </div>

        <!-- Events -->
        <div class="event" id="events">
            <div class="container">
                <h3>Pr&oacuteximos Eventos</h3>
                <div class="col-md-4 eve-agile e1">
                    <div class="eve-sub1">
                        <a href="#" data-toggle="modal" data-target="#myModal5"><img src="images/h2.jpg" alt="image"></a>
                        <h4><a href="#" data-toggle="modal" data-target="#myModal5">Open Day</a></h4>
                        <h6>Por <a href="#">Aprendiendo</a>, Mayo-2017</h6>
                        <p>Te invitamos a que nos visites este fin de semana para que te enteres de las ofertas que tenemos para ti.</p>
                    </div>
                    <div class="eve-sub2">
                        <div class="eve-w3lleft">
                            <h6><i class="fa fa-comment-o" aria-hidden="true"></i>20</h6>
                            <h6><i class="fa fa-heart-o" aria-hidden="true"></i>83</h6>
                        </div>	
                        <div class="eve-w3lright e1">
                            <a href="#" data-toggle="modal" data-target="#myModal5"><h5>M&aacutes</h5></a>
                        </div>
                        <div class="clearfix"></div>	
                    </div>
                </div>
                <div class="col-md-4 eve-agile e2">
                    <div class="eve-sub1">
                        <a href="#" data-toggle="modal" data-target="#myModal6"><img src="images/h1.jpg" alt="image"></a>
                        <h4><a href="#" data-toggle="modal" data-target="#myModal6">Un dia en Aprendiendo</a></h4>
                        <h6>Por <a href="#">Aprendiendo</a>, Mayo-2017</h6>
                        <p>Acercate a nuestras oficinas y recibiras asesoria personalizada para que aprendas el idioma que deseas.</p>
                    </div>
                    <div class="eve-sub2">
                        <div class="eve-w3lleft">
                            <h6><i class="fa fa-comment-o" aria-hidden="true"></i>64</h6>
                            <h6><i class="fa fa-heart-o" aria-hidden="true"></i>86</h6>
                        </div>	
                        <div class="eve-w3lright">
                            <a href="#" data-toggle="modal" data-target="#myModal6"><h5>M&aacutes</h5></a>
                        </div>
                        <div class="clearfix"></div>	
                    </div>
                </div>
                <div class="col-md-4 eve-agile e3">
                    <div class="eve-sub1">
                        <a href="#" data-toggle="modal" data-target="#myModal7"><img src="images/e3.png" alt="image"></a>
                        <h4><a href="#" data-toggle="modal" data-target="#myModal7">Aprendiendo te lleva a Rusia</a></h4>
                        <h6>Por <a href="#">Aprendiendo</a>, Junio-2017</h6>
                        <p>Gana uno de los 8 viajes con todo los gastos pagos que sortearemos entre los que se acerquen a nuestras oficinas.</p>
                    </div>
                    <div class="eve-sub2">
                        <div class="eve-w3lleft">
                            <h6><i class="fa fa-comment-o" aria-hidden="true"></i>90</h6>
                            <h6><i class="fa fa-heart-o" aria-hidden="true"></i>73</h6>
                        </div>	
                        <div class="eve-w3lright">
                            <a href="#" data-toggle="modal" data-target="#myModal7"><h5>M&aacutes</h5></a>
                        </div>
                        <div class="clearfix"></div>	
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4>Open Day</h4>
                        <img src="images/h2.jpg" alt="blog-image" />
                        <span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium.</span>
                    </div>
                </div>

            </div>
        </div>
        <!-- //Modal1 -->
        <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" >
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4>Un dia en Aprendiendo</h4>
                        <img src="images/h1.jpg" alt="blog-image" />
                        <span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium.</span>
                    </div>
                </div>

            </div>
        </div>

        <!-- //Modal1 -->
        <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" >
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4>Aprendiendo te lleva a Rusia</h4>
                        <img src="images/e3.png" alt="blog-image" />
                        <span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium.</span>
                    </div>
                </div>

            </div>
        </div>
        <!-- //Modal1 -->

        <!-- //Events -->

        <!--test-->
        <div id="testimonials" class="review">
            <div class="container">
                <h3 class="title-w3">Testimonios</h3>
                <div class="test-monials">
                    <!--//screen-gallery-->
                    <div class="sreen-gallery-cursual">

                        <div id="owl-demo" class="owl-carousel">
                            <div class="item-owl">
                                <div class="test-review">
                                    <p><img src="images/left-quote.png" alt="">Hice el curso intensivo de alem&aacuten en Berlin, y la experiencia no podr&iacutea haber sido mejor. El ambiente entre los alumnos era estupendo, hab&iacutea mucha riqueza cultural y muchas ganas por aprender.<img src="images/right-quote.png" alt=""></p>
                                    <div class="img-agile">
                                        <img src="images/l1.jpg" class="img-responsive" alt=""/>
                                    </div>
                                    <h5>Camilo Narciso</h5>
                                </div>
                            </div>
                            <div class="item-owl">
                                <div class="test-review">
                                    <p><img src="images/left-quote.png" alt="">Decid&iacute realizar una estancia en Miami este verano y he tenido la oportunidad de conocer a much&iacutesima gente de un mont&oacuten de partes del mundo. He podido practicar mucho y mejorar mi nivel y realmente he llegado a Colombia con mejor inglés.<img src="images/right-quote.png" alt=""></p>
                                    <div class="img-agile">
                                        <img src="images/l2.jpg" class="img-responsive" alt=""/>
                                    </div>
                                    <h5>Mar&iacutea Jos&eacute Garc&iacutea</h5>
                                </div>
                            </div>
                            <div class="item-owl">
                                <div class="test-review">
                                    <p> <img src="images/left-quote.png" alt="">Hola, me llamo Fabi&aacuten y soy un estudiante que ha venido a aprender franc&eacutes a Paris. Estoy muy contento con la escuela, ya que estoy aprendiendo bastante r&aacutepido el idioma y los profesores son muy profesionales. Conoces a mucha gente de todas las partes del mundo ya que hay mucha diversidad de nacionalidades.<img src="images/right-quote.png" alt=""></p>
                                    <div class="img-agile">
                                        <img src="images/l3.jpg" class="img-responsive" alt=""/>
                                    </div>
                                    <h5>Fabi&aacuten Sanz</h5>
                                </div>
                            </div>
                            <div class="item-owl">
                                <div class="test-review">
                                    <p><img src="images/left-quote.png" alt="">Busqu&eacute la mejor escuela calidad precio en Inglaterra y la encontr&eacute. Durante un mes, me han ofrecido lo que yo necesitaba: refrescar mi ingl&eacutes con buenos profesores, buenos compañeros y un mont&oacuten de actividades extra. Sin duda, la recomiendo.<img src="images/right-quote.png" alt=""></p>
                                    <div class="img-agile">
                                        <img src="images/t4.jpg" class="img-responsive" alt=""/>
                                    </div>
                                    <h5>Laura Morello</h5>
                                </div>
                            </div>
                        </div>
                        <!--//screen-gallery-->
                    </div>
                </div>
            </div>
        </div>
        <!--//test-->

        <!--contact-->
        <div class="contact-agile" id="contact">
            <h3>Nuestra <span>Ubicaci&oacuten</span></h3>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d420608.8516286385!2d68.91754328549717!3d34.55338692805766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d1694c3c1e6d49%3A0xebdf473578214429!2sKabul%2C+Afganist%C3%A1n!5e0!3m2!1ses!2sco!4v1491951557096" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <!--//contact-->

        <!-- footer -->
        <div class="footer" id="footer">
            <div class="container">
                <div class="col-md-4 agileinfo_footer_grid">
                    <h4>Quienes Somos</h4>
                    <p>Somos una agencia l&iacuteder en el sector de la enseñanza de idiomas, Aprendiendo ofrece programas educativos y cursos de idiomas hechos a la medida en más de 10 destinos en todo el mundo. Nuestros asesores est&aacuten a su disposici&oacuten antes, durante y despu&eacutes de su estad&iacutea para brindarle una experiencia inolvidable.</p>
                </div>
                <div class="col-md-4 agileinfo_footer_grid mid-w3l nav2">
                    <h4>Opciones</h4>
                    <ul>
                        <li><a href="#home" class="scroll">Inicio</a></li>
                        <li><a href="#about" class="scroll">Quienes Somos</a></li>
                        <li><a href="#services" class="scroll">Cursos</a></li>
                        <li><a href="##" class="scroll">Solicitar Cotizaci&oacuten</a></li>
                        <li><a href="#team" class="scroll">Contacto</a></li>
                        <!--<li><a href="#events" class="scroll">Events</a></li>
                        <li><a href="#testimonials" class="scroll">Testimonials</a></li> 
                        -->
                    </ul>
                </div>
                <div class="col-md-4 agileinfo_footer_grid">
                    <h4>Direcci&oacuten</h4>
                    <ul>
                        <li><span class="glyphicon glyphicon-home" aria-hidden="true"></span><a>738 Diamond Road, Kabul - Afganist&aacuten</a></li>
                        <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a>info@aprendiendo.com</a></li>
                        <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><a>(0123) 0111 111 222</a></li>
                    </ul>
                </div>

                <div class="clearfix"> </div>
                <div class="w3agile_footer_copy">
                    <p>© 2017 Aprendiendo. Todos los derechos reservados | Design by <a href="http://w3layouts.com/">W3layouts.</a></p>
                </div>
            </div>
        </div>
        <!-- //footer -->

        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>


        <script src="js/jquery.chocolat.js"></script>
        <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
        <!--light-box-files -->
        <script>
            $(function() {
                $('.gallery-grid a').Chocolat();
            });
        </script>
        <!-- required-js-files-->

        <link href="css/owl.carousel.css" rel="stylesheet">
        <script src="js/owl.carousel.js"></script>
        <script>
            $(document).ready(function() {
                $("#owl-demo").owlCarousel({
                    items: 1,
                    lazyLoad: true,
                    autoPlay: true,
                    navigation: false,
                    navigationText: false,
                    pagination: true,
                });
            });
        </script>
        <!--//required-js-files-->

        <script src="js/responsiveslides.min.js"></script>
        <script>
            $(function() {
                $("#slider").responsiveSlides({
                    auto: true,
                    pager: false,
                    nav: true,
                    speed: 1000,
                    namespace: "callbacks",
                    before: function() {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function() {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });
            });
        </script>


        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->

        <!-- bottom-top -->
        <!-- smooth scrolling -->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */
                $().UItoTop({easingType: 'easeOutQuart'});
            });
        </script>
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //smooth scrolling -->
        <!--// bottom-top -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

    </body>
</html>