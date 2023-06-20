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
        $sal = generarSal(); 
        $pimienta = generarPimienta();
        $contraHash = hashearContra($contra.$pimienta.$sal);
        //echo $contra.$pimienta.$sal. "<br>";  ES LA CONTRASEÑA YA HASEADA CON SAL Y PIMIENTA
        //echo "Contraseña: $contraHash <br>";  
        //$contraCorrect = "4539c11a1627d730955603b48ec6589cf6aeeb9aad3aed3c93ffc4d0a7925a95"; CONTRASEÑA QUE SE GUARDARA EN DB
        //$salOriginal = "6490a21318897"; SAL QUE SE GUARDARA EN LA DB 
        // if(verificar_contra($contra, $contraCorrect, $salOriginal)){
        //     echo "Contraseña correcta";
        // }else{
        //     echo "Contraseña incorrecta";
        // } ES PARA VERIFICAR QUE LA CONTRASEÑA INGRESADA POR EL USUARIO SEA CORRECTA
        echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=./menu.php'>";
     }else {
        echo "<div align='center' id='conten_error'><h1 id='error'>Lo sentimos, no se pudo iniciar sesión, por favor ingresa de nuevo los datos</h1><br>
        <a class='boton' id='btn_error' align='center' href='../../Templates/inicio_sesion.html'>Inicia sesión</a></div>";
     };
?>
