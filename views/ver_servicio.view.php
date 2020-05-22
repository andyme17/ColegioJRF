            <?php require 'side_bar.view.php'; ?>
                <main class="container">
                    <h3 class="mt-3 mt-xl-0 text-center">Servicio</h3>
                    <div class="row">
                        <div class="col-12 mt-4">
                            <button type="button" class="btn btn-secondary mb-3 mb-md-4" id="btnBack"><i class="fas fa-caret-left"></i>&nbsp;&nbsp;Regresar</button>
                            <div class="cont-item shadow-lg p-4">
                                <h5 class="mb-3"><?php echo $servicio['id'] . '.- ' . $servicio['nombre']; ?></h5>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 text-center">
                                            <img src="<?php echo PATH; ?>img/<?php echo $servicio['thumb']; ?>" class="img-fluid">
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <p><?php echo $servicio['descripcion']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- JavaScript files for Bootstrap 4 -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/headroom.min.js"></script>
    <script src="../js/side-bar.js"></script>
    <script>
        document.getElementById("btnBack").addEventListener('click', function() {
            location.href = "servicios_afterschool.php";
        });
    </script>
</body>

</html>