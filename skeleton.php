<?php
/**
 * Plugin Name:       Skeleton
 * Plugin URI:        [...]
 * Description:       Plugin para Pasarela de Pago para WordPress.
 * Version:           1.0
 * Author:            Stiven Carvajal
 * Author URI:        [...]
 * License:           [...]
 * Text Domain:       Skeleton
 *
 * This program derives work from Alley Interactive's SearchPress
 * and Automattic's VIP search plugin:
 *
 * Copyright (C) 2012-2013 Automattic
 * Copyright (C) 2013 SearchPress
 *
 * @package  Skeleton
 */

//Evita que un usuario malintencionado ejecute codigo php desde la barra del navegador
defined('ABSPATH') or die( "Bye bye" );

//Aqui se definen las constantes
define('RAI_RUTA',plugin_dir_path(__FILE__));
define('RAI_NOMBRE','Skeleton');

//Archivos externos
include(RAI_RUTA.'/includes/opciones.php');

?>