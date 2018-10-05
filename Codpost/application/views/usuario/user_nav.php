
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
    <link href="<?= base_url()?>plantillas/css/post.css" rel="stylesheet">
    <link href="<?= base_url()?>plantillas/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?= base_url()?>plantillas/css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="<?= base_url()?>plantillas/css/open-iconic-foundation.css" rel="stylesheet">
  </head>

  <body class="bg-secondary">
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-light  fixed-top bg-light shadow">
            <a class="navbar-brand" href="<?= base_url()?>">Blog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>home/perfil"><?= $this->session->userdata('user')?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Post <span class="badge badge-secondary"> 5 </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Crear Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Documentos <span class="badge badge-secondary"> 8 </span></a>
                </li>
            </ul>
            <?php 
                if($this->session->userdata('log'))
                {
            ?>
                <ul class="nav justify-content-end">
                    <!--
                    <li class="nav-item">
                        <a class="nav-link" href="home/perfil">Perfil</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="btn btn-outline-danger btn-sm" href="<?= base_url()?>login/logOut">Cerrar Sesion</a>
                    </li>
                </ul>
            <?php
                }else{
            ?>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModal">
                    <i class="glyphicon glyphicon-cloud"></i> Iniciar sesión
            </button>
            <?php 
                }
            ?>
        </div>
    </nav>
</header>
