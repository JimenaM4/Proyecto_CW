<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <link rel="icon" href="../../Statics/media/Escudo.png" type="image/png">
    <link rel="stylesheet" href="../../Statics/styles/ventas.css"/>
    <script src="../JS/ventas.js"></script>
</head>
<body>
<header>
    <img id="escudo" src="../../Statics/media/Escudo.png" usemap="escudo" alt="escudo">
    <a id="prepa6" href="https://www.prepa6.unam.mx/ENP6/_P6/">ENP6</a>
    <input type="text" placeholder="Buscar en ENP6" id="buscar">
    <button id="search">Buscar</button>
    <img id="lupa" src="../../Statics/media/icono_lupa.png">
    <p>
        <ul id="explora">Explorar
            <li id="i"><a href="">Comunidad</a></li>
            <li><a href="./Busquedas_principal.php">Objetos perdidos</a></li>
            <li><a href="">Juegos</a></li>
            <li><a href="./menu.php">Menú principal</a></li>
        </ul>
    <p>
    <p id="linea">|</p>
    <a id="regis" href="../../Templates/registro.html">Regístrate</a>
    <a id="inse" href="../../Templates/inicio_sesion.html">Inicia sesión</a>
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
                <input type="text" name="des" id="des" max="28" required/> </label><br>
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
                <input type="number" name="tel" id="tel" required/></label><br>
            <label>
            <button type="submit" id="continuar" value = "1" class="boton">Continuar</button>
        </div>
    </form>
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

    if(isset($_FILES['arch']))
    {
        $arch = $_FILES['arch'];
        $name = $arch['name'];
        $ruta_temporal = $arch['tmp_name'];
        $ext = pathinfo($name, PATHINFO_EXTENSION);
        $ruta_final = "../../Statics/img_vp/$vendedor-$nomprod.$ext";
        rename($ruta_temporal, $ruta_final);
    }

        //Despliegue de imagen
    if(file_exists("../../Statics/img_vp"))
    {
        $dir = opendir("../../Statics/img_vp");
        $hay_archivo = true;
        if($hay_archivo)
        {
        echo '<img id="imgsub" src="'.$ruta_final.'" height="100px">';
        }
    }

    echo '<div id="vp">
        <p><strong>Vista previa</strong></p><br>
        <p>Vendedor:'.$vendedor.'</p><br>
        <p>Producto:'.$nomprod.'</p><br>
        <p>Descripción:'.$descripcion.'</p><br>
        <p>Precio: $'.$precio.'</p><br>
        <p>Lugar:'.$lugar.'</p><br>
        <p>De: '.$hora1.' a: '.$hora2.'</p><br>
        <p>Celular:'.$tel.'</p><br>
    </div>';

?>  
</body>
</html>