<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../Statics/media/Escudo.png" type="image/png">
    <title>consultaDatos</title>
    <link rel="stylesheet" href="../../Statics/styles/consultaDatos.css"/>
</head>
<header>
    <img id="escudo" src="../../Statics/media/Escudo.png" usemap="escudo" alt="escudo">
    <a id="prepa6" href="https://www.prepa6.unam.mx/ENP6/_P6/">ENP6</a>
    <input type="text" placeholder="Buscar" id="buscar">
    <img id="lupa" src="../../Statics/media/icono_lupa.png">
    <p>
        <ul id="explora">Explorar
            <li id="i"><a>Comunidad</a></li>
            <li><a>Ventas</a></li>
            <li><a>Busquedas</a></li>
            <li><a>Objetos perdidos</a></li>
            <li><a>Juegos</a></li>
        </ul>
    <p>
    <p id="ayuda">Ayuda</p>
    <p id="linea">|</p>
    <p id="amigos">Amigos</p>
    <p id="config"><strong>Configuración</strong></p>
    <img id="perfil" src="../../Statics/media/perfil.png">
</header>
<body>
    <aside>
        <img id="perfi" src="../../Statics/media/perfi.png"> 
        <p><dd>Perfil</dd></p>
        <img id="seg" src="../../Statics/media/seg.png">
        <p><a href="consultaDatos.php"><strong><dd>Contraseña y seguridad</dd></strong></a></p>
        <img id="per" src="../../Statics/media/config.png">
        <p><dd>Personalizar</dd></p>
        <img id="priv" src="../../Statics/media/priv.png">
        <p><dd>Privacidad</dd></p>
        <img id="cerrar" src="../../Statics/media/cerrar.png">
        <p><dd>Cerrar sesión</dd></p>
    </aside>
    <p id="cd"><strong>Consulta tus datos:</strong></p>
    <div id="consultad">
        <p>Contraseña:</p>
        <a id="contraseña"></a>
        <p>Correo:</p>
        <a id="correo"></a>
        <p>Teléfono:</p>
        <a id="telefono"></a>
        <button id="consulta">Consulta</button>
    </div>
    <p id="ad"><strong>Actualiza tus datos:</strong></p>
    <div id="actualizad">
        <p>Cambiar contraseña</p>
        <p class="cambio">Cambiar correo</p>
        <p class="cambio">Cambiar teléfono</p>
    </div>
</body>
</html>