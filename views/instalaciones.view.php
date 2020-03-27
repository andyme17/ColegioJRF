  <?php require 'nav-bar.view.php'; ?>

  <section class="img-back-header">
    <div class="content-back-header container mx-auto">
      <h2>Instalaciones</h2>
      <hr>
      <p class="text-back-header">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, et nam tenetur reiciendis minus nesciunt rem
        amet impedit nulla qui, fugiat earum perferendis iusto vitae.(definir).
      </p>
    </div>
  </section>
  <main class="img-back py-4">
    <div class="sec-gallery container">
      <ul class="pgwSlideshow">
        <li>
          <img src="<?php echo PATH; ?>img/img-instalacion1.jpg">
        </li>
        <li>
          <img src="<?php echo PATH; ?>img/img-instalacion2.jpg">
        </li>
        <li>
          <img src="<?php echo PATH; ?>img/img-instalacion3.jpg">
        </li>
        <li>
          <img src="<?php echo PATH; ?>img/img-instalacion4.jpg">
        </li>
        <li>
          <img src="<?php echo PATH; ?>img/img-instalacion5.jpg">
        </li>
        <li>
          <img src="<?php echo PATH; ?>img/img-instalacion6.jpg">
        </li>
        <li>
          <img src="<?php echo PATH; ?>img/img-instalacion7.jpg">
        </li>
      </ul>
    </div>
  </main>

  <section class="sec-contacto1 py-4">
    <div class="content-contacto container">
      <div class="row">
        <div class="col-12 offset-md-1 col-md-10">
          <div class="header-contacto">
            <p class="mb-3 mb-md-0">¿Quieres saber más acerca de nuestros servicios?</p>
            <p>¡Acércate a nosotros!</p>
          </div>
          <p class="mt-3">
            Para ofrecerte más informes, llena el siguiente formulario y
            un asesor educativo se pondrá en contacto contigo a la brevedad.
          </p>
          <a href="<?php echo PATH; ?>contacto.php" class="btn btn-outline-light mt-4">Contáctanos ></a>
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
  <script src="js/pgwslideshow.min.js"></script>

  <!-- Custom javascript files -->
  <script src="js/nav-bar.js"></script>
  <script>
    /** Slide gallery script **/
    $(document).ready(function() {
      var pgwSlideshow = $('.pgwSlideshow').pgwSlideshow(); //puglin is initialized for gallery

      pgwSlideshow.reload({ //configuring the plugin
        autoSlide: false,
        maxHeight: 560
      });
    });
  </script>
</body>
</html>