<!doctype html>
<html lang="en">
  <head>
    <title>Registro de usuario</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="public/estilos/estilos.css">
  </head>
  <body>
  <div class="container  mt-4" >
<div class="row justify-content-center">
    <div class="col-lg-12 ">
        <form action="servidor/registro.php" method="POST" class=" p-4 fondo_formulario">
          <div class="container">
            <div class="row ">
              <div class="col text-center">
                <h5>Registro<h5>
              </div>
            </div>
            <hr class="linea">
            <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                        <label for="nombre"><i class="fas fa-user-alt mr-2"></i>Nombre(s):</label>
                        <input type="text" class="form-control form-control-sm rounded-pill" name="nombre" placeholder="Ingrese nombre:">
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                        <label for="paterno"><i class="fas fa-user-alt mr-2"></i>Apellido paterno:</label>
                        <input type="text" class="form-control form-control-sm rounded-pill" name="paterno" placeholder="Ingrese apellido paterno:">
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                        <label for="materno"><i class="fas fa-user-alt mr-2"></i>Apellido materno:</label>
                        <input type="text" class="form-control form-control-sm rounded-pill" name="materno" placeholder="Ingrese apellido materno:">
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                      <label for="sexo"><i class="fas fa-lock mr-2"></i>Sexo:</label>
                      <select name="sexo" class="form-control form-control-sm rounded-pill" required placeholder="seleccione sexo:" >
                            <option value="Hombre" >Hombre</option>
                            <option value="Mujer">Mujer</option>
                        </select> 
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="form-group">
                        <label for="telefono"><i class="fas fa-mobile-alt mr-2"></i>Telefono:</label>
                        <input type="number" class="form-control form-control-sm rounded-pill" name="telefono" placeholder="Ingrese telefono:">
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="form-group">
                        <label for="fecha"><i class="fas fa-calendar-week mr-2"></i>Fecha:</label>
                        <input type="date" class="form-control form-control-sm rounded-pill" name="fecha" placeholder="Ingrese fecha:">
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                      <label for="usuario"><i class="fas fa-user-alt mr-2"></i>usuario:</label>
                      <input type="text" class="form-control form-control-sm rounded-pill"  name="usuario" placeholder="Ingrese nombre de usuario:">
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                        <label for="email"><i class="fas fa-at mr-2"></i>E-mail:</label>
                        <input type="text" class="form-control form-control-sm rounded-pill" name="email" placeholder="Ingrese su e-mail:">
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                        <label for="password"><i class="fas fa-lock mr-2"></i>Password:</label>
                        <input type="password" class="form-control form-control-sm rounded-pill"  name="password" placeholder="Ingrese password:">
                  </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-sm-8 tex-left">
                  <button class="btn btn-primary btn-lg btn-block"><i class="fas fa-sign-in-alt mr-2"></i>Registrar</button>
              </div>
              <div class="col-sm-4 text-right">
                  <a href="index.php" class="btn btn-danger btn-lg btn-block"><i class="fas fa-user-alt mr-2"></i>Login</a>
              </div>
            </div>
            <div class="row mt-4">
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