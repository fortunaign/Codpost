
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

    <!-- Begin page content -->
    <main role="main" class="container">
      <div class="row mt-4">
        <!-- Vistas de Post  -->
        
          <?php 
              foreach ($consulta->result() as $fila) {
          ?>
          <div class="col-lg-8">
            <!-- Cuerpo de Post  -->
            <div class="row mb-4 shadow bg-light rounded-bottom"> 
              <!-- Portada de Post  -->
                <div class="col-lg-4 text-center" style="background-color: silver;">
                  <!--2<img src="<?=base_url()?>plantillas/img/ejemplo.png" class="img-fluid" alt="">-->
                  
                </div>
                
                <!-- Detalles de Post  -->
                <div class="col-lg-8 p-4">
                 <a href="<?= base_url() ?>readpost/read/<?= $fila->id ?>"><h3><?= $fila->titulo ?></h3></a> 
                  <p>
                    <?= $fila->descripcion ?>
                  </p>
                  <a href="">Leer mas..</a>
                  <p class="text-secondary">
                    <?= $fila->fecha ?> | nombre
                  </p>
                </div>
              </div>  
          </div>    
          <?php
              }
          ?>
          
          <!-- Fin de la Estructura de Post  -->
        
      </div>

    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">2018 - 2019 &copy; Ignacio Fortuna</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= base_url()?>plantillas/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="<?= base_url()?>plantillas/js/popper.min.js"></script>
    <script src="<?= base_url()?>plantillas/js/bootstrap.min.js"></script>
  </body>
</html>
