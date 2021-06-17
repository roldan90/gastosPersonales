<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/registro.css">
    <title>Login</title>
  </head>
  <body>

  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Registro de usuario</h5>
            <form class="form-signin" id="frmRegistro" method="POST" onsubmit="return registro()">
              <div class="form-label-group">
                <input type="text" id="inputUserame" name="inputUserame" class="form-control" placeholder="Username" required autofocus>
                <label for="inputUserame">Nombre de usuario</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Correo electronico</label>
              </div>
              
              <hr>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              
              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" name="inputConfirmPassword" class="form-control" placeholder="Password" required>
                <label for="inputConfirmPassword">Cofirmar password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
              <a class="d-block text-center mt-2 small" href="index.php">Login</a>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="public/bootstrap4/jquery-3.6.0.min.js"></script>
    <script src="public/bootstrap4/popper.min.js"></script>
    <script src="public/bootstrap4/bootstrap.min.js"></script>
  </body>
</html>