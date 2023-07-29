<!--Este archivo inserta publicaciones de ventas a la base de datos-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Statics/styles/ventas.css">
  <link rel="icon" href="../../Statics/media/Escudo.png" type="image/png">
  <title>Error</title>
</head>
<body>
  <?php
    //comprobacion de datos
    $nomprod=(isset($_POST['nomprod']) && $_POST["nomprod"] != "")? $_POST['nomprod'] : false;
    $descripcion=(isset($_POST['des']) && $_POST["des"] != "")? $_POST['des'] : false;
    $precio=(isset($_POST['precio']) && $_POST["precio"] != "")? $_POST['precio'] : false;
    $lugar=(isset($_POST['lugar']) && $_POST["lugar"] != "")? $_POST['lugar'] : false;
    $hora1=(isset($_POST['hora1']) && $_POST["hora1"] != "")? $_POST['hora1'] : false;
    $hora2=(isset($_POST['hora2']) && $_POST["hora2"] != "")? $_POST['hora2'] : false;
    $tel=(isset($_POST['tel']) && $_POST["tel"] != "")? $_POST['tel'] : false;
    $continuar=(isset($_POST['continuar']) && $_POST["continuar"] != "")? $_POST['continuar'] : false;

    //recibe la imagen, y obtiene la ruta final para poder guardarla en la base de datos
    if (isset($_FILES["imagen"]))
    {
        $arch = $_FILES["imagen"];//recibe archivo
        $name= $arch["name"];//obtiene el nombre del archivo : imagen.jpg
        $ruta_temporal = $arch["tmp_name"]; //$arch es un arreglo que tiene la ruta temporal de la imagen
        $ext = pathinfo($name, PATHINFO_EXTENSION); //saca la extencion del nombre : .jpg
        $nomuni = uniqid();
        if (!file_exists("../../Statics/media/img_ventas"))//si la carpeta no existe, la crea
        {
            if (mkdir("../../Statics/media/img_ventas"));
        }
        $ruta_final = "../../Statics/media/img_ventas/$nomuni.$ext";//ruta en la que se va a guardar
        rename($ruta_temporal, $ruta_final);//cambia la ruta temporal por la ruta final
   }

    //inserta los datos a la base de datos
    $include = include("./config.php");
    $con= connect();
    session_start();
    $IDu= $_SESSION["ID"];
    $Usu=$_SESSION["Usuario"];
    if($include && $con)
    {

        if($continuar=='2'){
            $sql = "INSERT INTO ventas (ID_venta, ID_usuario, Descripcion, Precio, Lugar, Img, Usuario, Hora1, Hora2, Telefono, Nombre_producto) VALUES (NULL, $IDu, '$descripcion', '$precio', '$lugar', '$ruta_final', '$Usu', '$hora1', '$hora2', '$tel', '$nomprod' )";
        if(mysqli_query($con, $sql)){
            echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=./ventas_general.php'>";
        }
        }else{
            echo "<div align='center' id='conten_error'><h1 id='error'>Lo sentimos, no se pudo crear la publicación, por favor ingresa de nuevo los datos</h1><br>
            <a class='boton' id='btn_error' align='center' href='../../Templates/ventas.html'>Publica ventas</a></div>";
        }
    }else{
        echo "<div align='center' id='conten_error'><h1 id='error'>Lo sentimos, no se pudo crear la publicación, por favor ingresa de nuevo los datos</h1><br>
        <a class='boton' id='btn_error' align='center' href='../../Templates/ventas.html'>Publica en ventas</a></div>";
    }

?>
</body>
</html>
