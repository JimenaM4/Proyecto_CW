<?php
require "config.php";
    $conexion = connect ();
    if(!$conexion)
    {
        echo "No se puedo conectar la base";
    }else{
        $sql =  "SELECT * FROM juegos WHERE Nombre_juego = 'League of Legends(LOL)'";
        $res = mysqli_query($conexion, $sql);
        $respuesta = [];
        while( $datos = mysqli_fetch_assoc($res)){
            $respuesta[] = $datos;
        }
        echo json_encode($respuesta);
    }
?>