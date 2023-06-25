<?php 
    require "config.php";
    $conexion = connect ();
    if(!$conexion)
    {
        echo "No se puedo conectar la base";
    }else{
        $sql =  "SELECT Titulo, Tema, Descripcion, Preguntas, Img FROM foro";
        $res = mysqli_query($conexion, $sql);
        $respuesta = [];
        while( $datos = mysqli_fetch_array($res)){
            $respuesta[] = $datos;
        }
        echo json_encode($respuesta);
    }

?>