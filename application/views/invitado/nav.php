
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>CodeIgneter | Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url()?>plantillas/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?= base_url()?>plantillas/css/sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body class="bg-secondary">
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-light  fixed-top bg-light shadow">
    <a class="navbar-brand" href="#">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url()?>">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>login">Grupos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contactos</a>
        </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Usuario" aria-label="Search">
        <input class="form-control mr-sm-2" type="password" placeholder="Contraseña" aria-label="Search">
        <input class="form-control mr-sm-2 btn btn-success" type="submit" name="Entrar" value="Entrar">
        </form>
    </div>
    </nav>
</header>