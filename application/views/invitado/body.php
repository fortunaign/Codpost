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
                <a href="<?= base_url() ?>home/read/<?= $fila->id ?>"><h3><?= $fila->titulo ?></h3></a> 
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