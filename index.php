<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="public/estilos/estilos.css">
  </head>
  <body>
  <div class="container mt-4" class=" p-4 fondo_formulario">
  <div class="row justify-content-center">
    <div class="col-lg-4">
        <form action="servidor/loginUsuario.php" method="POST" class=" p-4 fondo_formulario">
          <div class="container">
            <div class="row mt-4">
              <div class="col-lg-12 text-center">
              <img src="raw/img/cruz.png" id="icon" alt="User Icon"/>
                <h5>Iniciar Seción<h5>
              </div>
            </div>
            <hr class="linea">
            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group">
                        <label for="usuario"><i class="fas fa-user-alt mr-2"></i>Usuario:</label>
                        <input type="text" class="form-control form-control-sm rounded-pill" name="usuario" placeholder="Ingrese usuario:">
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="password"><i class="fas fa-lock mr-2"></i>Contraseña:</label>
                      <input type="password" class="form-control form-control-sm rounded-pill" name="password" placeholder="Ingrese contraseña:">
                  </div>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-lg-12 text-center">
                <button class="btn btn-primary"><i class="fas fa-door-open mr-2"></i>Entrar</button> 
              </div>
            </div>
            <div class="row mt-4">
                        <div class="col-lg-12 text-right text-muted">
                          <a href="registrar.php" class="links">¿No tienes cuenta?</a>
                        </div>
                      </div>
            <div class="row mt-3">
            </div>
          </div>
        </form>
    </div>
  </div>
</div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<? include "inicio.php";
?>