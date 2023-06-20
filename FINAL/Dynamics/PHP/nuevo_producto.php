<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <link rel="icon" href="../../Statics/media/Escudo.png" type="image/png">
    <link rel="stylesheet" href="../../Statics/styles/nuevo_producto.css"/>
</head>
<body>
<header>
    <img id="escudo" src="../../Statics/media/Escudo.png" usemap="escudo" alt="escudo">
    <a id="prepa6" href="https://www.prepa6.unam.mx/ENP6/_P6/">ENP6</a>
    <input type="text" placeholder="Buscar" id="buscar">
    <img id="lupa" src="../../Statics/media/icono_lupa.png">
    <p>
        <ul id="explora">Explorar
            <li id="i">Comunidad</li>
            <li>Ventas</li>
            <li>Busquedas</li>
            <li>Objetos perdidos</li>
            <li>Juegos</li>
        </ul>
    <p>
    <p id="ayuda">Ayuda</p>
    <p id="linea">|</p>
    <a id="regis" href="registro.php">Regístrate</a>
    <a id="inse" href="inicio_sesion.php">Inicia sesión</a>
    <img id="perfil" src="../../Statics/media/perfil.png">
</header>
<h1 id="tit">Vende o promociona tus productos</h1>
<div id="recuadro">
    <form action="./nuevo_producto.php" method="post" enctype="multipart/form-data" target="_self">
        <div id="datos">
        <label> Vendedor: 
            <input type="text" name="vendedor" required/> </label><br>
        <label> Nombre del producto:
            <input type="text" name="nomprod" required/> </label><br>
        <label> Descripción: <br>
            <textarea name="des" cols="60" rows="3" minlength="5" maxlength="100" required placeholder="Escribe aquí"></textarea></label><br>
        <label> Precio:
            $ <input id="pre" type="number" min="0" required/> </label><br>
        <label required>Lugar de entrega:<br>
            <input type="checkbox"/>Entrada
            <input type="checkbox"/>Ventanillas
            <input type="checkbox"/> Patio 4
            <input type="checkbox"/> Patio 5
            <input type="checkbox"/> Patio 6
            <input type="checkbox"/>LUM
            <input type="checkbox"/>LACE C 
            <input type="checkbox"/>LAF
            <input type="checkbox"/>LUF/LUB
            <input type="checkbox"/>Biblioteca
            <input type="checkbox"/> Salones H
            <input type="checkbox"/> LAQ
            <input type="checkbox"/> LAB 
            <input type="checkbox"/> Cubículos
            <input type="checkbox"/> Mediateca
            <input type="checkbox"/> Salones A <br>
            <input type="checkbox"/> Pimponeras
            <input type="checkbox"/> Gimnasio/Canchas
        </label><br>
        <label>Horario:
            <input type="time" required> a 
            <input type="time" required></label><br><br>
        <label>Sube alguna imagen:
            <input type="file" accept="image/*"></label><br>
        <button type="reset">Borrar</button>
        <button id="submit" type="submit" name="arch">Continuar</button>
        </div>
    </form>
    <script src="../JS/nuevo_producto.js"></script>
</div>
<?php
    $vendedor = (isset($_POST['vendedor']) && $_POST['vendedor'] != "")? $_POST['vendedor'] : false;
    $nomprod=(isset($_POST['nomprod']) && $_POST["nomprod"] != "")? $_POST['nomprod'] : false;
    $des
   /* if(isset($_FILE['arch']))
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