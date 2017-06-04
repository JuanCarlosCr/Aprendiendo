<!DOCTYPE html>
<?php
session_start();
?>

<html lang="en">
    <head>
        <title>Destino Mas Popular - Aprenda en el exterior</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta id="iniciarSesion" content="<?php echo $_POST['nombreUsuario']; ?>">
        <meta name="keywords" content="Educational Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--// Meta tag Keywords -->
        <!-- css files -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
        <!-- //css files -->
        <!-- online-fonts -->
        <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&subset=latin-ext" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Covered+By+Your+Grace" rel="stylesheet">
        <!-- //online-fonts -->
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/accionesLogin.js"></script>
        <script type="text/javascript" src="js/sweetalert.min.js"></script>
    </head>
    <body>
        <div class="main-w3layouts" id="home">
            <!--top-bar-->
            <div class="top-search-bar">
                <div class="header-top-nav">
                    <ul>
                        <li><a href="#" data-toggle="modal" id="botonLogin"data-target="#myModal3"><i class="fa fa-key" aria-hidden="true"></i>Login</a></li>
                        <li><a href="#" data-toggle="modal" id="botonRegistrarse" data-target="#myModal4"><i class="fa fa-lock" aria-hidden="true"></i>Registrarse</a></li>
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
                                    <input type="submit" value="Registrarse Ahora" name="registrarsePagina" class="btn" id="registrarsePagina" onclick="eventoRegistrar()"/>
                                    <script>
                                        function eventoRegistrar() {
                                            swal("Registro Exitoso!", "Se ha registrado satisfactoriamente en nuestra plataforma", "success");
                                        }
                                    </script>
                                </form>
                            </div>
                            <!--//newsletter-->			
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- //Modal4-->

            <!-- Modal 50 -->
            <div class="modal fade" id="myModal50" tabindex="-1" role="dialog" >
                <div class="modal-dialog" role="document">
                    <!-- Modal content-->
                    <div class="modal-content news-w3l">
                        <div class="modal-header">
                            <button type="button" class="close w3l" data-dismiss="modal">&times;</button>
                            <h4>Agregar Comentario</h4>
                            <!--newsletter-->
                            <div class="login-main wthree">
                                <form method="post" action="Control.php" enctype="multipart/form-data">
                                    <input type="text" placeholder="Nombre Usuario" name="Nombre" id="Nombre" required="">
                                    <textarea name="comentarios" id="comentarios" placeholder="Escriba aqui sus comentarios" required=""> </textarea>
                                    <input type="submit" value="Enviar" name="enviarComentario" class="btn" id="enviarComentario">
                                </form>
                            </div>
                            <!--//newsletter-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- //Modal 50-->

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
                            <li><a href="SolicitarCotizacion.php">Solicitar Cotizaci&oacuten</a></li>
                            <!-- <li><a href="#team" class="hvr-underline-from-center scroll">Our Team</a></li>
                             <li><a href="#events" class="hvr-underline-from-center scroll">Events</a></li>
                            -->
                            <li><a href="#contact" class="hvr-underline-from-center scroll">Contacto</a></li> 
                        </ul>
                    </div>
                    <div class="clearfix"> </div>	
                </nav>
            </div>
            <!-- //navigation -->

            <div class="header">

            </div>
        </div>
        <!--main-content-->

        <div class="team" id="team">
            <div class="container">
                <h3 class="title">Destinos Mas <span>Populares</span></h3>
                <div class="team_gds">
                    <div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <div class="team_pos">
                            <div class="team_back"></div>
                            <img class="img-responsive" src="images/g2.jpg"  alt=" ">
                        </div>
                        <h4>Nueva York</h4>
                    </div>

                    <div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <div class="team_pos">
                            <div class="team_back"></div>
                            <img class="img-responsive" src="images/g7.jpg"  alt=" ">
                        </div>
                        <h4>Paris</h4>
                    </div>
                    <div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <div class="team_pos">
                            <div class="team_back"></div>
                            <img class="img-responsive" src="images/g5.jpg"  alt=" ">
                        </div>
                        <h4>Estambul</h4>
                    </div>
                    <div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <div class="team_pos">
                            <div class="team_back"></div>
                            <img class="img-responsive" src="images/g8.jpg"  alt=" ">
                        </div>
                        <h4>Miami</h4>
                    </div>
                    <div class="clearfix"></div>		
                </div>
            </div>
        </div>

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