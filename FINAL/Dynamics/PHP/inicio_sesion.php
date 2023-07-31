<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Statics/styles/inicio_sesion.css">
    <title>Error</title>
</head>
<body>
    
</body>
</html>
<?php
    require "./seguridad_hasheo.php";
    $usuario=(isset($_POST['usuario']) && $_POST["usuario"] != "")? $_POST['usuario'] : false;
    $contra=(isset($_POST['contraseña']) && $_POST["contraseña"] != "")? $_POST['contraseña'] : false;
    $acceder=(isset($_POST['acceder']) && $_POST["acceder"] != "")? $_POST['acceder'] : false;
    if($acceder=='2')
     {
         $include= require "./config.php";
         $con = connect();
         $sql =  "SELECT * FROM usuario WHERE usuario = '$usuario'";
         $res = mysqli_query($con, $sql);
         $datos = mysqli_fetch_array($res);
         $IDu= $datos[0];
         $Hashe= $datos[1];
         $Sal1= $datos[2];
         $Usu = $datos[6];
         $comprobar = verificar_contra ($contra, $Hashe, $Sal1);
         if($comprobar)
         {
            session_start();
            $_SESSION["ID"] = $IDu;
            $_SESSION["Usuario"] = $Usu;
            echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=./menu.php'>";
         }
         else{
            echo "<div align='center' id='conten_error'><h1 id='error'>Lo sentimos, no se pudo iniciar sesión, por favor ingresa de nuevo los datos</h1><br>
            <a class='boton' id='btn_error' align='center' href='../../index.html'>Inicia sesión</a></div>";
         }
         //
     }else {
        echo "<div align='center' id='conten_error'><h1 id='error'>Lo sentimos, no se pudo iniciar sesión, por favor ingresa de nuevo los datos</h1><br>
        <a class='boton' id='btn_error' align='center' href='../../index.html'>Inicia sesión</a></div>";
     };
?>
