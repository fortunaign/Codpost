    <!-- Begin page content -->
    <main role="main" class="container">
      <div class="row mt-4">
        <!-- Vistas de Post  -->
          <div class="col-lg-8">
            <!-- Cuerpo de Post  -->
            <div class="row mb-4 shadow bg-light rounded-bottom"> 
              <!-- Portada de Post  -->
                <div class="col-lg-4 text-center" style="background-color: silver;">
                  <!--2<img src="<?=base_url()?>plantillas/img/ejemplo.png" class="img-fluid" alt="">-->
                  <div style="height: 150px;"></div>
                </div>
                <!-- Detalles de Post  -->
                <div class="col-lg-8 p-4">
                 <h3><?= $titu ?></h3>
                  <p>
                    <?= $desa ?>
                  </p>
                  <p class="text-secondary">
                    <?= $date ?> | nombre
                  </p>
                </div>
              </div>  
          </div>
          <!-- Fin de la Estructura de Post  -->
        
      </div>

    </main>