<?php
require "config.php";
$input=(isset($_POST['input']) && $_POST["input"] != "")? $_POST['input'] : false;

    session_start();
    $IDu= $_SESSION["ID"];
    $Usu=$_SESSION["Usuario"];
    $conexion = connect ();
    if(!$conexion)
    {
        echo "No se puedo conectar la base";
    }else{
         if($input)
        {
            $sql =  "INSERT INTO mensajesj VALUES (NULL, $IDu, 1, '$input', 0, '$Usu')";
            $res = mysqli_query($conexion, $sql);
            if(!$res)
            {
                $respuesta = array("ok"=>false, "mensaje" => "No se pudo mandar el mensaje");
            } else{
                $respuesta = array("ok"=>true, "mensaje" => "Se envio el mensaje");
            }
           
        }
        echo json_encode($respuesta);
    }
?>