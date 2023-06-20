<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../Statics/media/Escudo.png" type="image/png">
    <link rel="stylesheet" href="../../Statics/styles/busqueda_principal.css">
    <link rel="stylesheet" href="../../libs/bootstrap-5.3.0-dist/css/bootstrap.css">
    <script src="../../libs/bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
    <script src="../JS/busquedas_principal.js"></script>
    <title>Busquedas</title>
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
                            <li><a class="dropdown-item text-dark" href="#">Comunidad</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-dark" href="ventas.php">Ventas</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-dark" href="#">Juegos</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-dark" href="menu.php">Menú principal</a></li>
                            </ul>       
                        </li>
                        <li class="nav-item"> 
                        <a class="nav-link active text-light" aria-current="page" href="./inicio_sesion.php">inicia sesión</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-light" href="./registro.php">registrate</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header> 
    <!-- Comentarios -->
    <div id="comentario1">
        <h2><strong>¿Perdiste algo?<br>Apoyate en los demás.</strong></h2>
    </div>
    <img src="../../Statics/media/icono_lupa.png" alt="lupa" width="50" height="47"  id="lupa">
    <div id="comentario2">
        <h6><strong>Aquí puedes crear una publicación que te permitirá buscar lo que hayas perdido. Recuerda ser respetuoso y no publicar contenido inapropiado. ¡Esperamos que pronto encuentres lo que buscas!</strong></h6>
    </div>
    <!-- Formulario busquedas -->
    <div id="forms">
    <form class= forms action="./Busquedas_principal.php" method="post" target="_self">
        <div class=datos align="center"> 
                <br>
                <label for="titulo">
                    Título de tu busqueda.<br>
                    <input type="text" name="titulo" id="titulo" required>
                </label>
                <br><br>
                <label for="descripcion">
                    Da una descripción detallada.<br>
                    <input type="text" id="descripcion" name="descripcion" required>
                </label> 
                 <br><br>
                <label for="lugar">
                    ¿En dónde lo perdiste?<br>
                    <input type="text" id="lugar" name="lugar" required>
                </label>
                <br><br>
                <label for="recompensa">
                    Recompensa (opcional)<br>
                    <input type="text" id="recompensa" name="recompensa">
                </label>
                <br><br>
                <label for="imagen">
                Sube una imagen (opcional)<br>
                    <input type="file" id="imagen" accept="image/*" name="imagen"/>
                </label>
                <br><br>
                 <center><button class="boton" type="submit" id="Continuar">Continuar</button></center>
            </div> 
        </form>
    </div>
    <div></div>
</body>
</html>
<?php
    //comprobacion de valores
    $titulo=(isset($_POST['titulo']) && $_POST["titulo"] != "")? $_POST['titulo'] : false;
    $descripcion=(isset($_POST['descripcion']) && $_POST["descripcion"] != "")? $_POST['descripcion'] : false;
    $lugar=(isset($_POST['lugar']) && $_POST["lugar"] != "")? $_POST['lugar'] : false;
    $recompensa=(isset($_POST['recompensa']) && $_POST["recompensa"] != "")? $_POST['recompensa'] : false;

    //Sanitizacion REGEX

    $title = "/^\D{3,25}$/i";
    $desc = "/^[\D\w]{5,100}$/i";
    $place = "/^[\D\w]{5,50}$/i";
    $recom = "/^[\D\w]{5,80}$/i";
    if(!$recompensa)
    {
        if(preg_match($title, $titulo)==1 && preg_match($desc, $descripcion)==1 && preg_match($place, $lugar)==1 && preg_match($recom, $recompensa)==1)
        {
            //header('LOCATION:./Busquedas_vista_previa.php');
            //echo "<script window.location.replace('./Busquedas_vista_previa.php')></script>";
            echo "<meta http-equiv='refresh' content='0; url=./Busquedas_vista_previa.php'>";
        }
    }else {
        if(preg_match($title, $titulo)==1 && preg_match($desc, $descripcion)==1 && preg_match($place, $lugar)==1)
        {
            //header('LOCATION:./Busquedas_vista_previa.php');
            //echo "<script window.location.replace('./Busquedas_vista_previa.php')></script>";
            echo "<meta http-equiv='refresh' content='0; url=./Busquedas_vista_previa.php'>";
        }
    }



    

    //sanitizacion HTML injection 
    //Esto se puede poner en el php que va a insertar los datos a la DB
    
    // $titulo = stripslashes($titulo);
    // $titulo = htmlspecialchars($titulo);
    // $descripcion = stripslashes($descripcion);
    // $descripcion = htmlspecialchars($descripcion);
    // $lugar = stripslashes($lugar);
    // $lugar = htmlspecialchars($lugar);
    // $recompensa = htmlspecialchars($recompensa);
    // $recompensa = stripslashes($recompensa);
   

    // if (isset($_FILES["imagen"]))
    // {
    //     $arch = $_FILES["imagen"];//recive archivo
    //     $name= $arch["name"];//obtiene el nombre del archivo : imagen.jpg
    //     $ruta_temporal = $arch["tmp_name"]; //$arch es un arreglo que tiene la ruta temporal de la imagen
    //     $ext = pathinfo($name, PATHINFO_EXTENSION); //saca la extencion del nombre : .jpg
    //     if (!file_exists("./img_busquedas"))//si la carpeta no existe, la crea
    //     {
    //         if (mkdir("./img_busquedas"));
    //     }
    //     $ruta_final = "./img_busquedas/$titulo.$ext";//ruta en la que se va a guardar
    //     rename($ruta_temporal, $ruta_final);//cambia la ruta temporal por la ruta final
    // }
?>
