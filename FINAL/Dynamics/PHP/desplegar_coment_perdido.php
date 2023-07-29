<?php 
    require "./config.php";
    $conexion = connect ();
    if(!$conexion)
    {
        echo "No se puedo conectar la base";
    }else{
        $id_publi=(isset($_POST['id_publi']) && $_POST["id_publi"] != "")? $_POST['id_publi'] : false;
        $sql =  "SELECT * FROM mensajes_perdidos NATURAL JOIN usuario WHERE ID_perdido = $id_publi";
        $res = mysqli_query($conexion, $sql);
        $respuesta = [];
        while( $datos = mysqli_fetch_array($res)){
            $respuesta[] = $datos;
        }
        echo json_encode($respuesta);
    }
?>