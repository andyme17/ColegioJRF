<?php

require 'admin/config.php';
require __DIR__ . '/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$enviado = '';
$error_grado = '';
$error_apellido1 = "";
$error_apellido2 = "";
$error_nombre1 = '';
$error_edad1 = '';
$error_curp = '';
$error_genero = '';
$error_lugar = '';
$error_religion = '';
$error_tipo_s = '';
$error_calle1 = '';
$error_num1 = '';
$error_num2 = '';
$error_colonia1 = '';
$error_alcaldia1 = '';
$error_entidad1 = '';
$error_cp1 = '';
$error_esc1 = '';
$error_esc2 = '';
$error_apellido3 = "";
$error_apellido4 = "";
$error_nombre2 = '';
$error_edad2 = '';
$error_ocupacion = '';
$error_estudio = '';
$error_calle2 = '';
$error_num3 = '';
$error_num4 = '';
$error_colonia2 = '';
$error_alcaldia2 = '';
$error_entidad2 = '';
$error_cp2 = '';
$error_tel1 = '';
$error_tel2 = '';
$error_tel3 = '';
$error_email = '';

function validarText($dato)
{
    $dato = trim($dato);
    $dato = filter_var(($dato), FILTER_SANITIZE_STRING);
    return $dato;
}

function validarNum($dato)
{
    $dato = trim($dato);
    $dato = htmlspecialchars($dato);
    $dato = stripslashes($dato);
    return $dato;
}

