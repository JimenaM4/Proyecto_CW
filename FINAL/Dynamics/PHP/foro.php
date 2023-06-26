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
  
</body>
</html>
<?php 
  $titulo=(isset($_POST['titulo']) && $_POST["titulo"] != "")? $_POST['titulo'] : false;
  $tema=(isset($_POST['tema']) && $_POST["tema"] != "")? $_POST['tema'] : false;
  $descripcion=(isset($_POST['descripcion']) && $_POST["descripcion"] != "")? $_POST['descripcion'] : false;
  $preguntas=(isset($_POST['preguntas']) && $_POST["preguntas"] != "")? $_POST['preguntas'] : false;
  $publicar=(isset($_POST['publicar']) && $_POST["publicar"] != "")? $_POST['publicar'] : false;
  
  
  if (isset($_FILES["imagen"]))
     {
         $arch = $_FILES["imagen"];//recive archivo
         $name= $arch["name"];//obtiene el nombre del archivo : imagen.jpg
         $ruta_temporal = $arch["tmp_name"]; //$arch es un arreglo que tiene la ruta temporal de la imagen
         $ext = pathinfo($name, PATHINFO_EXTENSION); //saca la extencion del nombre : .jpg
         $nomuni = uniqid();
         if (!file_exists("../../Statics/media/img_foro"))//si la carpeta no existe, la crea
         {
             if (mkdir("../../Statics/media/img_foro"));
         }
         $ruta_final = "../../Statics/media/img_foro/$nomuni.$ext";//ruta en la que se va a guardar
         rename($ruta_temporal, $ruta_final);//cambia la ruta temporal por la ruta final
    }
    session_start();
  if($publicar=="2"){
    
    
    $IDu= $_SESSION["ID"];
    
    $include= require "./config.php";
    $con = connect();
     
     $sql = "INSERT INTO foro (ID_foro, ID_usuario, Titulo, Tema, Descripcion, Preguntas, Img, Likes) VALUES (NULL, $IDu,'$titulo', '$tema', '$descripcion', '$preguntas', '$ruta_final', 0)";
     $resultado = mysqli_query($con, $sql);
     if($resultado){
      echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=./foro_general.php'>";
     }else{
       echo "Error al publicar";
    }
  }else{
    echo "<div align='center' id='conten_error'><h1 id='error'>Lo sentimos, no se pudo crear el foro, por favor intenta nuevamente</h1><br>
        <a id='btn_error' align='center' href='../../Templates/foro.html'>Crear foro</a></div>";  
  }
?>
