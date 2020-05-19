<?php
    define('PATH','http://localhost/ColegioJRF/');

    $panel_admin = array(
        'usuario' => 'administrador',
        'password' => hash('sha512','123')
    );

    $config_gestor = array(
        'items_x_pag' => '6',
        'carpeta_img' => 'img/'
    );

    $bd_config = array(
        'base_datos' => 'colegio',
        'usuario' => 'root',
        'pass' => ''
    );