if (isset($_POST['submit'])) {

    $grado =             !empty($_POST['grado'])           ? $_POST['grado']            : NULL;
    $ap_pat_alu =        !empty($_POST['ap-pat-alu'])      ? $_POST['ap-pat-alu']       : NULL;
    $ap_mat_alu =        !empty($_POST['ap-mat-alu'])      ? $_POST['ap-mat-alu']       : NULL;
    $nombre_alu =        !empty($_POST['nombre-alu'])      ? $_POST['nombre-alu']       : NULL;
    $edad_alu =          !empty($_POST['edad-alu'])        ? $_POST['edad-alu']         : NULL;
    $curp =              !empty($_POST['curp'])            ? $_POST['curp']             : NULL;
    $genero =            !empty($_POST['genero'])          ? $_POST['genero']           : NULL;
    $lugar_nac =         !empty($_POST['lugar-nac'])       ? $_POST['lugar-nac']        : NULL;
    $tipo_s =            !empty($_POST['tipo-s'])          ? $_POST['tipo-s']           : NULL;
    $religion =          !empty($_POST['religion'])        ? $_POST['religion']         : NULL;
    $calle_alu =         !empty($_POST['calle-alu'])       ? $_POST['calle-alu']        : NULL;
    $num_int_alu =       !empty($_POST['num-int-alu'])     ? $_POST['num-int-alu']      : NULL;
    $num_ext_alu =       !empty($_POST['num-ext-alu'])     ? $_POST['num-ext-alu']      : NULL;
    $colonia_alu =       !empty($_POST['colonia-alu'])     ? $_POST['colonia-alu']      : NULL;
    $alcaldia_alu =      !empty($_POST['alcaldia-alu'])    ? $_POST['alcaldia-alu']     : NULL;
    $entidad_alu =       !empty($_POST['entidad-alu'])     ? $_POST['entidad-alu']      : NULL;
    $cp_alu =            !empty($_POST['cp-alu'])          ? $_POST['cp-alu']           : NULL;
    $esc_proc =          !empty($_POST['esc-proc'])        ? $_POST['esc-proc']         : NULL;
    $esc_procedencia =   !empty($_POST['esc-procedencia']) ? $_POST['esc-procedencia']  : NULL;
    $ap_pat_tutor =      !empty($_POST['ap-pat-tutor'])    ? $_POST['ap-pat-tutor']     : NULL;
    $ap_mat_tutor =      !empty($_POST['ap-mat-tutor'])    ? $_POST['ap-mat-tutor']     : NULL;
    $nombre_tutor =      !empty($_POST['nombre-tutor'])    ? $_POST['nombre-tutor']     : NULL;
    $edad_tutor =        !empty($_POST['edad-tutor'])      ? $_POST['edad-tutor']       : NULL;
    $grado_estudio =     !empty($_POST['grado-estudio'])   ? $_POST['grado-estudio']    : NULL;
    $ocupacion =         !empty($_POST['ocupacion'])       ? $_POST['ocupacion']        : NULL;
    $calle_tutor =       !empty($_POST['calle-tutor'])     ? $_POST['calle-tutor']      : NULL;
    $num_int_tutor =     !empty($_POST['num-int-tutor'])   ? $_POST['num-int-tutor']    : NULL;
    $num_ext_tutor =     !empty($_POST['num-ext-tutor'])   ? $_POST['num-ext-tutor']    : NULL;
    $colonia_tutor =     !empty($_POST['colonia-tutor'])   ? $_POST['colonia-tutor']    : NULL;
    $alcaldia_tutor =    !empty($_POST['alcaldia-tutor'])  ? $_POST['alcaldia-tutor']   : NULL;
    $entidad_tutor =     !empty($_POST['entidad-tutor'])   ? $_POST['entidad-tutor']    : NULL;
    $cp_tutor =          !empty($_POST['cp-tutor'])        ? $_POST['cp-tutor']         : NULL;
    $tel_fijo =          !empty($_POST['tel-fijo'])        ? $_POST['tel-fijo']         : NULL;
    $tel_cel =           !empty($_POST['tel-cel'])         ? $_POST['tel-cel']          : NULL;
    $tel_ofi =           !empty($_POST['tel-ofi'])         ? $_POST['tel-ofi']          : NULL;
    $email_tutor =       !empty($_POST['email-tutor'])     ? $_POST['email-tutor']      : NULL; 

    if (!$grado) {
        $error_grado = 'Selecciona una opción</br>';
    }

    if (!$ap_pat_alu) {
        $error_apellido1 = 'Ingresa un apellido.</br>';
    } else {
        $ap_pat_alu = validarText($ap_pat_alu);
    }

    if (!$ap_mat_alu) {
        $error_apellido2 = 'Ingresa un apellido.</br>';
    } else {
        $ap_mat_alu = validarText($ap_mat_alu);
    }

    if (!$nombre_alu) {
        $error_nombre1 = 'Ingresa un nombre.</br>';
    } else {
        $nombre_alu = validarText($nombre_alu);
    }

    if (!$edad_alu) {
        $error_edad1 = 'Ingresa una edad.</br>';
    } else if (!preg_match("/^[0-9]+$/", $edad_alu) || strlen($edad_alu) > 2) {
        $error_edad1 = 'Ingresa una edad válida';
    } else {
        $edad_alu = validarNum($edad_alu);
    }

    if (!$curp) {
        $error_curp = 'Ingresa el curp.</br>';
    } else if (strlen($curp) <= 17 || strlen($curp) >= 19) {
        $error_curp = 'El curp debe tener 18 caracteres.</br>';
    } else {
        $curp = validarText($curp);
    }

    if (!$genero) {
        $error_genero = 'Selecciona una opción</br>';
    }

    if (!$lugar_nac) {
        $error_lugar = 'Selecciona un lugar de nacimiento</br>';
    }

    if (!$tipo_s) {
        $error_tipo_s = 'Ingresa un tipo de sangre.</br>';
    } else {
        $tipo_s = validarText($tipo_s);
    }

    if (!$religion) {
        $error_religion = 'Ingresa una religión o ingresa ninguna .</br>';
    } else {
        $religion = validarText($religion);
    }

    if (!$calle_alu) {
        $error_calle1 = 'Ingresa una calle.</br>';
    } else {
        $calle_alu = validarText($calle_alu);
    }

    if (!$num_int_alu) {
        $error_num1 = 'Ingresa un dato o S/N.</br>';
    } else {
        $num_int_alu = validarText($num_int_alu);
    }

    if (!$num_ext_alu) {
        $error_num2 = 'Ingresa un dato.</br>';
    } else {
        $num_ext_alu = validarText($num_ext_alu);
    }

    if (!$colonia_alu) {
        $error_colonia1 = 'Ingresa una colonia.</br>';
    } else {
        $colonia_alu = validarText($colonia_alu);
    }

    if (!$alcaldia_alu) {
        $error_alcaldia1 = 'Ingresa una alcaldía.</br>';
    } else {
        $alcaldia_alu = validarText($alcaldia_alu);
    }

    if (!$entidad_alu) {
        $error_entidad1 = 'Ingresa una entidad federativa.</br>';
    } else {
        $entidad_alu = validarText($entidad_alu);
    }

    if (!$cp_alu) {
        $error_cp1 = 'Ingresa un código postal.</br>';
    } else if (!preg_match("/^[0-9]+$/", $cp_alu) || strlen($cp_alu) > 5 || strlen($cp_alu) < 5) {
        $error_cp1 = 'Ingresa una código postal válido.';
    } else {
        $cp_alu = validarNum($cp_alu);
    }

    if (!$esc_proc) {
        $error_esc1 = 'Selecciona una opción</br>';
    }/* else if($esc_proc == 'no' ){
            $esc_procedencia == 'ninguna';
        }else if($esc_proc == 'si' && !$esc_procedencia){
            $error_esc2 = 'Ingresa el nombre de la escuela';
        }else{
            $esc_procedencia = validarText($esc_procedencia);
        } */

    if (!$ap_pat_tutor) {
        $error_apellido3 = 'Ingresa un apellido.</br>';
    } else {
        $ap_pat_tutor = validarText($ap_pat_tutor);
    }

    if (!$ap_mat_tutor) {
        $error_apellido4 = 'Ingresa un apellido.</br>';
    } else {
        $ap_mat_tutor = validarText($ap_mat_tutor);
    }

    if (!$nombre_tutor) {
        $error_nombre2 = 'Ingresa un nombre.</br>';
    } else {
        $nombre_tutor = validarText($nombre_tutor);
    }

    if (!$edad_tutor) {
        $error_edad2 = 'Ingresa una edad.</br>';
    } else if (!preg_match("/^[0-9]+$/", $edad_tutor) || strlen($edad_tutor) > 2) {
        $error_edad2 = 'Ingresa una edad válida';
    } else {
        $edad_tutor = validarNum($edad_tutor);
    }

    if (!$grado_estudio) {
        $error_estudio = 'Selecciona un grado de estudios.</br>';
    }

    if (!$ocupacion) {
        $error_ocupacion = 'Ingresa una ocupación.</br>';
    } else {
        $ocupacion = validarText($ocupacion);
    }

    if (!$calle_tutor) {
        $error_calle2 = 'Ingresa una calle.</br>';
    } else {
        $calle_tutor = validarText($calle_tutor);
    }

    if (!$num_int_tutor) {
        $error_num3 = 'Ingresa un dato o S/N.</br>';
    } else {
        $num_int_tutor = validarText($num_int_tutor);
    }

    if (!$num_ext_tutor) {
        $error_num4 = 'Ingresa un dato.</br>';
    } else {
        $num_ext_tutor = validarText($num_ext_tutor);
    }

    if (!$colonia_tutor) {
        $error_colonia2 = 'Ingresa una colonia.</br>';
    } else {
        $colonia_tutor = validarText($colonia_tutor);
    }

    if (!$alcaldia_tutor) {
        $error_alcaldia2 = 'Ingresa una alcaldía.</br>';
    } else {
        $alcaldia_tutor = validarText($alcaldia_tutor);
    }

    if (!$entidad_tutor) {
        $error_entidad2 = 'Ingresa una entidad federativa.</br>';
    } else {
        $entidad_tutor = validarText($entidad_tutor);
    }

    if (!$cp_tutor) {
        $error_cp2 = 'Ingresa un código postal.</br>';
    } else if (!preg_match("/^[0-9]+$/", $cp_tutor) || strlen($cp_tutor) > 5 || strlen($cp_tutor) < 5) {
        $error_cp2 = 'Ingresa una código postal válido.</br>';
    } else {
        $cp_tutor = validarNum($cp_alu);
    }

    if (!$tel_fijo) {
        $error_tel1 = 'Ingresa un número telefónico.</br>';
    } else if (!preg_match("/^[0-9]+$/", $tel_fijo)) {
        $error_tel1 = 'Ingresa un número télefónico válido.</br>';
    } else {
        $tel_fijo = validarNum($tel_fijo);
    }

    if (!$tel_cel) {
        $error_tel2 = 'Ingresa un número telefónico.</br>';
    } else if (!preg_match("/^[0-9]+$/", $tel_cel)) {
        $error_tel2 = 'Ingresa un número télefónico válido.</br>';
    } else {
        $$tel_cel = validarNum($tel_cel);
    }

    if (!$tel_ofi) {
        $error_tel3 = 'Ingresa un número telefónico.</br>';
    } else if (!preg_match("/^[0-9]+$/", $tel_ofi)) {
        $error_tel3 = 'Ingresa un número télefónico válido.</br>';
    } else {
        $$tel_ofi = validarNum($tel_ofi);
    }

    if ($email_tutor) {
        $email_tutor = filter_var($email_tutor, FILTER_SANITIZE_EMAIL);

        if (!filter_var($email_tutor, FILTER_VALIDATE_EMAIL)) {
            $error_email = 'Ingresa un correo válido <br/>';
        }
    } else {
        $error_email = 'Ingresa un correo <br/>';
    }


    if (!$error_grado && !$error_apellido1 && !$error_apellido2 && !$error_nombre1 && !$error_edad1 && !$error_genero &&
        !$error_curp && !$error_lugar && !$error_religion && !$error_tipo_s && !$error_calle1 && !$error_alcaldia1 &&
        !$error_num1 && !$error_num2 && !$error_colonia1 && !$error_entidad1 && !$error_cp1 && !$error_esc1 && !$error_apellido3 &&
        !$error_apellido4 && !$error_nombre2 && !$error_edad2 && !$error_estudio && !$error_ocupacion & !$error_calle2 &&
        !$error_alcaldia2 && !$error_num3 && !$error_num4 && !$error_colonia2 && !$error_entidad2 && !$error_cp2 &&
        !$error_tel1 && !$error_tel2 && !$error_tel3 && !$error_email) {
        
        //recogiendo el contenido del otro fichero 
        ob_start(); //buffer que recoge el contenido del fichero de abajo
        require_once 'pre_reg_form.view.php'; //archivo que contiene el html del pdf
        $html = ob_get_clean(); //el contenido del buffer se guarda en una variable

        $html2pdf = new Html2Pdf('P', 'A4', 'es', 'true', 'UTF8');
        $html2pdf->setDefaultFont('Arial');
        $html2pdf->writeHTML($html);
        $html2pdf->output("pre_inscripcion.pdf",'D');
        
        $enviado = true;   
    }
}

require 'views/inscripciones.view.php';
  