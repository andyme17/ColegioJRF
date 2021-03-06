<?php session_start();

    require 'config.php';
    require '../functions.php';

    comprobarSession();

    $conexion = conexion($bd_config);

    if(!$conexion){
        header('Location: error.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $servicio = limpiarDatos($_POST['servicio']);
        $descripcion = limpiarDatos($_POST['descripcion']);
        $thumb = $_FILES['thumb']['tmp_name'];

        $file_uploaded = '../'.$config_gestor['carpeta_img'].$_FILES['thumb']['name'];
        move_uploaded_file($thumb,$file_uploaded);

        $statement = $conexion->prepare(
            'INSERT INTO servicio_after (id,nombre,descripcion,thumb)
            VALUES (null,:nombre,:descripcion,:thumb)'
        );

        $statement->execute(array(
            ':nombre' => $servicio,
            ':descripcion' => $descripcion,
            ':thumb' => $_FILES['thumb']['name']
        ));

        header('Location:'.PATH.'admin/servicios_afterschool.php');         
    }

    require '../views/agregar_servicio.view.php';