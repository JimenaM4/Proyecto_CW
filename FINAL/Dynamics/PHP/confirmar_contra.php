<?php
        //comprobar que los valores existan
        require "./seguridad_hasheo.php";
        $contra=(isset($_POST['contra']) && $_POST["contra"] != "")? $_POST['contra'] : false;
        $include= require "./config.php";
        $con = connect();
        if($con && $include)
        {
            SESSION_START();
            $IDu= $_SESSION["ID"];
            $sql =  "SELECT * FROM usuario WHERE ID_usuario = $IDu";
            $res = mysqli_query($con, $sql);
            $datos = mysqli_fetch_array($res);
            $Hashe= $datos[1];
            $Sal1= $datos[2];
            $respuesta = [];
            $comprobar = verificar_contra ($contra, $Hashe, $Sal1);
            if(!$comprobar)
            {
                
                $respuesta = array("ok"=>false, "mensaje" => "Contraseña incorrecta");
            }else{
               
                $respuesta = array("ok"=>true, "mensaje" => "Contraseña correcta");
            }
            echo json_encode($respuesta);
        }     
    ?>