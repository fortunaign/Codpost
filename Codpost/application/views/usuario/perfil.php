<!-- Begin page content -->
<main role="main" class="container">
    <div class="row mt-4">
        <div class="col-lg-12">
        <!-- Cuerpo de Post  -->
        <div class="row mb-4 shadow bg-light rounded"> 
                <!-- Portada de Post  -->
                <div class="col-lg-3 pt-4" >
                    <div class="row">
                        <div class="col-lg-12 col-4  text-center">
                            <img src="<?= base_url()?>plantillas/img/fuckyou.jpg" class="img-thumbnail img-fluid" style="width: 100px; height: 100px;" alt="">
                        </div>
                    
                        <div class="col-lg-12 col-6 p-2 text-center">
                            <span>Ignacio Fortuna</span>
                        </div>
                    </div>
                    <!--2<img src="<?=base_url()?>plantillas/img/ejemplo.png" class="img-fluid" alt="">-->
                </div>
                <!-- Detalles de Post  -->
                <div class="col-lg-5 p-4">
                    <div class="form-group">
                        <label for="">Titulo</label>
                        <input type="text" class="form-control" placeholder="Titulo" name="" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Descripcion</label>
                        <input type="text" class="form-control" placeholder="Descripcion" name="" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Post</label>
                        <textarea name="" class="form-control" id="" cols="30" rows="10" placeholder="Ingresa aqui el contenido del post"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-primary" value="Publicar">
                    </div>
                </div>
                <!-- Menu de Post  -->
                <div class="col-lg-3 p-4">
                    <ul class="list-group">
                        <li class="list-group-item disable">Menu</li>
                        <li class="list-group-item"><a href="<?= base_url()?>">Inicio</a></li>
                        <li class="list-group-item"><a href="">Mi perfil</a></li>
                        <li class="list-group-item"><a href="">Mis Post</a>
                            <span class="badge badge-primary badge-pill">14</span>
                        </li>
                        <li class="list-group-item"><a href="">Mis Documentos</a>
                            <span class="badge badge-primary badge-pill">14</span>
                        </li>
                    </ul>
                </div>    
        </div>     
                   
            </div>  
        </div>
        <!-- Fin de la Estructura de Post  -->
    </div>
</main>