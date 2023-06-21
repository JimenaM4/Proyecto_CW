<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro enp6</title>
    <link rel="icon" href="../../Statics/media/Escudo.png" type="image/png">
    <link rel="stylesheet" href="../../Statics/styles/foro.css">
    <link rel="stylesheet" href="../../libs/bootstrap-5.3.0-dist/css/bootstrap.css">
    <script src="../../libs/bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
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
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Busca algo" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
  <p class="titulo">Crea un foro para hablar con tus compañeros</p>
  <h1 class=comentario1>Recuerda que debes ser respetuoso y poder tener una relacion sana con todos tus compañeros.</h1>
        <form action="./subir_foro.php" method="POST" enctype="multipart/form-data" class="publicacion">
            <label>Título</label>
              <input type="text" required></input>
            <label>Tema de interés</label>
              <input type="text" required></input>
            <label>Desceripción</label>
              <input type="text" required></input>
            <label>Preguntas</label>
              <input type="text" required></input>
            <input type="file" name="imagen" id="imagen">
            <input type="submit" value="Subir imagen" name="submit"><br>
          <button type="submit" id="publicar">Publicar</button><br>
          <button type="reset" id="borrar">Borrar</button>
        </form>
  <script src="foro.js"></script>
</body>
</html>
