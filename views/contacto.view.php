    <?php require 'nav-bar.view.php'; ?>

    <main class="sec-contact py-5">
        <div class="content-contact container mx-auto">
            <div class="text-contact pb-3">
                <h3>Para más información</h3>
                <hr>
                <p class="my-4">Envía tus datos y nos pondremos en contacto contigo a la brevedad</p>
                <p>O bien comunicate al <span>55 55 70 59 39</span> en horario de 8:00 a.m a 4 p.m</p>
            </div>
            <form action="#" method="post" class="form-contact" id="form-contact" novalidate>
                <div class="container mx-auto">
                    <div class="group">
                        <input type="text" name="nombre" id="nombre" required="" autocomplete="off"><span class="barra"></span>
                        <label for="nombre" class="float-label">Nombre completo: <span class="text-danger">*</span></label>
                        <div id="error-nombre"></div>                       
                    </div>
                    <div class="group">
                        <input type="text" name="email" id="email" required="" autocomplete="off"><span class="barra"></span>
                        <label for="email" class="float-label">Correo electrónico: <span class="text-danger">*</span></label>
                        <div id="error-email"></div>
                    </div>
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
                    <div class="text-md-right">
                        <button type="submit" name="submit" class="btn btn-form-primary" id="btnForm">Enviar&nbsp;&nbsp;<i class="fas fa-caret-right"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <section class="sec-mac container py-4">
        <div class="text-map">
            <h3>Nos ubicamos en </h3>
            <hr>
        </div>
        <div class="row mx-auto">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15054.663685714198!2d-99.2383028!3d19.383613!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa6f7611bce0a3484!2sCOLEGIO%20JESUS%20ROMERO%20FLORES!5e0!3m2!1ses-419!2smx!4v1579163498719!5m2!1ses-419!2smx" width="1140" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="content-horario py-4">
            <div class="header-horario">
                <h3>Horario de atención</h3>
                <hr>
            </div>
            <p class="text-horario ml-3">Lunes a Viernes de 8:00 am a 3:30 pm</p>
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
  <script src="js/form-contact.js"></script>    
</body>

</html>