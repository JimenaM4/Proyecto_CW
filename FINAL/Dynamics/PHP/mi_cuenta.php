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
        <a href="../../index.html"> <span class="cerrar"><img src="../../Statics/media/cerrar.png" class="img">Cerrar sesión </a>
      </div>
    </aside>
  <div id="contmax">
    <div id="cont-fp-dp">
          <div id="cont-pp">
              <div id="perfil">
                
              </div>

              <div id="cont-input">
                  <input type="file" name="foto" id="foto">
                  <input type="submit" id="Subir_foto">
              </div>
          </div>
          
          <div id="cont-datosp">
                  <div class="datos" id="datosp">
                    <h1 >Datos personales</h1>

              
            </div> 
            <button type="button" class="btn btn-primary" id="btn_editar">Actualizar</button>
            <div id="cambios" style="display:none">
                <h1>Actualiza tus datos</h1>
                <form method="POST" id="formulario_actualizar">
                    <div id="datos_new_usu">
                        <label for="nombre">
                            <input type="text" name="nombre" id="nombre" placeholder="Nombre completo" class="form-control" required>
                        </label>
                        <br><br>
                        <label for="telefono">
                            <input type="number" id="telefono" name="telefono" placeholder="Teléfono" class="form-control" required>
                        </label>
                        <br><br>
                        <label for="num_cuenta">
                            <input type="number" id="num_cuenta" name="num_cuenta" placeholder="num_cuenta" class="form-control" required>
                        </label>
                        <br><br>
                        <label for="grupo">
                            <input type="number" id="grupo" name="grupo" placeholder="grupo" class="form-control" required>
                        </label>
                        <br><br>
                        <label for="usuario">
                            <input type="text" id="usuario" name="usuario" placeholder="Usuario" class="form-control" required>
                        </label>
                        <br><br>
                        <label for="contrasena">
                            <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" class="form-control" required>
                            <img src="../../Statics/Media/eye-outline.svg" alt="ojo_abierto" width="30px" height="auto" id="ver_contra">
                            <img src="../../Statics/Media/eye-off-outline.svg" alt="ojo_cerrado" width="30px" height="auto" id="no_ver_contra" style="display:none">
                        </label>
                            <br><br>
                        <center><button class="boton" type="submit" id="actualizar" name="actualizar" value="0">Actualizar</button></center>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
    
  </body>
</html>
