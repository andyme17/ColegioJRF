<?php session_start();

    require 'config.php';
    require '../functions.php';
    
    comprobarSession();

    $conexion = conexion($bd_config);

    if(!$conexion){
        header('Location: error.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $seccion = $_POST['seccion'];
        $mensaje = limpiarDatos($_POST['mensaje']);
     
        /*modifying text*/
        update_content_text($conexion,$mensaje,$seccion);

        header('Location:'.PATH.'admin/'); 
    }else{
        /*getting message*/
        $mision_msg = obt_contenido($conexion,'contenido_texto','sec-mision');

        if(!$mision_msg){
            header('Location: error.php');
        } 
        
        $mision_msg = $mision_msg[0];
    }

    require '../views/editar_mision.view.php';
