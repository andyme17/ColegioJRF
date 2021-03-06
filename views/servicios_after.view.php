      <?php require 'side_bar.view.php'; ?>
        <main class="container">
          <h3 class="my-3 mt-xl-0 text-center">Servicios</h3>
          <a href="<?php echo PATH; ?>admin/agregar_servicio.php" class="btn btn-success mb-4">
            <i class="fas fa-plus-circle pr-2"></i><span>Agregar servicio</span>
          </a>
          <div class="row">
            <?php foreach ($after_service as $servicio) : ?>
              <div class="col-12 col-md-6 mb-2">
                <div class="cont-item shadow-lg">
                  <div class="container">
                    <h5><?php echo $servicio['id'] . '.- ' . $servicio['nombre']; ?></h5>
                    <div class="btn-opc-card">
                      <a class="btn btn-info mr-2" href="<?php echo PATH; ?>admin/ver_servicio.php?id=<?php echo $servicio['id']; ?>"><i class="fas fa-eye"></i> Ver</a>
                      <a class="btn btn-primary mr-2" href="<?php echo PATH; ?>admin/editar_servicio.php?id=<?php echo $servicio['id']; ?>"><i class="fas fa-edit"></i> Editar</a>
                      <a class="btn btn-danger" href="<?php echo PATH; ?>admin/eliminar_servicio.php?id=<?php echo $servicio['id']; ?>"><i class="fas fa-trash-alt"></i> Eliminar</a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </main>

        <section class="container paginacion">
          <?php $numero_paginas = num_pag($config_gestor['items_x_pag'], $conexion); ?>
          <?php if ($numero_paginas > 1) : ?>
            <ul>
              <?php if (pagina_actual() === 1) : ?>
                <li class="disabled"><i class="fas fa-angle-double-left"></i></li>
              <?php else : ?>
                <li><a href="servicios_afterschool.php?p=<?php echo pagina_actual() - 1; ?>"><i class="fas fa-angle-double-left"></i></a></li>
              <?php endif; ?>

              <?php for ($i = 1; $i <= $numero_paginas; $i++) : ?>
                <?php if (pagina_actual() === $i) : ?>
                  <li class="active"><?php echo $i; ?></li>
                <?php else : ?>
                  <li><a href="servicios_afterschool.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endif; ?>
              <?php endfor; ?>
              <?php if (pagina_actual() == $numero_paginas) : ?>
                <li class="disabled"><i class="fas fa-angle-double-right"></i></li>
              <?php else : ?>
                <li><a href="servicios_afterschool.php?p=<?php echo pagina_actual() + 1; ?>"><i class="fas fa-angle-double-right"></i></a></li>
              <?php endif; ?>
            </ul>
          <?php endif; ?>
        </section>
      </div>
    </div>
  </div>

  <!-- JavaScript files for Bootstrap 4 -->
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/headroom.min.js"></script>
  <script src="../js/side-bar.js"></script>
</body>

</html>