<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $foto = $_FILES['foto'];

  // Verificar si se subió correctamente
  if ($foto['error'] === UPLOAD_ERR_OK) {
    $nombreTemp = $foto['tmp_name'];
    $nombreArchivo = $foto['name'];
    $directorioDestino = 'pag/';
    $destino = $directorioDestino . $nombreArchivo;

    // Crear el directorio de destino si no existe
    if (!is_dir($directorioDestino)) {
      mkdir($directorioDestino, 0777, true);
    }

    // Mover la foto a la carpeta de destino
    if (move_uploaded_file($nombreTemp, $destino)) {
      echo 'La foto se ha subido correctamente.';
    } else {
      echo 'Error al mover el archivo.';
    }
  } else {
    echo 'Error al subir la foto: ' . $foto['error'];
  }
}
?>
