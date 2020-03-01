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

  <section class="img-back-header h-md-back-2 py-4">
    <div class="content-back-header container mx-auto">
      <h2>Nuestros servicios</h2>
      <hr>
      <p class="text-back-header">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, et nam tenetur reiciendis minus nesciunt rem
        amet impedit nulla qui, fugiat earum perferendis iusto vitae.(definir).
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
        En el horario de 14:00 a 15:00 hrs ofrecemos:
      </p>
      <div class="accordion">
        <button class="accordion-item">Tareas dirigidas</button>
        <div class="desc-service">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus voluptatum, deserunt quam illo
            iste eum rem amet veniam voluptate? Tempore voluptatibus similique beatae voluptas, omnis eum in
          </p>
          <div class="img-service">
            <img src="<?php echo PATH; ?>img/imgs-ingles.jpg" alt="Imagen ilustrativa del servicio" class="img-fluid">
          </div>
        </div>
        <button class="accordion-item">Fránces para niños</button>
        <div class="desc-service">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus voluptatum, deserunt quam illo
            iste eum rem amet veniam voluptate? Tempore voluptatibus similique beatae voluptas, omnis eum in
          </p>
          <div class="img-service">
            <img src="<?php echo PATH; ?>img/imgs-frances.jpg" alt="Imagen ilustrativa del servicio" class="img-fluid">
          </div>
        </div>
        <button class="accordion-item">Danza Folklorica</button>
        <div class="desc-service">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus voluptatum, deserunt quam illo
            iste eum rem amet veniam voluptate? Tempore voluptatibus similique beatae voluptas, omnis eum in
          </p>
          <div class="img-service">
            <img src="<?php echo PATH; ?>img/imgs-danza.jpg" alt="Imagen ilustrativa del servicio" class="img-fluid">
          </div>
        </div>
        <button class="accordion-item">Ballet</button>
        <div class="desc-service">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus voluptatum, deserunt quam illo
            iste eum rem amet veniam voluptate? Tempore voluptatibus similique beatae voluptas, omnis eum in
          </p>
          <div class="img-service">
            <img src="<?php echo PATH; ?>img/imgs-danza.jpg" alt="Imagen ilustrativa del servicio" class="img-fluid">
          </div>
        </div>
        <button class="accordion-item">Lima Lama</button>
        <div class="desc-service">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus voluptatum, deserunt quam illo
            iste eum rem amet veniam voluptate? Tempore voluptatibus similique beatae voluptas, omnis eum in
          </p>
          <div class="img-service">
            <img src="<?php echo PATH; ?>img/imgs-taekwondo.jpg" alt="Imagen ilustrativa del servicio" class="img-fluid">
          </div>
        </div>
        <button class="accordion-item">Taekwondo</button>
        <div class="desc-service">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus voluptatum, deserunt quam illo
            iste eum rem amet veniam voluptate? Tempore voluptatibus similique beatae voluptas, omnis eum in
          </p>
          <div class="img-service">
            <img src="<?php echo PATH; ?>img/imgs-taekwondo.jpg" alt="Imagen ilustrativa del servicio" class="img-fluid">
          </div>
        </div>
        <button class="accordion-item">Zumba</button>
        <div class="desc-service">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus voluptatum, deserunt quam illo
            iste eum rem amet veniam voluptate? Tempore voluptatibus similique beatae voluptas, omnis eum in
          </p>
          <div class="img-service">
            <img src="<?php echo PATH; ?>img/imgs-zumba.jpg" alt="Imagen ilustrativa del servicio" class="img-fluid">
          </div>
        </div>
        <button class="accordion-item">Róbotica</button>
        <div class="desc-service">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus voluptatum, deserunt quam illo
            iste eum rem amet veniam voluptate? Tempore voluptatibus similique beatae voluptas, omnis eum in
          </p>
          <div class="img-service">
            <img src="<?php echo PATH; ?>img/imgs-zumba.jpg" alt="Imagen ilustrativa del servicio" class="img-fluid">
          </div>
        </div>
        <button class="accordion-item">Cultura General</button>
        <div class="desc-service">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus voluptatum, deserunt quam illo
            iste eum rem amet veniam voluptate? Tempore voluptatibus similique beatae voluptas, omnis eum in
          </p>
          <div class="img-service">
            <img src="<?php echo PATH; ?>img/imgs-zumba.jpg" alt="Imagen ilustrativa del servicio" class="img-fluid">
          </div>
        </div>
        <button class="accordion-item">Fránces para adultos</button>
        <div class="desc-service">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus voluptatum, deserunt quam illo
            iste eum rem amet veniam voluptate? Tempore voluptatibus similique beatae voluptas, omnis eum in
          </p>
          <div class="img-service">
            <img src="<?php echo PATH; ?>img/imgs-frances.jpg" alt="Imagen ilustrativa del servicio" class="img-fluid">
          </div>
        </div>
        <button class="accordion-item">Hebreo para adultos</button>
        <div class="desc-service">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus voluptatum, deserunt quam illo
            iste eum rem amet veniam voluptate? Tempore voluptatibus similique beatae voluptas, omnis eum in
          </p>
          <div class="img-service">
            <img src="<?php echo PATH; ?>img/imgs-frances.jpg" alt="Imagen ilustrativa del servicio" class="img-fluid">
          </div>
        </div>
      </div>  
    </div>
  </section>

  <section class="img-inscrip py-4 py-lg-5">
    <div class="container content-inscrip mx-auto">
      <h4 class="mb-3">¿Te interesa formar parte de la comunidad del Colegio Jesús Romero Flores?</h4>
      <h5>Inscríbete y se parte de nuestra comunidad</h5>
      <a href="<?php echo PATH; ?>inscripciones.php" class="btn btn-outline-light mt-4">Click aquí ></a>
    </div>
  </section>

  <section class="img-back py-4">
    <div class="content-service container mx-auto">
      <div class="row">
        <div class="col-12 col-md-8 offset-md-2 col-lg-7 offset-lg-0 col-xl-7 order-2 ">
          <img class="img-fluid pt-3 pt-lg-0" src="<?php echo PATH; ?>img/imgs-comida.jpg" alt="Foto del servicio de comida del preescolar">
        </div>
        <div class="col-12 col-lg-5 order-lg-2 py-xl-4">
          <h3>Comedor</h3>
          <p>
            El colegio JRF ofrece dos modalidades para consumir alimentos, una es a través de la cooperativa
            escolar donde se venden complementos a su lunch y la otra, a petición de los padres, se les
            proporciona comida completa en dos horarios: 10:30 am (Receso) y 2 pm (after School).
          </p>
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
  <script src="js/main.js"></script>
  <script>
    var acc = document.getElementsByClassName("accordion-item");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      });
    }
  </script>
</body>

</html>