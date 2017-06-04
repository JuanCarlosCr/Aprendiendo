<!DOCTYPE html>
<?php
session_start();
?>

<html lang="en">
    <head>
        <title>Destinos - Aprenda en el exterior</title>
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
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/accionesLogin.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
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

        <!--Gallery -->
        <div class="portfolio" id="gallery">
            <h3>Destinos</h3>

            <div class="portfolio-top wow fadeInDown animated" data-wow-delay=".5s">
                <div class="col-md-4 grid slideanim">
                    <figure class="effect-jazz">
                        <a href="#portfolioModal1"  data-toggle="modal">
                            <img src="images/g1.jpg" alt="img25" class="img-responsive"/>
                            <figcaption>
                                <h4>Dubai</h4>
                                <p> Si quiere adentrarse en la historia beduina o admirar la opulencia de las ciudades modernas de los Emiratos ¡debe visitar este hermoso destino!</p>
                            </figcaption>
                        </a>						
                    </figure>
                </div>

                <div class="col-md-4 grid slideanim">
                    <figure class="effect-jazz">
                        <a href="#portfolioModal2"  data-toggle="modal">
                            <img src="images/g2.jpg" alt="img25" class="img-responsive"/>
                            <figcaption>
                                <h4>Nueva York</h4>
                                <p> Solo existe una ciudad en el mundo que puede autoproclamarse capital del mundo: Nueva York, con sus rascacielos logra ser un gran atractivo turistico.</p>							
                            </figcaption>	
                        </a>						
                    </figure>
                </div>

                <div class="col-md-4 grid slideanim">
                    <figure class="effect-jazz">
                        <a href="#portfolioModal3"  data-toggle="modal">
                            <img src="images/g3.jpg" alt="img25" class="img-responsive"/>
                            <figcaption>
                                <h4>Roma</h4>
                                <p> Luego de haber dominado al mundo durante siglos, Roma se convirti&oacute en una ciudad apasionante, en la que se debe vivir, visitar y degustar lentamente, de día y de noche. </p>							
                            </figcaption>
                        </a>						
                    </figure>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="portfolio-top wow fadeInUp animated" data-wow-delay=".5s">
                <div class="col-md-4 grid  slideanim">
                    <figure class="effect-jazz">
                        <a href="#portfolioModal4"  data-toggle="modal">
                            <img src="images/g4.jpg" alt="img25" class="img-responsive"/>
                            <figcaption>
                                <h4 class="effcet-text">Berlin</h4>
                                <p> Berl&iacuten escribe hoy su historia en calles de un agitado pasado. En la introducci&oacuten de un nuevo cap&iacutetulo, la ciudad muestra una bella lecci&oacuten de voluntad y un potencial que parece inagotable.</p>							
                            </figcaption>	
                        </a>						
                    </figure>
                </div>

                <div class="col-md-4 grid slideanim">
                    <figure class="effect-jazz">
                        <a href="#portfolioModal5"  data-toggle="modal">
                            <img src="images/g5.jpg" alt="img25" class="img-responsive"/>
                            <figcaption>
                                <h4 class="effcet-text">Estambul</h4>
                                <p> Ciudad de las mil caras, Estambul, conocida durante siglos como Constantinopla y durante otros como Bizancio, intriga por su diversidad y riqueza.</p>							
                            </figcaption>
                        </a>						
                    </figure>
                </div>

                <div class="col-md-4 grid  slideanim">
                    <figure class="effect-jazz">
                        <a href="#portfolioModal6"  data-toggle="modal">
                            <img src="images/g6.jpg" alt="img25" class="img-responsive"/>
                            <figcaption>
                                <h4 class="effcet-text">Mosc&uacute</h4>
                                <p> Mosc&uacute es la capital y la ciudad más grande de Rusia, es una gigante de la cultura y con cerca de 15 millones de habitantes, Mosc&uacute se transforma d&iacutea a d&iacutea.</p>							
                            </figcaption>
                        </a>						
                    </figure>
                </div>                        
                <div class="clearfix"></div>
            </div>

            <div class="portfolio-top wow fadeInDown animated" data-wow-delay=".5s">
                <div class="col-md-4 grid  slideanim">
                    <figure class="effect-jazz">
                        <a href="#portfolioModal7"  data-toggle="modal">       
                            <img src="images/g7.jpg" alt="img25" class="img-responsive"/>
                            <figcaption>
                                <h4 class="effcet-text">Paris</h4>
                                <p> Cada vistazo que se le da a Par&iacutes confirma que se est&aacute en una ciudad &iacutecono de la humanidad. Incluso si nunca ha estado aqu&iacute antes, sabr&aacute inmediatamente d&oacutende est&aacute.</p>							
                            </figcaption>
                        </a>						
                    </figure>
                </div>

                <div class="col-md-4 grid slideanim">
                    <figure class="effect-jazz">
                        <a href="#portfolioModal8"  data-toggle="modal">
                            <img src="images/g8.jpg" alt="img25" class="img-responsive"/>
                            <figcaption>
                                <h4 class="effcet-text">Miami</h4>
                                <p> La ciudad m&aacutes latina en Estados Unidos tiene una saludable mezcla de inmigrantes provenientes del Caribe, de Am&eacuterica y de Europa.</p>							
                            </figcaption>	
                        </a>						
                    </figure> 
                </div>

                <div class="col-md-4 grid slideanim">
                    <figure class="effect-jazz">
                        <a href="#portfolioModal9"  data-toggle="modal">
                            <img src="images/g9.jpg" alt="img25" class="img-responsive"/>
                            <figcaption>
                                <h4 class="effcet-text">San Antonio</h4>
                                <p> ¡Bienvenido a la tierra de Davy Crocket! Le espera una estad&iacutea de lo m&aacutes completa en el lugar en el que el emblem&aacutetico personaje pag&oacute con la vida para resistir contra la armada mexicana.</p>							
                            </figcaption>
                        </a>						
                    </figure>
                </div>               
                <div class="clearfix"></div>
            </div>

            <div class="portfolio-top wow fadeInDown animated" data-wow-delay=".5s">
                <div class="col-md-4 grid slideanim">
                    <figure class="effect-jazz">
                        <a href="#portfolioModal10"  data-toggle="modal">
                            <img src="images/g10.jpg" alt="img25" class="img-responsive"/>
                            <figcaption>
                                <h4 class="effcet-text">Londres</h4>
                                <p> La capital de Reino Unido es líder en los negocios y las artes a nivel mundial. Una urbe en donde las &uacuteltimas tendencias de la moda se codean con siglos de historia.</p>							
                            </figcaption>
                        </a>						
                    </figure>
                </div>

                <div class="col-md-4 grid slideanim">
                    <figure class="effect-jazz">
                        <a href="#portfolioModal11"  data-toggle="modal">
                            <img src="images/g11.jpg" alt="img25" class="img-responsive"/>
                            <figcaption>
                                <h4 class="effcet-text">Tokio</h4>
                                <p> Tokio tiene una visi&oacuten futurista del mundo posindustrial, con sus trenes veloces, sus autopistas y sus edificios inteligentes.</p>							
                            </figcaption>
                        </a>						
                    </figure>
                </div>

                <div class="col-md-4 grid slideanim">
                    <figure class="effect-jazz">
                        <a href="#portfolioModal12"  data-toggle="modal">
                            <img src="images/g12.jpg" alt="img25" class="img-responsive"/>
                            <figcaption>
                                <h4 class="effcet-text">Bogot&aacute</h4>
                                <p> A&uacuten no muy famosa a nivel tur&iacutestico, Bogot&aacute est&aacute lista para ser descubierta. Rica en contrastes y diversidad, ofrece espect&aacuteculos fascinantes para todo publico.</p>							
                            </figcaption>
                        </a>						
                    </figure>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="portfolio-modal modal fade slideanim" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h3>Dubai</h3>
                                <img src="images/g1.jpg" class="img-responsive" alt="">
                                <p>Unas instalaciones de primera categor&iacutea lo recibir&aacuten en el espectacular aeropuerto de Dub&aacutei. Prep&aacuterese, esta ciudad lo dejar&aacuten con la boca abierta, es casi un oasis muy lujoso en medio del desierto. En los Emiratos Árabes, las metrópolis son modernas y excesivamente consumistas. La abundancia est&aacute a la orden del d&iacutea en un pa&iacutes que posee la s&eacuteptima reserva de petr&oacuteleo m&aacutes grande del mundo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-modal modal fade slideanim" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h3>Nueva York</h3>
                                <img src="images/g2.jpg" class="img-responsive" alt="">
                                <p>Muchas urbes est&aacuten activas las 24 horas del d&iacutea y Nueva York es la maestra de todas ellas. "La ciudad que nunca duerme", "La Gran Manzana" o, como se la llamaba antiguamente "Nueva York, Nueva York…" ¡no interesa qué nombre se le d&eacute, es &uacutenica en el mundo! Caminando por Nueva York, contemplar&aacute muchos monumentos espectaculares.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-modal modal fade slideanim" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h3>Roma</h3>
                                <img src="images/g3.jpg" class="img-responsive" alt="">
                                <p>Roma etrusca, Roma imperial, Roma medieval, Roma barroca y, m&aacutes bella a&uacuten, la Roma contempor&aacutenea. 3.000 años de historia se mezclan con harmonía en la capital de Italia. Además de su patrimonio cultural y arquitectónico fuera de lo común, Roma tiene otras cualidades inigualables: una cocina exquisita, placitas románticas en los barrios, una vida nocturna efervescente y el gran n&uacutemero de eventos que animan sus bellas callecillas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-modal modal fade slideanim" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h3>Berlin</h3>
                                <img src="images/g4.jpg" class="img-responsive" alt="">
                                <p>Puntuada por el arte, rimada con las fiestas, la capital alemana le har&aacute leer un relato enfocado hacia el mejor de los futuros. La conmoci&oacuten hist&oacuterica del &uacuteltimo siglo es tan solo un recuerdo. Despu&eacutes de la ca&iacuteda del muro en 1.989, la capital alemana parece ir más r&aacutepido que el mismo tiempo. Berl&iacuten ha sabido construir su nueva cara y hacerse a una nueva identidad. De manera desenfrenada, cimienta día a d&iacutea su destino de megal&oacutepolis moderna.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-modal modal fade slideanim" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h3>Estambul</h3>
                                <img src="images/g5.jpg" class="img-responsive" alt="">
                                <p>Las mezquitas, sinagogas, palacios y castillos son testigos de la historia de la ciudad, que tiene más de 2.500 años de creación. El Palacio de Topkapi, el Cuerno de Oro, la Mezquita Azul, la Cisterna Bas&iacutelica y el hip&oacutedromo, las maravillas del pasado deleitan los ojos. En Estambul encontrar&aacute, adem&aacutes, bazares, baños turcos, barrios comerciales y una mezcla de restaurantes donde se combinan la gastronomía local y europea.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-modal modal fade slideanim" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h3>Mosc&uacute</h3>
                                <img src="images/g6.jpg" class="img-responsive" alt="">
                                <p>Durante su curso de ruso en Mosc&uacute no puede perderse por ning&uacuten motivo el Museo Pushkin, que posee m&aacutes de un mill&oacuten de obras de arte y por esta raz&oacuten es poseedor de una de las colecciones m&aacutes grandes del mundo. Si prefiere las actividades al aire libre, le alegrar&aacute mucho pasar un tiempo en esta ciudad llena de vegetaci&oacuten, con m&aacutes de 100 km2 de bosques, así como numerosos jardines y parques.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-modal modal fade slideanim" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h3>Par&iacutes</h3>
                                <img src="images/g7.jpg" class="img-responsive" alt="">
                                <p>Tome un sorbo de un caf&eacute cargado mientras camina entre los elegantes caf&eacutes al aire libre. París tiene muchos monumentos famosos que se deben conocer, una cocina &uacutenica y un modo de pensar particular. Par&iacutes rebosa de creatividad, estilo, juventud y exuberancia. Como una de las grandes ciudades internacionales, Par&iacutes siempre ha atra&iacutedo a los grandes artistas, pensadores y personalidades: desde Napole&oacuten hasta Jean-Luc Godard, desde Coco Chanel hasta Jim Morrison.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="portfolio-modal modal fade slideanim" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h3>Miami</h3>
                                <img src="images/g8.jpg" class="img-responsive" alt="">
                                <p>Esta regi&oacuten es m&aacutes que salvaje, compru&eacutebelo en el Parque Nacional de Everglades. Bucee en el agua cristalina de la Bah&iacutea Vizca&iacutena y el Atl&aacutentico. Puede intentar una variedad de deportes acuáticos a lo largo de Miami Beach. Practique windsurf y buceo en el agua c&aacutelida o m&oacutentese en una moto acu&aacutetica y si&eacutentase como una estrella de cine. Si quiere conocer a las celebridades, diríjase a South Beach, donde los famosos se divierten en un excelente ambiente de belleza.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-modal modal fade slideanim" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h3>San Antonio</h3>
                                <img src="images/g9.jpg" class="img-responsive" alt="">
                                <p>La rica historia de la ciudad est&aacute estrechamente ligada a las misiones españolas de los siglos XVII y XVIII. Los vestigios del imperio colonial español cuentan c&oacutemo se fund&oacute San Antonio y su evoluci&oacuten a lo largo de los siglos. En este universo, en el que se respira tranquilidad y bienestar, usted se sentir&aacute a gusto: una vegetaci&oacuten de ensueño y un clima c&aacutelido le permitir&aacuten aprovechar al m&aacuteximo su estad&iacutea lingüística en los Estados Unidos. </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="portfolio-modal modal fade slideanim" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h3>Londres</h3>
                                <img src="images/g10.jpg" class="img-responsive" alt="">
                                <p>Cuando quiera tener un momento de tranquilidad, visite uno de los tantos museos de fama mundial de la ciudad o disfrute la paz y la calma de los maravillosos parques en el centro de la ciudad. Aprendiendo ofrece cursos de ingl&eacutes en distintos barrios de Londres: Rod&eacuteese de naturaleza o viva en el coraz&oacuten de la megal&oacutepolis. Sin importar en qu&eacute &aacuterea urbana decida aprender ingl&eacutes, usted se enamorar&aacute profundamente de la ciudad.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-modal modal fade slideanim" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h3>Tokio</h3>
                                <img src="images/g11.jpg" class="img-responsive" alt="">
                                <p>Desde el Palacio Imperial hasta el barrio electrónico de Akihabara, pasando por las fiestas de Kabukicho y el mercado de pescado de Tsukiji, ¡explore las diferentes facetas de una de las metr&oacutepolis m&aacutes fascinantes del mundo! El aspecto m&aacutes impresionante de la capital del Jap&oacuten es su inmensa cantidad de energ&iacutea. La ciudad evoluciona sin cesar y sus metamorfosis son fulgurantes. En pocos años, esta megal&oacutepolis de m&aacutes de 12 millones de habitantes se convirti&oacute en un ejemplo de milagro econ&oacutemico.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="portfolio-modal modal fade slideanim" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h3>Bogot&aacute</h3>
                                <img src="images/g12.jpg" class="img-responsive" alt="">
                                <p>La capital de Colombia y del departamento de Cundinamarca tiene m&aacutes de ocho millones de habitantes. Situada en una de las m&aacutes bellas regiones del pa&iacutes, la ciudad les ofrece a sus visitantes un espect&aacuteculo grandioso con paisaje y biodiversidad, así como un clima muy agradable y habitantes c&aacutelidos. Su curso de español en Bogot&aacute se desarrollar&aacute en el coraz&oacuten de un magn&iacutefico altiplano, la Sabana, rico en cultivos diversos y rodeado de espl&eacutendidas montañas de la cordillera, como Monserrate y Guadalupe. </p>
                            </div>
                        </div>
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