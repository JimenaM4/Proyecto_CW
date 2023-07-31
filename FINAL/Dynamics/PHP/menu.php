<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../Statics/media/Escudo.png" type="image/png">
	<link rel="stylesheet" href="../../Statics/styles/menu.css">
    <link rel="stylesheet" href="../../libs/bootstrap-5.3.0-dist/css/bootstrap.css">
    <script src="../../libs/bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
    <title>Menu</title>
</head>
<body>
<!-- Barra de navegacion -->
<header class=barra>
        <nav class="navbar navbar-expand-lg" id="nav" data-bs-theme="dark">
            <div class="container-fluid">
                <img src="../../Statics/media/Escudo.png" alt="ENP6" width="30" height="24" class="d-inline-block align-text-top text-light" id="escudo">       
                <a class="navbar-brand text-light" href="https://www.prepa6.unam.mx/ENP6/_P6/">ENP6</a><br>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search">
                        <button class="btn btn-outline-success text-light" id="btnBusc" type="submit">Search</button>
                </form>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" class="ayuda" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Explorar
                            </a>
                            <ul class="dropdown-menu" id="nav">
                                <li><a class="dropdown-item text-light" href="./foro_general.php">Comunidad</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-light" href="./ventas_general.php">Ventas</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-light" href="../../Templates/objetos_perdidos.html">Objetos perdidos</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-light" href="../../Templates/juego.html">Juegos</a></li>
				                <li><hr class="dropdown-divider"></li>
				                <li><a class="dropdown-item text-light" href="../../Templates/Term_y_Cond.html">Terminos y condiciones</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-light" href="./mi_cuenta.php">Configuración</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-light" href="../../Templates/creditos.html">Créditos</a></li>
                            </ul>       
                        </li>
                        <li class="nav-item"> 
                        <a class="nav-link active text-light" aria-current="page" href="../../index.html">Inicia sesión</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-light" href="../../Templates/registro.html">Registrate</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header> 
    <!-- Bienvenida y carrusel -->
    <p class=recuadro>
        <h1 class=saludo><strong>¡Bienvenidos al sitio no oficial de la prepa!</strong></h1>
        <br>
        <p class=entrada>Este es un espacio creado por la comunidad para la comunidad, para convivir con el resto de tu comunidad estudiantil.</p>
        <div id="carrusel">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../../Statics/media/fondo_inicio_sesion.jpg" class="d-block w-100" alt="biblioteca">
                    </div>
                    <div class="carousel-item">
                    <img src="../../Statics/media/imagen_pimponeras.jpg" class="d-block w-100" alt="pimponeras">
                    </div>
                    <div class="carousel-item">
                    <img src="../../Statics/media/auditorio.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="../../Statics/media/imagen_totem.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </p>
    <!-- Menú -->
    <div id="Menu">
        <h2 class=pregunta><strong>¿Qué quieres hacer?<strong></h2>
        <a> 
            <img src="../../Statics/media/Juegos.jpeg" usemap="#juegos" class="juegos">
        </a>
        <map name="juegos">
            <area target="_self" alt="Juegos" title="Juegos" href="../../Templates/juego.html" coords="3,1,780,862" shape="rect">
        </map>
        <a>
            <img src="../../Statics/media/Busqueda.jpeg" usemap="#busqueda" class="busqueda">   
        </a>
        <map name="busqueda">
            <area target="_self" alt="busqueda" title="busqueda" href="./perdidos_general.php" coords="646,14,1,826" shape="rect">
        </map>
        <a> 
             <img src="../../Statics/media/Compra_y_venta.jpeg" usemap="#compyven" class="comyven">
        </a>
        <map name="compyven">
            <area target="_self" alt="Comyven" title="Comyven" href="./ventas_general.php" coords="636,0,23,857" shape="rect">
        </map>
        <a> 
            <img src="../../Statics/media/Comunidad.jpeg" usemap="#comunidad" class="comunidad">
        </a>
        <map name="comunidad">
            <area target="_self" alt="Comunidad" title="Comunidad" href="./foro_general.php" coords="754,864,1,0" shape="rect">
        </map>
    </div>
    <!-- Pie de página -->
    <footer>
        <img id="escudo2" src="../../Statics/media/Escudo.png">
        <a id="prepa" href="https://www.prepa6.unam.mx/ENP6/_P6/">ENP6</a>
        <p id="acerca">Acerca de nosotros</p>
        <p id="nota">Ayudanos a mantener el sitio actualizado:</p>
        <p id="sello">@2023 enp6</p>
    </footer>



</body>
</html>
