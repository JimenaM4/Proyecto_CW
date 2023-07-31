<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="icon" href="../../Statics/media/Escudo.png" type="image/png">
    <link rel="stylesheet" href="../../statics/styles/mi_cuenta.css">
    <link rel="stylesheet" href="../../libs/bootstrap-5.3.0-dist/css/bootstrap.css">
    <script src="../../libs/bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
    <script src="../../Dynamics/JS/decora.js"></script>
    <title>Mi cuenta</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mi perfil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../../Dynamics/PHP/inicio_sesion.php">Inicia sesión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../Dynamics/PHP/registro.php">Registrate</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ayuda
          </a>
          <ul class="dropdown-menu">
            <li><a  class="dropdown-item" href="../../Templates/Term_y_Cond.html">Terminos y condiciones</a></li>
            <li><a class="dropdown-item" href="../../Dynamics/PHP/creditos.php">Creditos</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Configuración</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <aside>
      <div class="opciones">
        <a href=""> <span class="texto"><img src="../../Statics/media/perfi.png" class="img"> Perfil</a><br>
        <a href="../../Dynamics/PHP/inicio_sesion.php"> <span class="cerrar"><img src="../../Statics/media/cerrar.png" class="img">Cerrar sesión </a>
      </div>
    </aside>
    <div class="foto">
      <form action="../../Dynamics/PHP/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="portada" id="portada">
        <input type="submit" value="Subir foto">
      </form>
    </div>
    <div class="perfil">
    <form action="../../Dynamics/PHP/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="foto2" id="foto2">
        <input type="submit" value="Subir foto">
      </form>
    </div>
     <div class="datos" id="datosp">
      
    </div> 
    
  </body>
</html>
