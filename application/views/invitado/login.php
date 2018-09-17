<!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Acceso</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form class="p-4" action="<?=base_url() ?>login" method="post" autocomplete="off">
                <div class="form-group text-center">
                      <h1 class="display-3 ">BLOG</h1>
                      <span class="text-secondary font-weight-light">Inicio de sesión</span>
                  </div>  
                <div class="form-group">
                      <label for="" class="">Correo Electrónico</label>
                      <input type="email" name="email" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label for="" class="">Contraseña</label>
                      <input type="password" name="password" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <button class="btn btn-primary" type="submit">Entrar</button>
                  </div>
                  
                  <!--<p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>-->
              </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn btn-outline-primary btn-sm" data-dismiss="modal">Registrarse</button>
              <button type="button" class="btn btn btn-outline-secondary btn-sm">Olvide mi contraseña</button>
          </div>
        </div>
    </div>
  </div>