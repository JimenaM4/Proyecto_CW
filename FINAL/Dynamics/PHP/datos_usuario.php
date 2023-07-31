<?php 
    require "./config.php";
    $conexion = connect ();
    if(!$conexion)
    {
        echo "No se puedo conectar la base";
    }else{
        SESSION_START();
        $IDu= $_SESSION["ID"];
        $sql =  "SELECT * FROM usuario WHERE ID_USUARIO = $IDu";
        $res = mysqli_query($conexion, $sql);
        $respuesta = [];
        while( $datos = mysqli_fetch_array($res)){
            $respuesta[] = $datos;
        }
        echo json_encode($respuesta);
    }
?>