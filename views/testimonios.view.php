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
                    <h3 class="my-4 my-md-5 mt-xl-0 text-center">Testimonios</h3>
                    <div class="row mb-4">
                        <div class="col-12 col-md-3 col-xl-2">
                            <a href="<?php echo PATH; ?>admin/nuevo_testimonio.php" id="btnAgregar" class="btn btn-success">
                                <i class="fas fa-plus-circle pr-2"></i><span>Agregar</span>
                            </a>
                        </div>
                        <div class="col-12 col-md-9 col-xl-10">
                            <p class="text-center text-md-left mt-3 mt-md-0 text-danger">Recuerda que sólo se permite publicar <b>3 testimonios</b>,
                                para añadir un nuevo testimonio debes eliminar alguno de los existentes.</p>
                        </div>
                    </div>
                    <div class="row" id="content-card">
                        <?php foreach ($testimonios as $testimonio) : ?>
                            <div class="col-12 col-md-6 col-xl-4 pb-3">
                                <div class="card text-center shadow">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5 class="card-title"><?php echo $testimonio['nombre']; ?></h5>
                                            <hr>
                                        </div>
                                        <blockquote class="card-text"><i class="fas fa-quote-left"></i>&nbsp;&nbsp;<?php echo $testimonio['mensaje']; ?>&nbsp;&nbsp;<i class="fas fa-quote-right"></i></blockquote>
                                        <div class="calificacion text-center">
                                            <?php for ($i = 0; $i < $testimonio['votacion']; $i++) : ?>
                                                <i class="fas fa-star"></i>
                                            <?php endfor; ?>
                                        </div>
                                        <div class="btn-opc-card">
                                            <a class="btn btn-primary mr-1" href="<?php echo PATH; ?>admin/editar_testimonio.php?id=<?php echo $testimonio['id']; ?>"><i class="fas fa-edit"></i> Editar</a>
                                            <a class="btn btn-danger" href="<?php echo PATH; ?>admin/eliminar_testimonio.php?id=<?php echo $testimonio['id']; ?>"><i class="fas fa-trash-alt"></i> Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        <?php endforeach; ?>
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
        var contenedor = document.getElementById('content-card');

        if(contenedor.childElementCount >= 3){
            $('#btnAgregar').addClass('disabled');            
        }else{
            $('#btnAgregar').removeClass('disabled');           
        } 
    </script>
</body>

</html>