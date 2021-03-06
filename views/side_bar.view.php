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
    <link rel="stylesheet" href="../css/styles.min.css">
</head>

<body id="login">
    <div class="wrapper">
        <nav id="sidebar">
            <div id="dismiss">
                <p><i class="fas fa-arrow-left pr-1"></i> Ocultar</p>
            </div>

            <div class="sidebar-header">
                <i class="fas fa-user-circle"></i>
                <p><?php echo $_SESSION['admin']; ?></p>
            </div>

            <ul>
                <li class="">
                    <a href="<?php echo PATH; ?>admin"><i class="fas fa-home"></i> Inicio</i></a>
                </li>
                <p>Páginas</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="pl-2 fas fa-file-invoice"></i> Index</a>
                    <ul class="collapse" id="homeSubmenu">
                        <li>
                            <a href="<?php echo PATH; ?>admin/editar_banner.php">Editar banner de inicio</a>
                        </li>
                        <li>
                            <a href="<?php echo PATH; ?>admin/editar_mensaje_bienvenida.php">Mensaje de bienvenida</a>
                        </li>
                        <li>
                            <a href="<?php echo PATH; ?>admin/avisos.php">Avisos</a>
                        </li>
                        <li>
                            <a href="<?php echo PATH; ?>admin/testimonios.php">Testimonios</a>
                        </li>
                        <li>
                            <a href="<?php echo PATH; ?>admin/eventos.php">Eventos</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-users"></i> Nosotros</a>
                    <ul class="collapse" id="pageSubmenu">
                        <li>
                            <a href="<?php echo PATH; ?>admin/editar_mensaje_historia.php">Mensaje de Historia</a>
                        </li>
                        <li>
                            <a href="<?php echo PATH; ?>admin/editar_mision.php">Misión</a>
                        </li>
                        <li>
                            <a href="<?php echo PATH; ?>admin/editar_vision.php">Visión</a>
                        </li>
                        <li>
                            <a href="<?php echo PATH; ?>admin/editar_mensaje_equipo.php">Nuestro equipo</a>
                        </li>
                        <li>
                            <a href="<?php echo PATH; ?>admin/personal_admin.php">Personal Administrativo</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageServicios" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-tasks"></i> Servicios</a>
                    <ul class="collapse" id="pageServicios">
                        <li>
                            <a href="<?php echo PATH; ?>admin/servicios_afterschool.php">Servicios Afterschool</a>
                        </li>
                        <li>
                            <a href="<?php echo PATH; ?>admin/editar_servicio_comida.php">Servicio de comida</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo PATH; ?>admin/instalaciones.php"><i class="fas fa-school"></i> Instalaciones</a>
                </li>
                <li class="cerrar">
                    <a href="<?php echo PATH; ?>cerrar.php">Cerrar sesión <i class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul>
        </nav>

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
