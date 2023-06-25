<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $foto = $_FILES['imagen'];

  // Verificar si se subió correctamente
  if ($foto['error'] === UPLOAD_ERR_OK) {
    $nombreTemp = $foto['tmp_name'];
    $nombreArchivo = $foto['name'];
    $directorioDestino = 'foro/';
    $destino = $directorioDestino . $nombreArchivo;

    // Crear el directorio de destino si no existe
    if (!is_dir($directorioDestino)) {
      mkdir($directorioDestino, 0777, true);
    }

    // Mover la foto al directorio de destino
    if (move_uploaded_file($nombreTemp, $destino)) {
      echo 'La imagen se ha subido correctamente.';
    } else {
      echo 'Error al mover el archivo.';
    }
  } else {
    echo 'Error al subir la imagen: ' . $foto['error'];
  }
}
?>

