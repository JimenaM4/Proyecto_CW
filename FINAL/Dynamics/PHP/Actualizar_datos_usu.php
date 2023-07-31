<?php 
    require "./config.php";
    require "./seguridad_hasheo.php";
    $conexion = connect ();
    if(!$conexion)
    {
        echo "No se puedo conectar la base";
    }else{
        SESSION_START();
        $IDu= $_SESSION["ID"];
        $contra = (isset($_POST["contrasena"]) && $_POST["contrasena"] != "")? $_POST["contrasena"] : false;
        $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] != "")? $_POST["nombre"] : false;
        $telefono = (isset($_POST["telefono"]) && $_POST["telefono"] != "")? $_POST["telefono"] : false;
        $num_cuenta = (isset($_POST["num_cuenta"]) && $_POST["num_cuenta"] != "")? $_POST["num_cuenta"] : false;
        $usuario = (isset($_POST["usuario"]) && $_POST["usuario"] != "")? $_POST["usuario"] : false;
        $grupo = (isset($_POST["grupo"]) && $_POST["grupo"] != "")? $_POST["grupo"] : false;
        $sal = generarSal(); 
        $pimienta = generarPimienta();
        $contraHash = hashearContra($contra.$pimienta.$sal);
        $sql =  "UPDATE usuario SET usuario = '$usuario', Hashe = '$contraHash', Sal = '$sal', Nombre = '$nombre',num_telefono = '$telefono', num_cuenta = '$num_cuenta', grupo = $grupo WHERE ID_usuario = $IDu";
        $res = mysqli_query($conexion, $sql);
        if(!$res)
        {
            $respuesta = array("ok"=>false, "mensaje" => "No se actualizaron los datos");
        } else{
            $respuesta = array("ok"=>true, "mensaje" => "Los datos han sido actualizados");
        }
        echo json_encode($respuesta);
    }
?>