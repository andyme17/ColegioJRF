  <?php require 'nav-bar.view.php'; ?>

  <section class="img-back-header">
    <div class="content-back-header container mx-auto">
      <h2>Nuestros servicios</h2>
      <hr>
      <p class="text-back-header">
        Se ofrece el servicio educativo a nivel primaria con horario de 8 a.m. a 2 p.m. cubriendo los planes y
        programas de la SEP, así como actividades adiciónales para lograr una formación integral de los niños
        y así obtengan un estándar elevado que les permita acceder a una educación del mas alto nivel.
        Opcionalmente se ofrece el servicio afterschool de 2 pm a 4 pm.
      </p>
    </div>
  </section>

  <main class="py-4">
    <div class="container text-center">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center">Modelo Educativo</h2>
          <p class="pt-3 text-horario">En el horario de 08:00 a 14:00 hrs, ofrecemos: </p>
        </div>
      </div>
      <div class="row pt-4 content-model">
        <div class="opc-model col-12 col-md-4 pb-4">
          <img src="<?php echo PATH; ?>img/img1-service.png" alt="Imagen ilustrativa del servicio" class="img-fluid img-serv">
          <p>Programa establecido por la SEP</p>
        </div>
        <div class="opc-model col-12 col-md-4 pb-4">
          <img src="<?php echo PATH; ?>img/img2-service.jpg" alt="Imagen ilustrativa del servicio" class="img-fluid img-serv rounded-circle">
          <p>Inglés</p>
        </div>
        <div class="opc-model col-12 col-md-4 pb-4">
          <img src="<?php echo PATH; ?>img/img3-service.jpg" alt="Imagen ilustrativa del servicio" class="img-fluid img-serv rounded-circle">
          <p>Francés</p>
        </div>
        <div class="opc-model col-12 col-md-4 pb-4">
          <img src="<?php echo PATH; ?>img/img4-service.jpg" alt="Imagen ilustrativa del servicio" class="img-fluid img-serv rounded-circle">
          <p>Educación Física</p>
        </div>
        <div class="opc-model col-12 col-md-4 pb-4">
          <img src="<?php echo PATH; ?>img/img5-service.jpg" alt="Imagen ilustrativa del servicio" class="img-fluid img-serv rounded-circle">
          <p>Educación Musical</p>
        </div>
        <div class="opc-model col-12 col-md-4">
          <img src="<?php echo PATH; ?>img/img6-service.jpg" alt="Imagen ilustrativa del servicio" class="img-fluid img-serv rounded-circle">
          <p class="pt-1">Computación</p>
        </div>
      </div>
    </div>
  </main>

  <section class="sec-after py-4">
    <div class="container">
      <h2 class="text-center">Clases Afterschool</h2>
      <p class="py-3 text-horario">
        En el horario de 14:00 a 16:00 hrs ofrecemos:
      </p>
      <div class="accordion">
        <?php foreach ($after_service as $service) : ?>
          <button class="accordion-item"><?php echo $service['nombre']; ?></button>
          <div class="desc-service">
            <div class="my-3">
              <p><?php echo nl2br($service['descripcion']); ?></p>
              <div class="img-service">
                <img src="<?php echo PATH; ?>img/<?php echo $service['thumb']; ?>" alt="Imagen ilustrativa del servicio <?php echo $service['nombre']; ?>" class="img-fluid">
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="img-inscrip py-4 py-lg-5">
    <div class="container content-inscrip mx-auto">
      <h4 class="mb-3">¿Te interesa formar parte de la comunidad del Colegio Jesús Romero Flores?</h4>
      <h5>Inscríbete y se parte de nuestra comunidad</h5>
      <a href="<?php echo PATH; ?>inscripciones.php" class="btn btn-outline-light mt-4">Click aquí&nbsp;&nbsp;<i class="fas fa-caret-right"></i></a>
    </div>
  </section>

  <section class="img-back py-4">
    <div class="content-service container mx-auto">
      <div class="row">
        <div class="col-12 col-md-8 offset-md-2 col-lg-7 offset-lg-0 col-xl-7 order-2 ">
          <img class="img-fluid pt-3 pt-lg-0" src="<?php echo PATH; ?>img/<?php echo $img_food_service['thumb']; ?>" alt="Foto del servicio de comida del preescolar">
        </div>
        <div class="col-12 col-lg-5 order-lg-2 py-xl-4 text-service">
          <h3>Comedor</h3>
          <p><?php echo $food_service['descripcion']; ?></p>
        </div>
      </div>
    </div>
  </section>

  <section class="sec-contacto1 py-4">
    <div class="content-contacto container">
      <div class="row">
        <div class="col-12 offset-md-1 col-md-10">
          <div class="header-contacto">
            <p class="mb-3 mb-md-0">¿Deseas visitarnos personalmente?</p>
            <p>¡ No esperes más !</p>
          </div>
          <p class="mt-3">
            Para ofrecerte más informes, llena el siguiente formulario y
            un asesor educativo se pondrá en contacto contigo a la brevedad.
          </p>
          <a href="<?php echo PATH; ?>contacto.php" class="btn btn-outline-light mt-4">Contáctanos&nbsp;&nbsp;<i class="fas fa-caret-right"></i></a>
        </div>
      </div>
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
  <script src="js/accordion.js"></script>
  </body>

  </html>