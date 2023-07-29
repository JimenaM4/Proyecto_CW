<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../libs/bootstrap-5.3.0-dist/css/bootstrap.css">
    <script src="../../libs/bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="../../Statics/styles/perdidos_general.css">
    <link rel='icon' href='../../Statics/media/Escudo.png' type='image/png'>
    <script src="../JS/perdidos_general.js"></script>
    <title>Objetos Perdidos</title>
</head>
<body>
<!-- Barra de navegacion -->
<header class=barra>
        <nav class="navbar navbar-expand-lg" id="nav">
            <div class="container-fluid">
                <img src="../../Statics/media/Escudo.png" alt="ENP6" width="30" height="24" class="d-inline-block align-text-top text-light" id="escudo">
                <a class="navbar-brand text-light" href="https://www.prepa6.unam.mx/ENP6/_P6/">ENP6</a><br>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar en ENP6" aria-label="Search" id="search">
                        <button class="btn btn-outline-success text-light" id="btnBusc" type="submit">Buscar</button>
                </form>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" class="ayuda" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Explorar
                            </a>
                            <ul class="dropdown-menu" id="nav">
                            <li><a class="dropdown-item text-dark" href="./foro_general.php">Comunidad</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-dark" href="../../Templates/objetos_perdidos.html">Objetos perdidos</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-dark" href="../../Templates/juego.html">Juegos</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-dark" href="./menu.php">Menú principal</a></li>
                            </ul>       
                        </li>
                        <li class="nav-item"> 
                        <a class="nav-link active text-light" aria-current="page" href="../../index.html">inicia sesión</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-light" href="../../Templates/registro.html">registrate</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header> 
    
    <main>
    
    
    <div id="contpubli">

    </div>

    <div id="btn_nuevoForo"></div>

    <div id="mapa">
        <img src="../../Statics/media/minimap.png" usemap="#image-map">
            <map name="image-map">
                <area target="_self" alt="MapaPN6" title="MapaPN6" href="./Mapa_perdidos.php" coords="1,1,299,204" shape="rect">
            </map>
    </div>  

    </main>
</body>
</html>