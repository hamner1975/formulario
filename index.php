<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Foto</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <!-- Sweetalert2 -->
  <link rel="stylesheet" href="plugin/sweetalert2/sweetalert2.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!-- Start your project here-->
  <div style="height: 100vh" class="container">
    <div class="flex-center flex-column">
      <!-- Card -->
      <div class="row">
        <div class="col-md">
          <div class="card weather-card">
            <!-- Card content -->
            <!-- Material form register -->
            <div class="card">
              <h5 class="card-header info-color white-text text-center py-4">
                <strong>Registrarse</strong>
              </h5>

              <!--Card content-->
              <div class="card-body px-lg-5 pt-0">
                <!-- Form -->
                <form class="text-center" style="color: #757575;" method="POST" id="formUsuario" enctype="multipart/form-data">
                  <div class="form-row">
                    <div class="col">
                      <!-- First name -->
                      <div class="md-form">
                        <input type="text" id="nombre" name="nombre" class="form-control" />
                        <label for="nombre">Nombre</label>
                      </div>
                    </div>
                    <div class="col">
                      <!-- Last name -->
                      <div class="md-form">
                        <input type="text" id="apellidos" name="apellidos" class="form-control" />
                        <label for="apellidos">Apellidos</label>
                      </div>
                    </div>
                  </div>

                  <!-- Imagen -->
                  <div class="md-form mt-0">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="foto" lang="es" />
                      <label class="custom-file-label" for="foto">Seleccionar Archivo</label>
                    </div>
                  </div>

                  <!-- Sign up button -->
                  <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="button" id="guardarUsuario">
                    Guardar
                  </button>

                  <hr />

                  <!-- Terms of service -->
                  <p>
                    <a href="https://about.me/hamner" target="_blank">Hamner Salazar Avila</a>
                  </p>
                </form>

                <!-- Form -->
              </div>
            </div>
            <!-- Material form register -->
          </div>
        </div>
      </div>
      <!-- Card -->
    </div>
  </div>
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Sweetalert2 -->
  <script src="plugin/sweetalert2/sweetalert2.min.js"></script>
  <!-- Your custom scripts -->
  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>