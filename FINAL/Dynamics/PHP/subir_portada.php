<?php
    require "config.php";
    $conexion = connect ();
    if(!$conexion)
    {
        echo "No se puedo conectar la base";
    }else{
        if (isset($_FILES["imagen"]))
        { 
            $arch = $_FILES["imagen"];//recive archivo
            $name= $arch["name"];//obtiene el nombre del archivo : imagen.jpg
            $ruta_temporal = $arch["tmp_name"]; //$arch es un arreglo que tiene la ruta temporal de la imagen
            $ext = pathinfo($name, PATHINFO_EXTENSION); //saca la extencion del nombre : .jpg
            if (!file_exists("../../Statics/Media/img_perfiles"))//si la carpeta no existe, la crea
            {
                if (mkdir("../../Statics/Media/img_perfiles"));
            }
            $nombre = uniqid();
            $ruta_final = "../../Statics/Media/img_perfiles/$nombre.$ext";//ruta en la que se va a guardar
            rename($ruta_temporal, $ruta_final);//cambia la ruta temporal por la ruta final
        }
        SESSION_START();
        $IDu= $_SESSION["ID"];
        $sql =  "UPDATE usuario SET f_portada = '$ruta_final' WHERE ID_usuario = $IDu";
        $res = mysqli_query($conexion, $sql);
        if(!$res)
        {
            $respuesta = array("ok"=>false, "mensaje" => "No se subió la imagen");
        } else{
            $respuesta = array("ok"=>true, "mensaje" => "La imagen ha sido subida");
        }
        echo json_encode($respuesta);
    }
?>