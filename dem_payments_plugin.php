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

defined('ABSPATH') || exit;

include __DIR__. '/vendor/autoload.php';

use App\DemPlugin;
use App\Controller\DemMenuController;


$dem_plugin = new DemPlugin(__FILE__);
$dem_menu = new DemMenuController();

 /** 
 * This file is for handling : activation, execution, deactivation of the plugin
 * Its features will be developped in other files (MVC architecture)
 * */

 

// Exécution de l'extension
// Création de l'onglet Set Paiements


// add_action('admin_menu','dem_create_menu');

// Création de la page
