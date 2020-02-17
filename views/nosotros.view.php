<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Colegio Jesús Romero Flores</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php require 'nav-bar.view.php'; ?>

  <section class="img-back-header h-md-back-3 py-4">
    <div class="content-back-header container mx-auto">
      <h2>Historia</h2>
      <hr>
      <p class="text-back-header">
        El colegio fue fundado en 1988 con el objetivo de proporcionar una oferta
        educativa del más alto nivel con los recursos tecnológicos y humanos que
        permitan a nuestros alumnos continuar con su formación en las mejores
        instituciones del país y llegar a ser profesionistas brillantes y exitosos.
      </p>
    </div>
  </section>
  <section class="sec-mi-vi text-center">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 sec-mision py-4">
          <div class="sec-mi-vi-header pb-3">
            <h3>Misión</h3>
            <hr>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate
            praesentium non libero recusandae sed id expedita, ut asperiores aliquid?
            Nesciunt voluptas error quaerat ea veniam nisi modi, dolorum facilis nostrum?</p>
        </div>
        <div class="col-12 col-md-6 py-4">
          <div class="sec-mi-vi-header pb-3">
            <h3>Visión</h3>
            <hr>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate
            praesentium non libero recusandae sed id expedita, ut asperiores aliquid?
            Nesciunt voluptas error quaerat ea veniam nisi modi, dolorum facilis nostrum?</p>
        </div>
      </div>
    </div>
  </section>

  <main class="img-back py-4">
    <h2 class="text-center">Nuestro Equipo</h2>
    <div class="content-nosotros container">
      <div class="img-nosotros">
        <img src="<?php echo PATH ?>img/imgp-primaria.jpg" class="img-nosotros img-fluid" alt="Imagen del personal del kinder">
      </div>
      <div class="text-nosotros">
        <p>
          El Jardín de Niños Villa Infantil María Isabel se encuentra en un continuo
          proceso de mejora, tanto en sus instalaciones como en sus planes de estudio
          y mecánicas de trabajo, esto también incluye a padres de familia.
        </p>
      </div>
    </div>
    <div class="sec-admin container mx-auto pt-3 pt-md-5">
      <h3 class="text-center">Personal Administrativo</h3>
      <div class="row text-center pt-2">
        <div class="col-12 col-md-4 pb-4 pb-md-0">
          <img src="<?php echo PATH; ?>img\imgp-direc-tec.jpg" alt="Fotografía de personal administrativo">
          <h5>Lic. María Isabel Rincón</h5>
          <hr>
          <p> Directora General</p>
        </div>
        <div class="col-12 col-md-4 pb-4 pb-md-0">
          <img src="<?php echo PATH; ?>img\imgp-direc-tec.jpg" alt="Fotografía de personal administrativo">
          <h5>Dr. Eduardo Rincón Aguilar</h5>
          <hr>
          <p> Director Administrativo</p>
        </div>
        <div class="col-12 col-md-4">
          <img src="<?php echo PATH; ?>img\imgp-direc.jpg" alt="Fotografía de personal administrativo">
          <h5>Lic. Perla Susana Beltrán</h5>
          <hr>
          <p> Directora Técnica</p>
        </div>
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
      <button class="btn btn-outline-light" id="showFormOpinion">Dejar comentario o sugerencia ></button>
    </div>
  </section>
  <section class="sec-form-opinion img-back py-4">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form-opinion container" novalidate>
      <div class="container mx-auto">
        <div class="group">
          <input type="text" name="nombre" id="nombre" required="" autocomplete="off" value="<?php if (!$enviado && isset($nombre)) echo $nombre; ?>"><span class="barra"></span>
          <label for="">Nombre completo:</label>
          <?php if (!empty($error_nombre)) : ?>
            <small class="input-error"><?php echo $error_nombre; ?></small>
          <?php endif ?>
        </div>
        <div class="group">
          <input type="text" name="email" id="email" required="" autocomplete="off" value="<?php if (!$enviado && isset($email)) echo $email; ?>"><span class="barra"></span>
          <label for="">Correo electrónico:</label>
          <?php if (!empty($error_email)) : ?>
            <small class="input-error"><?php echo $error_email; ?></small>
          <?php endif ?>
        </div>
        <div class="group">
          <textarea name="" id="" rows="2" required></textarea><span class="barra"></span>
          <label for="">Mensaje:</label>
          <?php if (!empty($error_mensaje)) : ?>
            <small class="input-error"><?php echo $error_mensaje; ?></small>
          <?php endif ?>
        </div>

        <?php if (!empty($enviado)) : ?>
          <div class="alert-successful" id="content-alert">
            <p>Mensaje enviado correctamente &nbsp;&nbsp;&nbsp;<i class="fas fa-check"></i></p>
          </div>
        <?php endif ?>

        <div class="text-md-right">
          <button type="submit" class="btn btn-primary">Enviar comentario ></button>
        </div>
      </div>
    </form>
  </section>


  <?php require 'footer.view.php'; ?>

  <!--Archivos javascript para bootstrap -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/headroom.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>