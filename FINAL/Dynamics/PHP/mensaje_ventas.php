<?php 
    require "./config.php";
    $conexion = connect ();
    if(!$conexion)
    {
        echo "No se puedo conectar la base";
    }else{
        SESSION_START();
        $IDu= $_SESSION["ID"];
        $id_publi=(isset($_POST['id_publi']) && $_POST["id_publi"] != "")? $_POST['id_publi'] : false;
        $Comentario=(isset($_POST['Comentario']) && $_POST["Comentario"] != "")? $_POST['Comentario'] : false;

        //obtener hora y fecha
        date_default_timezone_set('America/Mexico_City');
        $fechaActual = date("d-m-Y");
        $horaActual = date("h:i:s");
        $FechaHora = $fechaActual." ".$horaActual;

        //query
        $sql =  "INSERT INTO mensajes_ventas (ID_mensajeV, ID_usuario, ID_venta, contenido, FechaHora) VALUES (NULL, $IDu, $id_publi, '$Comentario', '$FechaHora')";
        $res = mysqli_query($conexion, $sql);
        $respuesta = [];
        if(!$res)
        {
            $respuesta = array("ok"=>false, "mensaje" => "No se pudo añadir el comentario");
        } else{
            $respuesta = array("ok"=>true, "mensaje" => "Se añadió a cometarios");
        }
        echo json_encode($respuesta);
    }
?>