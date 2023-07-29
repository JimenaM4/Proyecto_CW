<?php 
    $_GET["id"];
    require "./config.php";
    $conexion = connect ();
    if(!$conexion)
    {
        echo "No se puedo conectar la base";
    }else{
        $sql =  "SELECT * FROM publicar_perdido WHERE ID_perdido = $_GET[id]";
        $res = mysqli_query($conexion, $sql);
        $respuesta = [];
        while( $datos = mysqli_fetch_array($res)){
            $respuesta[] = $datos;
        }

        // echo $respuesta[0][1]."<br>";//ID_perdido
        // echo $respuesta[0][2]."<br>";//titulo
        // echo $respuesta[0][3]."<br>";//descripcion
        // echo $respuesta[0][4]."<br>";//lugar
        // echo $respuesta[0][5]."<br>";//recompensa
        // echo $respuesta[0][6]."<br>";//imagen
        echo "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <link rel='stylesheet' href='../../libs/bootstrap-5.3.0-dist/css/bootstrap.css'>
                <script src='../../libs/bootstrap-5.3.0-dist/js/bootstrap.bundle.js'></script>
                <link rel='stylesheet' href='../../Statics/styles/foro_general.css'>
                <link rel='icon' href='../../Statics/media/Escudo.png' type='image/png'>
                <script src='../JS/publi_perdidos.js'></script>
                <title>{$respuesta[0][2]}</title>
            </head>";
        echo '<body>
            <!-- Barra de navegación -->
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
                                        <li><a class="dropdown-item text-dark" href="./perdidos_general.php">Objetos perdidos</a></li>
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
            <!--------------------------------------------------------------------------------------------->
            <!-- Publicación-->';
            echo "
            <main id='publicacion' class='rounded mx-auto d-block'>
                    <div id='publi' align='center'>
                        <h1>{$respuesta[0][2]}</h1>
                        <h2>{$respuesta[0][3]}</h2>
                        <h2>Lugar en que se perdió: {$respuesta[0][4]}</h2>
                        <h2>Recompensa: {$respuesta[0][5]}</h2> 
                        <img id='img' src='{$respuesta[0][6]}' alt='Producto' style='max-width: 300px; height: auto;'><br><br>
                        <button type='button' class='btn btn-primary' id='btn_mensj'>Crea un comentario</button> 
                        <button type='button' class='btn btn-primary' id='btn_coment'>Comentarios</button>
                    </div>
                    <div id='imagen' style='dysplay:none;'>

                    </div>
            </main>";

            echo "
            <div id='comentarios' style='display:none'>
                <h1 align='center' class='tit'>Comentario</h1>
                <form id='formulario_coment'>
                    <input value='$_GET[id]' id='id_publi' name='id_publi' style='display:none;'>
                    <div class='form-floating mb-2'>
                        <input type='text' class='form-control' id='Comentario' name='Comentario'
                            placeholder='Escribe aquí lo que deseas decirle al vendedor'  autocomplete='off' required>
                        <label for='Comentario' class='form-label'>Comentario</label>
                    </div> 
                    <div class='d-grid gap-2'>
                        <button class='btn btn-success' type='submit' id='btn_enviar' name='btn_enviar'>Enviar</button>
                    </div>
                </form>
            </div>";
            echo "
                <h2 id='num_comen' style='display:none'></h2>
                <div id='cont_comen' style='display:none'>
                </div>";
        echo "
        </body>
        </html>";
    }
?>
