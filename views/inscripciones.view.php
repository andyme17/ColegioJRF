  <?php require 'nav-bar.view.php'; ?>

  <section class="img-back-header">
    <div class="content-back-header container mx-auto">
      <h2>Inscripciones</h2>
      <hr>
      <p class="text-back-header">
        A continuación vamos a guíarlo paso a paso a tráves del proceso de inscripción:
      </p>
    </div>
  </section>
  <main class="img-back py-3 py-md-4">
    <div class="container">
      <div class="row">
        <div class="col-12 offset-lg-2 col-lg-8">
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="f1 shadow" novalidate>
            <?php if (!empty($enviado)) : ?>
              <div class="alert successful">
                <p>Enviado correctamente</p>
              </div>
            <?php endif ?>
            <h4 class="text-center pb-3">Pre-registro</h4>
            <p class="text-center pb-4">Completa el siguiente formulario:</p>
            <div class="container">
              <h5 class="pb-3"><i class="fas fa-caret-right"></i>&nbsp;&nbsp;Datos del alumno</h5>

              <div class="form-radio">
                <label>Inscripción a:</label>
                <div class="form-row pt-2 text-center" id="campo-radio">
                  <div class="col-6 col-sm-4">
                    <input type="radio" id="primero" name="grado" value="1" <?php if (empty($enviado) && isset($grado) && $grado == '1') echo 'checked'; ?>>
                    <label for="primero">1° Kinder</label>
                  </div>
                  <div class="col-6 col-sm-4">
                    <input type="radio" id="segundo" name="grado" value="2" <?php if (empty($enviado) && isset($grado) && $grado == '2') echo 'checked'; ?>>
                    <label for="segundo">2° Kinder</label>
                  </div>
                  <div class="col-6 col-sm-4">
                    <input type="radio" id="tercero" name="grado" value="3" <?php if (empty($enviado) && isset($grado) && $grado == '3') echo 'checked'; ?>>
                    <label for="tercero">3° Kinder</label>
                  </div>
                  <div class="col-6 col-sm-4">
                    <input type="radio" id="tercero" name="grado" value="4" <?php if (empty($enviado) && isset($grado) && $grado == '4') echo 'checked'; ?>>
                    <label for="tercero">4° Kinder</label>
                  </div>
                  <div class="col-6 col-sm-4">
                    <input type="radio" id="tercero" name="grado" value="5" <?php if (empty($enviado) && isset($grado) && $grado == '5') echo 'checked'; ?>>
                    <label for="tercero">5° Kinder</label>
                  </div>
                  <div class="col-6 col-sm-4">
                    <input type="radio" id="tercero" name="grado" value="6" <?php if (empty($enviado) && isset($grado) && $grado == '6') echo 'checked'; ?>>
                    <label for="tercero">6° Kinder</label>
                  </div>
                </div>
                <?php if (!empty($error_grado)) : ?>
                  <small class="error"><?php echo $error_grado; ?></small>
                <?php endif; ?>
              </div>
              <div class="form-row pt-1 pt-3">
                <div class="group col-sm-6">
                  <input type="text" name="ap-pat-alu" id="ap-pat-alu" autocomplete="off" value="<?php if (empty($enviado) && isset($ap_pat_alu)) echo $ap_pat_alu; ?>" required><span class="barra"></span>
                  <label for="ap-pat-alu" class="float-label">Apellido paterno:</label>
                  <?php if (!empty($error_apellido1)) : ?>
                    <small class="error"><?php echo $error_apellido1; ?></small>
                  <?php endif; ?>
                </div>
                <div class="group col-sm-6">
                  <input type="text" name="ap-mat-alu" id="ap-mat-alu" autocomplete="off" value="<?php if (empty($enviado) && isset($ap_mat_alu)) echo $ap_mat_alu; ?>" required><span class="barra"></span>
                  <label for="ap-mat-alu" class="float-label" id="text-label-2">Apellido materno:</label>
                  <?php if (!empty($error_apellido2)) : ?>
                    <small class="error"><?php echo $error_apellido2; ?></small>
                  <?php endif; ?>
                </div>
              </div>
              <div class="form-row mt-2">
                <div class="group col-sm-8">
                  <input type="text" name="nombre-alu" id="nombre-alu" autocomplete="off" value="<?php if (empty($enviado) && isset($nombre_alu)) echo $nombre_alu; ?>" required><span class="barra"></span>
                  <label for="nombre-alu" class="float-label" id="text-label-3">Nombre(s):</label>
                  <?php if (!empty($error_nombre1)) : ?>
                    <small class="error"><?php echo $error_nombre1; ?></small>
                  <?php endif; ?>
                </div>
                <div class="group col-sm-4">
                  <input type="text" name="edad-alu" id="edad-alu" autocomplete="off" value="<?php if (empty($enviado) && isset($edad_alu)) echo $edad_alu; ?>" required><span class="barra"></span>
                  <label for="edad-alu" class="float-label" id="text-label-4">Edad:</label>
                  <?php if (!empty($error_edad1)) : ?>
                    <small class="error"><?php echo $error_edad1; ?></small>
                  <?php endif; ?>
                </div>
              </div>
              <div class="form-row mt-2">
                <div class="group col-12 col-sm-8">
                  <input type="text" name="curp" id="curp" autocomplete="off" value="<?php if (empty($enviado) && isset($curp)) echo $curp; ?>" required><span class="barra"></span>
                  <label for="curp" class="float-label" id="text-label-5">CURP:</label>
                  <?php if (!empty($error_curp)) : ?>
                    <small class="error"><?php echo $error_curp; ?></small>
                  <?php endif; ?>
                </div>
                <div class="form-radio col-12 col-sm-3 mt-2 mt-sm-0">
                  <label>Género:</label>
                  <div class="form-row pt-2 pt-sm-0 pb-sm-2 text-center" id="campo-radio-1">
                    <div class="col-6">
                      <input type="radio" id="f" name="genero" value="f" <?php if (empty($enviado) && isset($genero) && $genero == 'f') echo 'checked'; ?>>
                      <label for="f">F</label>
                    </div>
                    <div class="col-6">
                      <input type="radio" id="m" name="genero" value="m" <?php if (empty($enviado) && isset($genero) && $genero == 'm') echo 'checked'; ?>>
                      <label for="m">M</label>
                    </div>
                    <?php if (!empty($error_genero)) : ?>
                      <small class="error"><?php echo $error_genero; ?></small>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="form-row mt-2 mt-md-3">
                <div class="col-12 col-sm-7 col-lg-5">
                  <div class="form-group ml-2">
                    <label for="lugar-nac">Lugar de nacimiento</label>
                    <select class="form-control form-control-sm" id="lugar-nac" name="lugar-nac">
                      <option value="">Selecciona una opción</option>
                      <option value="Aguascalientes" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Aguascalientes') echo "selected"; ?>>Aguascalientes</option>
                      <option value="Baja California" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Baja California') echo "selected"; ?>>Baja California</option>
                      <option value="Baja California Sur" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Baja California Sur') echo "selected"; ?>>Baja California Sur</option>
                      <option value="CDMX" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'CDMX') echo "selected"; ?>>CDMX</option>
                      <option value="Campeche" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Campeche') echo "selected"; ?>>Campeche</option>
                      <option value="Coahuila" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Coahuila') echo "selected"; ?>>Coahuila</option>
                      <option value="Colima" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Colima') echo "selected"; ?>>Colima</option>
                      <option value="Chiapas" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Chiapas') echo "selected"; ?>>Chiapas</option>
                      <option value="Chihuahua" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Chihuahua') echo "selected"; ?>>Chihuahua</option>
                      <option value="Durango" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Durango') echo "selected"; ?>>Durango</option>
                      <option value="Guanajuato" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Guanajuato') echo "selected"; ?>>Guanajuato</option>
                      <option value="Guerrero" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Guerrero') echo "selected"; ?>>Guerrero</option>
                      <option value="Hidalgo" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Hidalgo') echo "selected"; ?>>Hidalgo</option>
                      <option value="Jalisco" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Jalisco') echo "selected"; ?>>Jalisco</option>
                      <option value="Estado de Mexico" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Estado de Mexico') echo "selected"; ?>>Estado de México</option>
                      <option value="Michoacan" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Michoacan') echo "selected"; ?>>Michoacán</option>
                      <option value="Morelos" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Morelos') echo "selected"; ?>>Morelos</option>
                      <option value="Nayarit" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Nayarit') echo "selected"; ?>>Nayarit</option>
                      <option value="Nuevo Leon" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Nuevo Leon') echo "selected"; ?>>Nuevo León</option>
                      <option value="Oaxaca" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Oaxaca') echo "selected"; ?>>Oaxaca</option>
                      <option value="Puebla" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Puebla') echo "selected"; ?>>Puebla</option>
                      <option value="Queretaro" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Queretaro') echo "selected"; ?>>Querétaro</option>
                      <option value="Quintana Roo" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Quintana Roo') echo "selected"; ?>>Quintana Roo</option>
                      <option value="San Luis Potosi" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'San Luis Potosi') echo "selected"; ?>>San Luis Potosí</option>
                      <option value="Sinaloa" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Sinaloa') echo "selected"; ?>>Sinaloa</option>
                      <option value="Sonora" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Sonora') echo "selected"; ?>>Sonora</option>
                      <option value="Tabasco" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Tabasco') echo "selected"; ?>>Tabasco</option>
                      <option value="Tamaulipas" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Tamaulipas') echo "selected"; ?>>Tamaulipas</option>
                      <option value="Tlaxcala" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Tlaxcala') echo "selected"; ?>>Tlaxcala</option>
                      <option value="Veracruz" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Veracruz') echo "selected"; ?>>Veracruz</option>
                      <option value="Yucatan" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Yucatan') echo "selected"; ?>>Yucatán</option>
                      <option value="Zacatecas" <?php if (!$enviado && isset($lugar_nac) && $lugar_nac == 'Zacatecas') echo "selected"; ?>>Zacatecas</option>
                    </select>
                    <?php if (!empty($error_lugar)) : ?>
                      <small class="error"><?php echo $error_lugar; ?></small>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="group col-12 col-sm-5 col-lg-4 form-line">
                  <input type="text" name="religion" id="religion" autocomplete="off" value="<?php if (empty($enviado) && isset($religion)) echo $religion; ?>" required><span class="barra"></span>
                  <label for="religion" class="float-label" id="text-label-6">Religion:</label>
                  <?php if (!empty($error_religion)) : ?>
                    <small class="error"><?php echo $error_religion; ?></small>
                  <?php endif; ?>
                </div>
                <div class="group col-12 col-sm-4 col-lg-3 ml-sm-1 ml-lg-0">
                  <input type="text" name="tipo-s" id="tipo-sangre" autocomplete="off" value="<?php if (empty($enviado) && isset($tipo_s)) echo $tipo_s; ?>" required><span class="barra"></span>
                  <label for="tipo-s" class="float-label" id="text-label-7">Tipo de sangre:</label>
                  <?php if (!empty($error_tipo_s)) : ?>
                    <small class="error"><?php echo $error_tipo_s; ?></small>
                  <?php endif; ?>
                </div>
              </div>
              <p class="p-label">Domicilio particular:</p>
              <div class="form-row mt-2">
                <div class="group col-12 col-sm-7 col-md-6">
                  <input type="text" name="calle-alu" id="calle-alu" autocomplete="off" value="<?php if (empty($enviado) && isset($calle_alu)) echo $calle_alu; ?>" required><span class="barra"></span>
                  <label for="calle-alu" class="float-label" id="text-label-8">Calle:</label>
                  <?php if (!empty($error_calle1)) : ?>
                    <small class="error"><?php echo $error_calle1; ?></small>
                  <?php endif; ?>
                </div>
                <div class="group col-12 col-sm-5 col-md-3">
                  <input type="text" name="num-int-alu" id="num-int-alu" autocomplete="off" value="<?php if (empty($enviado) && isset($num_int_alu)) echo $num_int_alu; ?>" required><span class="barra"></span>
                  <label for="num-int-alu" class="float-label" id="text-label-9">No. interior:</label>
                  <?php if (!empty($error_num1)) : ?>
                    <small class="error"><?php echo $error_num1; ?></small>
                  <?php endif; ?>
                </div>
                <div class="group col-12 col-sm-5 col-md-3">
                  <input type="text" name="num-ext-alu" id="num-ext-alu" autocomplete="off" value="<?php if (empty($enviado) && isset($num_ext_alu)) echo $num_ext_alu; ?>" required><span class="barra"></span>
                  <label for="num-ext-alu" class="float-label" id="text-label-10">No. exterior:</label>
                  <?php if (!empty($error_num2)) : ?>
                    <small class="error"><?php echo $error_num2; ?></small>
                  <?php endif; ?>
                </div>
              </div>
              <div class="form-row mt-md-2">
                <div class="group col-12 col-sm-7">
                  <input type="text" name="colonia-alu" id="colonia-alu" autocomplete="off" value="<?php if (empty($enviado) && isset($colonia_alu)) echo $colonia_alu; ?>" required><span class="barra"></span>
                  <label for="colonia-alu" class="float-label" id="text-label-11">Colonia:</label>
                  <?php if (!empty($error_colonia1)) : ?>
                    <small class="error"><?php echo $error_colonia1; ?></small>
                  <?php endif; ?>
                </div>
                <div class="group col-12 col-sm-5">
                  <input type="text" name="alcaldia-alu" id="alcaldia-alu" autocomplete="off" value="<?php if (empty($enviado) && isset($alcaldia_alu)) echo $alcaldia_alu; ?>" required><span class="barra"></span>
                  <label for="alcaldia-alu" class="float-label" id="text-label-12">Alcaldía o municipio:</label>
                  <?php if (!empty($error_alcaldia1)) : ?>
                    <small class="error"><?php echo $error_alcaldia1; ?></small>
                  <?php endif; ?>
                </div>
              </div>
              <div class="form-row mt-md-2">
                <div class="group col-12 col-sm-8">
                  <input type="text" name="entidad-alu" id="entidad-alu" autocomplete="off" value="<?php if (empty($enviado) && isset($entidad_alu)) echo $entidad_alu; ?>" required><span class="barra"></span>
                  <label for="entidad-alu" class="float-label" id="text-label-13">Entidad federativa:</label>
                  <?php if (!empty($error_entidad1)) : ?>
                    <small class="error"><?php echo $error_entidad1; ?></small>
                  <?php endif; ?>
                </div>
                <div class="group col-12 col-sm-4">
                  <input type="text" name="cp-alu" id="cp-alu" autocomplete="off" value="<?php if (empty($enviado) && isset($cp_alu)) echo $cp_alu; ?>" required><span class="barra"></span>
                  <label for="cp-alu" class="float-label" id="text-label-14">Código Postal:</label>
                  <?php if (!empty($error_cp1)) : ?>
                    <small class="error"><?php echo $error_cp1; ?></small>
                  <?php endif; ?>
                </div>
              </div>
              <div class="form-row mt-md-3">
                <div class="col-12 col-md-6 col-lg-5 mt-2 mt-sm-0">
                  <label>¿Estuvo inscrito en otra escuela? </label>
                  <div class="form-row pt-2 pt-sm-0 pb-sm-2 text-center" id="campo-radio-2">
                    <div class="col-6">
                      <input type="radio" id="si-esc-proc" name="esc-proc" value="si" <?php if (empty($enviado) && isset($esc_proc) && $esc_proc == 'si') echo 'checked'; ?>>
                      <label for="si-esc-proc">Si</label>
                    </div>
                    <div class="col-6">
                      <input type="radio" id="no-esc-proc" name="esc-proc" value="no" <?php if (empty($enviado) && isset($esc_proc) && $esc_proc == 'no') echo 'checked'; ?>>
                      <label for="no-esc-proc">No</label>
                    </div>
                  </div>
                  <?php if (!empty($error_esc1)) : ?>
                    <small class="error"><?php echo $error_esc1; ?></small>
                  <?php endif; ?>
                </div>
                <div class="group col-12 col-md-6 col-lg-7">
                  <input type="text" name="esc-procedencia" id="esc-procedencia" autocomplete="off" value="<?php if (empty($enviado) && isset($esc_procedencia)) echo $esc_procedencia; ?>" required><span class="barra"></span>
                  <label for="esc-procedencia" class="float-label" id="text-label-15">Escuela de procedencia:</label>
                  <?php if (!empty($error_esc2)) : ?>
                    <small class="error"><?php echo $error_esc2; ?></small>
                  <?php endif; ?>
                </div>
              </div>

              <h5 class="py-3"><i class="fas fa-caret-right"></i>&nbsp;&nbsp;Datos del padre, madre o tutor</h5>
              <div class="form-row mt-1 mt-md-3">
                <div class="group col-12 col-sm-6">
                  <input type="text" name="ap-pat-tutor" id="ap-pat-tutor" autocomplete="off" value="<?php if (empty($enviado) && isset($ap_pat_tutor)) echo $ap_pat_tutor; ?>" required><span class="barra"></span>
                  <label for="ap-pat-tutor" class="float-label" id="text-label-16">Apellido paterno:</label>
                  <?php if (!empty($error_apellido3)) : ?>
                    <small class="error"><?php echo $error_apellido3; ?></small>
                  <?php endif; ?>
                </div>
                <div class="group col-12 col-sm-6">
                  <input type="text" name="ap-mat-tutor" id="ap-mat-tutor" autocomplete="off" value="<?php if (empty($enviado) && isset($ap_mat_tutor)) echo $ap_mat_tutor; ?>" required><span class="barra"></span>
                  <label for="ap-mat-tutor" class="float-label" id="text-label-17">Apellido materno:</label>
                  <?php if (!empty($error_apellido4)) : ?>
                    <small class="error"><?php echo $error_apellido4; ?></small>
                  <?php endif; ?>
                </div>
              </div>
              <div class="form-row mt-2">
                <div class="group col-12 col-sm-8">
                  <input type="text" name="nombre-tutor" id="nombre-tutor" autocomplete="off" value="<?php if (empty($enviado) && isset($nombre_tutor)) echo $nombre_tutor; ?>" required><span class="barra"></span>
                  <label for="nombre-tutor" class="float-label" id="text-label-18">Nombre(s):</label>
                  <?php if (!empty($error_nombre2)) : ?>
                    <small class="error"><?php echo $error_nombre2; ?></small>
                  <?php endif; ?>
                </div>
                <div class="group col-12 col-sm-4">
                  <input type="text" name="edad-tutor" id="edad-tutor" autocomplete="off" value="<?php if (empty($enviado) && isset($edad_tutor)) echo $edad_tutor; ?>" required><span class="barra"></span>
                  <label for="edad-tutor" class="float-label" id="text-label-19">Edad:</label>
                  <?php if (!empty($error_edad2)) : ?>
                    <small class="error"><?php echo $error_edad2; ?></small>
                  <?php endif; ?>
                </div>
              </div>
              <div class="form-row mt-2 mt-md-3">
                <div class="col-12 col-sm-6">
                  <div class="form-group ml-1">
                    <label for="grado-estudio" class="">Último grado de estudios:</label>
                    <select class="form-control form-control-sm" name="grado-estudio" id="grado-estudio">
                      <option value="">Selecciona una opción</option>
                      <option value="Ninguno" <?php if (!$enviado && isset($grado_estudio) && $grado_estudio == 'Ninguno') echo "selected"; ?>>Ninguno</option>
                      <option value="Preescolar" <?php if (!$enviado && isset($grado_estudio) && $grado_estudio == 'Preescolar') echo "selected"; ?>>Preescolar</option>
                      <option value="Primaria" <?php if (!$enviado && isset($grado_estudio) && $grado_estudio == 'Primaria') echo "selected"; ?>>Primaria</option>
                      <option value="Secundaria" <?php if (!$enviado && isset($grado_estudio) && $grado_estudio == 'Secundaria') echo "selected"; ?>>Secundaria</option>
                      <option value="Preparatoria o Bachillerato" <?php if (!$enviado && isset($grado_estudio) && $grado_estudio == 'Preparatoria o Bachillerato') echo "selected"; ?>>Preparatoria o bachillerato</option>
                      <option value="Carrera tecnica" <?php if (!$enviado && isset($grado_estudio) && $grado_estudio == 'Carrera tecnica') echo "selected"; ?>>Carrera técnica</option>
                      <option value="Licenciatura" <?php if (!$enviado && isset($grado_estudio) && $grado_estudio == 'Licenciatura') echo "selected"; ?>>Licenciatura</option>
                      <option value="Maestría o Doctorado" <?php if (!$enviado && isset($grado_estudio) && $grado_estudio == 'Maestría o Doctorado') echo "selected"; ?>>Maestría o Doctorado</option>
                    </select>
                    <?php if (!empty($error_estudio)) : ?>
                      <small class="error"><?php echo $error_estudio; ?></small>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="group col-12 col-sm-6">
                  <input type="text" name="ocupacion" id="ocupacion" autocomplete="off" value="<?php if (!$enviado && isset($ocupacion)) echo $ocupacion; ?>" required><span class="barra"></span>
                  <label for="ocupacion" class="float-label" id="text-label-20">Ocupación:</label>
                  <?php if (!empty($error_ocupacion)) : ?>
                    <small class="error"><?php echo $error_ocupacion; ?></small>
                  <?php endif; ?>
                </div>
              </div>
              <p class="p-label">Domicilio particular:</p>
              <div class="form-row">
                <div class="group col-12 col-sm-7 col-md-6">
                  <input type="text" name="calle-tutor" id="calle-tutor" autocomplete="off" value="<?php if (!$enviado && isset($calle_tutor)) echo $calle_tutor; ?>" required><span class="barra"></span>
                  <label for="calle-tutor" class="float-label" id="text-label-21">Calle:</label>
                  <?php if (!empty($error_calle2)) : ?>
                    <small class="error"><?php echo $error_calle2; ?></small>
                  <?php endif; ?>
                </div>
                <div class="group col-12 col-sm-5 col-md-3">
                  <input type="text" name="num-int-tutor" id="num-int-tutor" autocomplete="off" value="<?php if (!$enviado && isset($num_int_tutor)) echo $num_int_tutor; ?>" required><span class="barra"></span>
                  <label for="num-int-tutor" class="float-label" id="text-label-22">No. interior:</label>
                  <?php if (!empty($error_num3)) : ?>
                    <small class="error"><?php echo $error_num3; ?></small>
                  <?php endif; ?>
                </div>
                <div class="group col-12 col-sm-5 col-md-3">
                  <input type="text" name="num-ext-tutor" id="num-ext-tutor" autocomplete="off" value="<?php if (!$enviado && isset($num_ext_tutor)) echo $num_ext_tutor; ?>" required><span class="barra"></span>
                  <label for="num-ext-tutor" class="float-label" id="text-label-23">No. exterior:</label>
                  <?php if (!empty($error_num4)) : ?>
                    <small class="error"><?php echo $error_num4; ?></small>
                  <?php endif; ?>
                </div>
              </div>
              <div class="form-row mt-md-2">
                <div class="group col-12 col-sm-7">
                  <input type="text" name="colonia-tutor" id="colonia-tutor" autocomplete="off" value="<?php if (!$enviado && isset($colonia_tutor)) echo $colonia_tutor; ?>" required><span class="barra"></span>
                  <label for="colonia-tutor" class="float-label" id="text-label-24">Colonia:</label>
                  <?php if (!empty($error_colonia2)) : ?>
                    <small class="error"><?php echo $error_colonia2; ?></small>
                  <?php endif; ?>
                </div>
                <div class="group col-12 col-sm-5">
                  <input type="text" name="alcaldia-tutor" id="alcaldia-tutor" autocomplete="off" value="<?php if (!$enviado && isset($alcaldia_tutor)) echo $alcaldia_tutor; ?>" required><span class="barra"></span>
                  <label for="alcaldia-tutor" class="float-label" id="text-label-25">Alcaldía o municipio:</label>
                  <?php if (!empty($error_alcaldia2)) : ?>
                    <small class="error"><?php echo $error_alcaldia2; ?></small>
                  <?php endif; ?>
                </div>
              </div>
              <div class="form-row mt-md-2">
                <div class="group col-12 col-sm-8">
                  <input type="text" name="entidad-tutor" id="entidad-tutor" autocomplete="off" value="<?php if (!$enviado && isset($entidad_tutor)) echo $entidad_tutor; ?>" required><span class="barra"></span>
                  <label for="entidad-tutor" class="float-label" id="text-label-26">Entidad federativa:</label>
                  <?php if (!empty($error_entidad2)) : ?>
                    <small class="error"><?php echo $error_entidad2; ?></small>
                  <?php endif; ?>
                </div>
                <div class="group col-12 col-sm-4">
                  <input type="text" name="cp-tutor" id="cp-tutor" autocomplete="off" value="<?php if (!$enviado && isset($cp_tutor)) echo $cp_tutor; ?>" required><span class="barra"></span>
                  <label for="cp-tutor" class="float-label" id="text-label-27">Código Postal:</label>
                  <?php if (!empty($error_cp2)) : ?>
                    <small class="error"><?php echo $error_cp2; ?></small>
                  <?php endif; ?>
                </div>
              </div>
              <p class="p-label">Datos de contacto:</p>
              <div class="form-row mt-md-2">
                <div class="group col-12 col-sm-6 col-md-4">
                  <input type="text" name="tel-fijo" id="tel-fijo" autocomplete="off" value="<?php if (!$enviado && isset($tel_fijo)) echo $tel_fijo; ?>" required><span class="barra"></span>
                  <label for="tel-fijo" class="float-label" id="text-label-28">Teléfono Fijo:</label>
                  <?php if (!empty($error_tel1)) : ?>
                    <small class="error"><?php echo $error_tel1; ?></small>
                  <?php endif; ?>
                </div>
                <div class="group col-12 col-sm-6 col-md-4">
                  <input type="text" name="tel-cel" id="tel-cel" autocomplete="off" value="<?php if (!$enviado && isset($tel_cel)) echo $tel_cel; ?>" required><span class="barra"></span>
                  <label for="tel-cel" class="float-label" id="text-label-29">Teléfono Celular:</label>
                  <?php if (!empty($error_tel2)) : ?>
                    <small class="error"><?php echo $error_tel2; ?></small>
                  <?php endif; ?>
                </div>
                <div class="group col-12 col-sm-6 col-md-4">
                  <input type="text" name="tel-ofi" id="tel-ofi" autocomplete="off" value="<?php if (!$enviado && isset($tel_ofi)) echo $tel_ofi; ?>" required><span class="barra"></span>
                  <label for="tel-ofi" class="float-label" id="text-label-30">Teléfono de Oficina:</label>
                  <?php if (!empty($error_tel3)) : ?>
                    <small class="error"><?php echo $error_tel3; ?></small>
                  <?php endif; ?>
                </div>
                <div class="group col-12 col-md-8">
                  <input type="text" name="email-tutor" id="email-tutor" autocomplete="off" value="<?php if (!$enviado && isset($email_tutor)) echo $email_tutor; ?>" required><span class="barra"></span>
                  <label for="email-tutor" class="float-label" id="text-label-31">Correo Electrónico:</label>
                  <?php if (!empty($error_email)) : ?>
                    <small class="error"><?php echo $error_email; ?></small>
                  <?php endif; ?>
                </div>
              </div>

              <?php if (!empty($enviado)) : ?>
                <div class="successful">
                  <p>Enviado correctamente</p>
                </div>
              <?php endif ?>

              <div class="f1-button">
                <button type="submit" name="submit" class="btn btn-form-primary">Enviar ></button>
              </div>

            </div>
          </form>
          <div class="col-12 offset-md-1 col-md-10 text-center shadow" id="list-doc">
            <h4 class="pb-4">Acude a nuestras instalaciones</h4>
            <p class="p-3">
              Una vez concluido el formulario de Pre-Registro, acude a nuestras instalaciones
              para concluir con el proceso de inscripción presentando la documentación solicitada
              en el siguiente documento:
            </p>
            <a href="<?php echo PATH; ?>pdf/Requisitos-Villa.pdf" class="link-pdf" download="documentacion_requerida.pdf">
              <i class="far fa-file-pdf"></i>
              <small>Da click en la imagen para descargar</small>
            </a>
            <div class="f1-buttons">
              <a class="btn btn-primary" href="<?php echo PATH; ?>inscripciones.php">Enviar ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php require 'footer.view.php'; ?>

  <!--Archivos javascript para bootstrap -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/headroom.min.js"></script>

  <!-- Custom javascript files -->
  <script src="js/nav-bar.js"></script>
  <script>
    $(document).ready(function() {
      $('#esc-procedencia').attr('disabled', 'disabled');

      $('input[name="esc-proc"]').on('click', function() {
        if ($(this).val() == 'si') {
          $('#esc-procedencia').removeAttr('disabled');
          $('#esc-procedencia').focus();
        } else {
          $('#esc-procedencia').attr('disabled', 'disabled');
        }
      })

      $('input[name="grado"], input[name="genero"],select,input[name="esc-proc"]').on('click', function() {
        $('.error').remove();
      });

      $('input[type="text"]').on('focus', function() {
        $('.error').remove();
      });

    });
  </script>
  </body>

  </html>