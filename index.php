<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/login.css">
    <title>Login</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Entrar al sistema</h5>
                    <form class="form-signin" id="frmLogin" method="POST" onsubmit="return login()">
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                        <label for="inputEmail">Email address</label>
                    </div>

                    <div class="form-label-group">
                        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
                        <label for="inputPassword">Password</label>
                    </div>

                    
                    <button id="btnEntrarSistema" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>
                    <a href="registro.php" id="btnEntrarSistema" class="btn btn-lg btn-danger btn-block text-uppercase">Registrarse</a>
                    <hr class="my-4">
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="public/bootstrap4/jquery-3.6.0.min.js"></script>
    <script src="public/bootstrap4/popper.min.js"></script>
    <script src="public/bootstrap4/bootstrap.min.js"></script>
  </body>
</html>