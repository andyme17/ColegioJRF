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

  <section class="banner">
    <div class="banner-content">
      <p class="header-banner">COLEGIO JESÚS ROMERO FLORES</p>
      <p class="sub-header-banner">Forjando triunfadores desde 1988</p>

    </div>
  </section>

  <main class="sec-bienvenida container my-4">
    <div class="content-bienvenida">
      <h2>Bienvenid@s</h2>
      <hr>
      <p>
        El jardín de niños Villa Infantil María Isabel le da las más cordial bienvenida a sus pequeños.
        Ponemos a su disposición los servicios para el adecuado desarrollo de sus hijos en diversas
        áreas como la convivencia, idiomas y valores para que sus niños tengan un desarrollo sano y
        obtengan las habilidades que les permitirán continuar con su proceso de maduración.</p>
    </div>
    <div class="img-bienvenida pt-3 pt-lg-0 ml-lg-5">
      <img src="<?php echo PATH; ?>img/img-mascota.jpg" alt="Logotipo de la mascota de la escuela">
    </div>
  </main>

  <section class="img-oferta py-4 py-md-5">
    <div class="container text-oferta">
      <h4>Conoce nuestra oferta educativa así como los diferentes servicios con los que contamos</h4>
      <a href="<?php echo PATH; ?>servicios.php" class="btn btn-outline-light mt-4 mt-md-0">Ver más ></a>
    </div>
  </section>

  <section class="img-back py-3 py-lg-4">
    <div class="row container mx-auto">
      <div class="col-12 col-md-5 col-lg-6 text-primaria">
        <p class="pb-2">
          Anexo al Colegio Jesús Romero Flores contamos con el <span>Jardín de Niños María Isabel</span>
          que ofrece una educación de calidad a los pequeños de <span>nivel preescolar.</span>
        </p>
        <a href="#" class="btn btn-primary mt-3 btn-sec-1">Visítanos > </a>
      </div>
      <div class="col-12 col-md-7 col-lg-6 img-primaria">
        <img src="<?php echo PATH; ?>img/img-kinder.jpg" class="img-fluid" alt="Fotografía de la primaria">
        <a href="#" class="btn btn-primary mt-2 btn-sec-2">Visítanos > </a>
      </div>
    </div>
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