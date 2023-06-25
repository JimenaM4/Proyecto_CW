<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Statics/styles/registro.css">
    <title>Error</title>
</head>
<body>
    
</body>
</html>
<?php
    //comprobar que los valores existan
    require "./seguridad_hasheo.php";
    $include= require "./config.php";
    $nombre=(isset($_POST['nombre']) && $_POST["nombre"] != "")? $_POST['nombre'] : false;
    $numcuen=(isset($_POST['numdecuen']) && $_POST["numdecuen"] != "")? $_POST['numdecuen'] : false;
    $tel=(isset($_POST['telefono']) && $_POST["telefono"] != "")? $_POST['telefono'] : false;
    $grupo=(isset($_POST['grupo']) && $_POST["grupo"] != "")? $_POST['grupo'] : false;
    $usuario=(isset($_POST['usuario']) && $_POST["usuario"] != "")? $_POST['usuario'] : false;
    $contra=(isset($_POST['contraseña']) && $_POST["contraseña"] != "")? $_POST['contraseña'] : false;
    $acceder=(isset($_POST['entrar']) && $_POST["entrar"] != "")? $_POST['entrar'] : false;
    if($acceder=='2')
     {
        $sal = generarSal(); 
        $pimienta = generarPimienta();
        $contraHash = hashearContra($contra.$pimienta.$sal);
        // echo $sal."<br>".$pimienta."<br>".$contraHash;
        $con = connect();

         if ($include && $con)
         {
            $sql = "INSERT INTO usuario (ID_usuario, Hashe, Sal, Nombre, num_cuenta, num_telefono, usuario, grupo) VALUES (NULL, '$contraHash', '$sal', '$nombre', $numcuen, $tel, '$usuario', $grupo )";
            $res = mysqli_query($con, $sql);
            if($res){
               echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../../index.html'>";
            }else
            { 
              echo "<div align='center' id='conten_error'><h1 id='error'>Lo sentimos, no se pudo completar el registro, por favor ingresa de nuevo los datos</h1><br>
              <a class='boton' id='btn_error' align='center' href='../../Templates/registro.html'>Registrate</a></div>";
            }
         }
      }
      else
      { 
        echo "<div align='center' id='conten_error'><h1 id='error'>Lo sentimos, no se pudo completar el registro, por favor ingresa de nuevo los datos</h1><br>
        <a class='boton' id='btn_error' align='center' href='../../Templates/registro.html'>Registrate</a></div>";
      }
    
?>