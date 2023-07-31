<?php
if (isset($_FILES["portada"]))
{
    $arch = $_FILES["portada"];//recive archivo
    $name= $arch["name"];//obtiene el nombre del archivo : imagen.jpg
    $ruta_temporal = $arch["tmp_name"]; //$arch es un arreglo que tiene la ruta temporal de la imagen
    $ext = pathinfo($name, PATHINFO_EXTENSION); //saca la extencion del nombre : .jpg
    $nomuni = uniqid();
    if (!file_exists("../../Statics/media/img_perfil"))//si la carpeta no existe, la crea
    {
        if (mkdir("../../Statics/media/img_perfil"));
    }
    $ruta_final = "../../Statics/media/img_perfil/$nomuni.$ext";//ruta en la que se va a guardar
    rename($ruta_temporal, $ruta_final);//cambia la ruta temporal por la ruta final
}
$IDu= $_SESSION["ID"];

    $include= require "./config.php";
    $con = connect();

     $sql = "INSERT INTO usuario (f_perfil) VALUES ("$ruta_final") WHERE ID_usuario=$IDu";
     $resultado = mysqli_query($con, $sql);
     if($resultado){
      echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=./mi_cuenta.php'>";
     }else{
       echo "Error al actualizar foto";
    }
?>
