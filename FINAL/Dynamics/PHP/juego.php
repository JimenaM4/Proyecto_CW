<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Statics/styles/juego.css">
    <link rel="stylesheet" href="../../libs/bootstrap-5.3.0-dist/css/bootstrap.css">
    <script src="../../libs/bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
    <title>Document</title>
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
                                <li><a class="dropdown-item text-light" href="foro.php">Comunidad</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-light" href="ventas.php">Ventas</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-light" href="Busquedas_principal.php">Objetos perdidos</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-light" href="./juego.php">Juegos</a></li>
				<li><hr class="dropdown-divider"></li>
				<li><a class="dropdown-item text-light" href="../../Templates/Term_y_Cond.html">Terminos y condiciones</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-light" href="mi_cuenta.php">Configuración</a></li>
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


    <div class="contmax">

        <div id="navj">

            <div id="fusu">
                <img id="imgusu" src="../../Statics/media/chatsjuegos/perfil.png" alt="fusu">
                <div id="nusu">Usuario</div>
            </div>

            <div id="pc"class="cont">
                <div id="fpc">
                    <img id="appc" src="../../Statics/media/chatsjuegos/pcl.png" alt="pc">
                    <img id="letpc" src="../../Statics/media/chatsjuegos/letpc.png" alt="letras">
                </div>
            </div>

        </div>

        <div id="contenidopc">

            <div id="contpc">

                <div id="prespc">
                    <div id="impc"></div>
                    <div id="txtpc">¡Busca y juega con compañeros de  tu prepa que usen PC!</div>
                </div>

                <div id="forog">
                <div id="datos"></div>

            </div>
        </div>


    </div>
</body>
</html>