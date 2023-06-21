<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <link rel="icon" href="../../Statics/media/Escudo.png" type="image/png">
    <link rel="stylesheet" href="../../Statics/styles/ventas.css"/>
    <link rel="stylesheet" href="../../bootstrap/libs/bootstrap-5.3.0-dist/css/bootstrap.css">
    <script src="../../bootstrap/libs/bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
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
                            <li><a class="dropdown-item text-dark" href="foro.php">Comunidad</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-dark" href="Busquedas_principal.php">Objetos perdidos</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-dark" href="juego.php">Juegos</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-dark" href="menu.php">Menú principal</a></li>
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
<h1 id="tit">Vende o promociona tus productos</h1>
<div id="recuadro">
    <form action="./ventas.php" method="post" enctype="multipart/form-data" target="_self">
        <div id="datos" align="center">
            <label> Vendedor:<br>
                <input type="text" name="vendedor" id="nombreV" placeholder="Usuario" required/> </label><br>
            <label> Nombre del producto:<br>
                <input type="text" name="nomprod" id="producto" required/> </label><br>
            <label> Descripción: <br>
                <input type="text" name="des" id="des" required/> </label><br>
            <label> Precio:
                $ <input class="pre" type="number" min="0" id="precio" name="precio" required/> </label><br>
            <label>Lugar de entrega:
            <select id="lugar" name="lugar" required>
                <option value="Entrada">Entrada</option>
                <option value="Ventanillas">Ventanillas</option>
                <option value="Patio 4">Patio 4</option>
                <option value="Patio 5">Patio 5</option>
                <option value="Patio 6">Patio 6</option>
                <option value="LUM">LUM</option>
                <option value="LACE C">LACE C </option>
                <option value="LAF">LAF</option>
                <option value="LUF o LUB">LUF/LUB</option>
                <option value="Biblioteca">Biblioteca</option>
                <option value="Salones H">Salones H</option>
                <option value="LAQ">LAQ</option>
                <option value="LAB">LAB </option>
                <option value="Cubiculos">Cubículos</option>
                <option value="Mediateca">Mediateca</option>
                <option value="Salones A">Salones A</option>
                <option value="Pimponeras">Pimponeras</option>
                <option value="Gimnasio o Canchas">Gimnasio/Canchas</option>
            </select>
            </label><br>
            <label>Horario:<br>
                <input type="time"  class="pre"  id="hora1"  name="hora1" required> a 
                <input type="time"  class="pre"  id="hora2" name="hora2" required></label><br>
            <label>Sube alguna imagen:<br>
                <input type="file" accept="image/*"  id="img" name="arch"></label><br>
            <label> Número de contacto:<br>
                <input type="number" name="tel" id="tel" required/> </label><br>
            <label>
            <button type="submit" id="continuar" value = "1" class="boton">Continuar</button>
        </div>
    </form>
    <script src="../JS/ventas.js"></script>
</div>
<?php
    $vendedor = (isset($_POST['vendedor']) && $_POST['vendedor'] != "")? $_POST['vendedor'] : false;
    $nomprod=(isset($_POST['nomprod']) && $_POST["nomprod"] != "")? $_POST['nomprod'] : false;
    $descripcion=(isset($_POST['des']) && $_POST["des"] != "")? $_POST['des'] : false;
    $precio=(isset($_POST['precio']) && $_POST["precio"] != "")? $_POST['precio'] : false;
    $lugar=(isset($_POST['lugar']) && $_POST["lugar"] != "")? $_POST['lugar'] : false;
    $hora1=(isset($_POST['hora1']) && $_POST["hora1"] != "")? $_POST['hora1'] : false;
    $hora2=(isset($_POST['hora2']) && $_POST["hora2"] != "")? $_POST['hora2'] : false;
    $tel=(isset($_POST['tel']) && $_POST["tel"] != "")? $_POST['tel'] : false;

    /*
    if(isset($_FILE['arch']))
    {
        $arch = $_FILE['arch'];
        $name = $arch['name'];
        $ruta_temporal = $arch['tmp_name'];
        $ext = pathinfo($name, PATHINFO_EXTENSION);
        $ruta_final = "./img/$nombre.$ext";
        rename($ruta_temporal, $ruta_final);
    }*/
?>
</body>
</html>
