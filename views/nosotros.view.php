  <?php require 'nav-bar.view.php'; ?>

  <section class="img-back-header">
    <div class="content-back-header container mx-auto">
      <h2>Historia</h2>
      <hr>
      <p class="text-back-header"><?php echo $init_msg['descripcion'];?></p>
    </div>
  </section>
  <section class="sec-mi-vi text-center">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 sec-mision p-4">
          <div class="sec-mi-vi-header pb-3">
            <h3>Misión</h3>
            <hr>
          </div>
          <p class="text-justify"><?php echo nl2br($mision_msg['descripcion']);?></p>
        </div>
        <div class="col-12 col-md-6 p-4">
          <div class="sec-mi-vi-header pb-3">
            <h3>Visión</h3>
            <hr>
          </div>
          <p class="text-justify"><?php echo nl2br($vision_msg['descripcion']);?></p>
        </div>
      </div>
    </div>
  </section>

  <main class="img-back py-4">
    <h2 class="text-center">Nuestro Equipo</h2>
    <div class="content-nosotros container">
      <div class="img-nosotros">
        <img src="<?php echo PATH ?>img/<?php echo $team_thumb['thumb'];?>" class="img-nosotros img-fluid" alt="Imagen del personal del kinder">
      </div>
      <div class="text-nosotros">
        <p><?php echo nl2br($team_msg['descripcion']);?></p>
      </div>
    </div>

    <div class="sec-admin container mx-auto pt-3 pt-md-5">
      <h3 class="text-center">Personal Administrativo</h3>
      <div class="row text-center pt-2">
        <?php foreach($personal as $persona):?>
          <div class="col-12 col-md-4 pb-4 pb-md-0">
            <img src="<?php echo PATH; ?>img/<?php echo $persona['thumb']?>" alt="Fotografía de personal administrativo">
            <h5><?php echo $persona['nombre'];?></h5>
            <hr>
            <p><?php echo $persona['cargo'];?></p>
          </div>  
        <?php endforeach;?>         
      </div>
    </div>
  </main>
  
  <section class="sec-opinion py-4">
    <div class="container">
      <p class="mb-4">
        En la búsqueda de mejorar su experiencia con nosotros al final de cada ciclo
        escolar se realiza una encuesta para manifestar sus observaciones y sugerencias,
        de igual forma esto se puede realizar por este medio.
      </p>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#formOpinion">Dejar comentario o sugerencia&nbsp;&nbsp;<i class="fas fa-caret-right"></i></button>

      <!-- Modal -->
      <div class="modal fade modal-form" id="formOpinion" tabindex="-1" role="dialog" aria-labelledby="modalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalCenterTitle">Dejanos un comentario ó sugerencia</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <form action="#" method="POST" class="form-opinion" id="form-opinion" novalidate>
                  <div class="group">
                    <input type="text" name="nombre" id="nombre" required="" autocomplete="off" value=""><span class="barra"></span>
                    <label for="nombre" class="float-label">Nombre completo: <span class="text-danger">*</span></label>
                    <div id="error-nombre"></div>
                  </div>
                  <div class="group">
                    <input type="text" name="email" id="email" required="" autocomplete="off" value=""><span class="barra"></span>
                    <label for="email" class="float-label">Correo electrónico: <span class="text-danger">*</span></label>
                    <div id="error-email"></div>
                  </div>
                  <div class="form-star">
                    <label for="" class="">Calificanos: <span class="text-danger">*</span></label>
                    <p class="clasificacion">
                      <!-- first star -->
                      <input id="radio1" class="input-star" type="radio" name="votacion" value="5">
                      <label for="radio1" class="label-star">&#9733;</label>
                      <!-- second star -->
                      <input id="radio2" class="input-star" type="radio" name="votacion" value="4">
                      <label for="radio2" class="label-star">&#9733;</label>
                      <!-- third star -->
                      <input id="radio3" class="input-star" type="radio" name="votacion" value="3">
                      <label for="radio3" class="label-star">&#9733;</label>
                      <!-- fourth star -->
                      <input id="radio4" class="input-star" type="radio" name="votacion" value="2">
                      <label for="radio4" class="label-star">&#9733;</label>
                      <!-- fifth star -->
                      <input id="radio5" class="input-star" type="radio" name="votacion" value="1">
                      <label for="radio5" class="label-star">&#9733;</label>
                    </p>
                  </div>
                  <div id="error-votacion"></div>
                  <div class="group">
                    <textarea name="mensaje" id="mensaje" rows="3" required="" autocomplete="off"></textarea><span class="barra"></span>
                    <label for="mensaje" class="float-label">Mensaje: <span class="text-danger">*</span></label>
                    <div id="error-mensaje"></div>
                  </div>
                  <div class="text-left">
                    <small class="text-secondary">* Todos los campos son obligatorios</small>
                  </div>
                  <div id="loaders">
                    <img id="spinner" src="img/spinner.gif">
                  </div>
                  <div class="btn-form-opinion">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar&nbsp;&nbsp;<i class="fas fa-times"></i></button>
                    <button type="submit" class="btn btn-form-primary" id="btnForm" name="submit" value="enviar">Enviar&nbsp;&nbsp;<i class="fas fa-caret-right"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- termina modal -->
    </div>
  </section>

  <?php require 'footer.view.php'; ?>

  <!--Archivos javascript para bootstrap -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/headroom.min.js"></script>
  
  <!-- Custom javascript files -->  
  <script src="js/nav-bar.js"></script>
  <script src="js/form-opinion.js"></script>
</body>
</html>