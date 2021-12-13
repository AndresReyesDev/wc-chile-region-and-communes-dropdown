<?php
/**
 * Plugin Name: Menú Desplegable con Regiones y Comunas de Chile
 * Plugin URI:  https://www.sitiowebonline.cl
 * Description: Muestra las Comunas de Chile. Basado en el trabajo de 8manos
 * Version:     2020.05.15
 * Author:      Anyda SRL
 * Author URI:  http://www.sitiowebonline.cl
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

function_exists('plugin_dir_url') or exit('No direct script access allowed');

define('ARG_WCS_VERSION', '1.0.9');
define('ARG_WCS_PLUGIN_URL', plugin_dir_url(__FILE__));
define('ARG_WCS_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('ARG_WCS_PLUGIN_BASENAME', plugin_basename(__FILE__));

require_once(ARG_WCS_PLUGIN_DIR . 'class.arg-wcs.main.php');

register_activation_hook(__FILE__, ['ARG_CWT', 'plugin_activation']);
register_deactivation_hook(__FILE__, ['ARG_CWT', 'plugin_deactivation']);

ARG_CWT::init();