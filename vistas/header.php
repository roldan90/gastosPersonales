
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../public/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="../public/fontawesome5.15.3/css/all.css">
    <link rel="stylesheet" href="../public/datatable/dataTables.bootstrap4.min.css">
    <title>Gastos personales</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="inicio.php">
                <span style="color: brown;" class="fas fa-wallet fa-3x"></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link" href="inicio.php">
                        <span class="fas fa-laptop-house"></span> Inicio
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="categorias.php">
                        <span class="fas fa-clipboard-list"></span> Categorias
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gastos.php">
                    <span class="far fa-money-bill-alt"></span> Gastos
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a style="color:red" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Usuario: <?php echo $_SESSION['usuario']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="../procesos/login/salir.php">
                        <span class="fas fa-sign-out-alt"></span> Salir
                    </a>
                    </div>
                </li>
            </ul>
            </div>
        </div>
        </nav>
<!-- Page Content -->