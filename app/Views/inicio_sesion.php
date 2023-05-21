<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio Sesión</title>
  <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css') ?>">
</head>

<body>
  <div class="d-flex align-content-center flex-wrap">
    <div class="container">

      <div class="row">
        <div class="col-4 col-sm-4 col-md-5">
          <div class="card">
            <div class="card-body">

              <form action="">

                <div class="form-group">
                  <label for="ipt_usuario">Usuario:</label>
                  <input type="text" name="usuario" id="ipt_usuario" class="form-control">
                </div>

                <div class="form-group">
                  <label for="ipt_contrasenia">Contraseña:</label>
                  <input type="password" name="contrasenia" id="ipt_contrasenia" class="form-control">
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
  <script src="<?php echo base_url('bootstrap/js/bootstrap.js') ?>"></script>
</body>

</html>