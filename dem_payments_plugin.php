<?php

/**
 * Plugin Name: Dance Event Manager Payments
 * Plugin URI: /
 * Description: This plugin allows customers to choose the payment methods for their orders, and staff to enter payments and update their status.
 * Version: 1.0
 * Author: Chloé Leroy
 * Author URI: /
 * Developper: Chloé Leroy
 * Requires Plugins: woocommerce
 **/

use App\DemPlugin;
use App\Controller\DemMenuController;

// if the absolute path is not used, exit:
defined('ABSPATH') || exit;

define('PLUG_DIR', plugin_dir_path(__FILE__));

require PLUG_DIR . '/vendor/autoload.php';

$dem_plugin = new DemPlugin(__FILE__);
$dem_menu = new DemMenuController();
