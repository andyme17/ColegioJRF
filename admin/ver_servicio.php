<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config);

    if (!$conexion) {
        header('Location: error.php');
    }

    $id_servicio = limpiarDatos($_GET['id']);
    
    if(!$id_servicio){
        header('Location: '.PATH.'admin/servicios_afterschool.php');
    }
 
    $servicio = obt_item_x_id($conexion,'servicio_after',$id_servicio);

    if(!$servicio){
        header('Location: '.PATH.'admin/servicios_afterschool.php');
    }

    $servicio = $servicio[0];

    require '../views/ver_servicio.view.php';    
    