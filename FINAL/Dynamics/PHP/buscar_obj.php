<!--Archivo que crea una nueva publicacion de busqueda de objeto perdido-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Statics/styles/foro.css">
  <link rel="icon" href="../../Statics/media/Escudo.png" type="image/png">
  <title>Error</title>
</head>
<body>
  <?php 
  //recibe valores de las variables 
  $titulo=(isset($_POST['titulo']) && $_POST["titulo"] != "")? $_POST['titulo'] : false;
  $descripcion=(isset($_POST['descripcion']) && $_POST["descripcion"] != "")? $_POST['descripcion'] : false;
  $lugar=(isset($_POST['lugar']) && $_POST["lugar"] != "")? $_POST['lugar'] : false;
  $recompensa=(isset($_POST['recompensa']) && $_POST["recompensa"] != "")? $_POST['recompensa'] : false;
  $Continuar=(isset($_POST['Continuar']) && $_POST["Continuar"] != "")? $_POST['Continuar'] : false;
  
  
  if (isset($_FILES["imagen"]))
     {
         $arch = $_FILES["imagen"];//recive archivo
         $name= $arch["name"];//obtiene el nombre del archivo : imagen.jpg
         $ruta_temporal = $arch["tmp_name"]; //$arch es un arreglo que tiene la ruta temporal de la imagen
         $ext = pathinfo($name, PATHINFO_EXTENSION); //saca la extencion del nombre : .jpg
         $nomuni = uniqid();
         if (!file_exists("../../Statics/media/img_perdidos"))//si la carpeta no existe, la crea
         {
             if (mkdir("../../Statics/media/img_perdidos"));
         }
         $ruta_final = "../../Statics/media/img_perdidos/$nomuni.$ext";//ruta en la que se va a guardar
         rename($ruta_temporal, $ruta_final);//cambia la ruta temporal por la ruta final
    }

    session_start();
    $IDu= $_SESSION["ID"];

    $include = include("./config.php");
    $con= connect();
    if($include && $con)
    {
        if($Continuar=='3'){
            $sql = "INSERT INTO publicar_perdido(ID_perdido, ID_usuario, Titulo, Descripcion, Lugar, Recompensa, Img) VALUES (NULL,'$IDu', '$titulo', '$descripcion', '$lugar', '$recompensa', '$ruta_final')";
            if(mysqli_query($con, $sql)){
                echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=./perdidos_general.php'>";// que te redireccione a la pagina de comunidad :  echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../../Templates/foro_general.html'>";
            }
        }else if($Continuar=='2'){
            $sql = "INSERT INTO publicar_perdido(ID_perdido, ID_usuario, Titulo, Descripcion, Lugar, Recompensa, Img) VALUES (NULL,'$IDu', '$titulo', '$descripcion', '$lugar', NULL, '$ruta_final' )";
            if(mysqli_query($con, $sql)){
                echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=./perdidos_general.php'>";//que te redireccione a la pagina de comunidad :  echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../../Templates/foro_general.html'>";
            }
        }
    }else{
        echo "<div align='center' id='conten_error'><h1 id='error'>Lo sentimos, no se pudo crear la publicación, por favor ingresa de nuevo los datos</h1><br>
        <a class='boton' id='btn_error' align='center' href='../../Templates/objetos_perdidos.html'>Publica en objetos perdidos</a></div>";
    }
?>
</body>
</html>

