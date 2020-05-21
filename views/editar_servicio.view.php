<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="google-site-verification" content="pRAaZEZTeBB2efX9BPACaOCUQlcXgbfvEuk9fiuXyCk">
  <title>Gestor de contenido JRF</title>
  <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/pgwslideshow.min.css">
  <link rel="stylesheet" href="../css/all.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body id="login">
    <div class="wrapper">
        <?php require 'side_bar.view.php'; ?>
        <div id="content">
            <div class="content-1">
                <div class="cont-h">
                    <button type="button" id="sidebarCollapse" class="btn btn-info btn-side-bar">
                        <i class="fas fa-bars pr-1"></i>
                        <span>Menú</span>
                    </button>
                    <div class="img-init-2">
                        <img src="<?php echo PATH; ?>img/escudoJRF.png" class="img-fluid">
                    </div>
                </div>
                <main class="container">
                    <div class="row">
                        <div class="col-12 offset-md-1 col-md-10">
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data" class="shadow mb-5" id="form-gestor" novalidate>
                                <h3 class="mt-1 mb-4 text-center">Editar Servicio</h3>
                                <input type="hidden" name="id" value="<?php echo $servicio['id'];?>">
                                <div class="group pb-2">
                                    <input type="text" name="servicio" id="servicio" autocomplete="off" value="<?php echo $servicio['nombre'];?>" required><span class="barra"></span>
                                    <label for="servicio" class="float-label">Servicio: <span class="text-danger">*</span></label>
                                    <div id="error-servicio"></div>
                                </div>
                                <div class="group pt-3 pt-md-4">
                                    <textarea name="descripcion" id="descripcion" rows="4" required="" autocomplete="off"><?php echo $servicio['descripcion'];?></textarea><span class="barra"></span>
                                    <label for="descripcion" class="float-label">Descripción: <span class="text-danger">*</span></label>
                                    <div id="error-descrip"></div>
                                </div>
                                <div class="form-group pl-2">
                                    <label for="thumb">Imagen del servicio: <span class="text-danger">*</span></label>
                                    <input type="file" name="thumb" class="form-control-file" id="thumb" accept=".jpeg,.jpg" data-html="true" data-toggle="tooltip" data-placement="top" title="Formato válido:  <b>jpg / jpeg</b> Tamaño:  <b>menor a 250 KB</b>" onchange="validaImagen(this);">
                                    <input type="hidden" name="thumb-guardada" value="<?php echo $servicio['thumb'];?>">
                                    <div id="error-thumb"></div>
                                </div>                                
                                <div class="text-left mt-3">
                                    <small class="text-secondary">* Todos los campos son obligatorios</small>
                                </div>
                                <div class="btn-opc">
                                    <input type="hidden" id="action" value="edit">
                                    <button type="button" class="btn btn-secondary mr-2" id="btnCloseForm">Cancelar&nbsp;&nbsp;<i class="fas fa-times"></i></button>
                                    <button type="submit" name="submit" class="btn btn-primary" id="btnForm">Editar&nbsp;&nbsp;<i class="fas fa-caret-right"></i></button>
                                </div>
                            </form>
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
  
    <!-- Custom javascript files -->
    <script src="../js/form-servicio.js"></script>
    <script>
        $('#thumb').tooltip('show');
    </script>
</body>

</html>