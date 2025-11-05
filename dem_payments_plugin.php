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


 /** 
 * This file is for handling : activation, execution, deactivation of the plugin
 * Its features will be developped in other files (MVC architecture)
 * */

function dem_activate_plugin(){
    set_transient('dem_payments_activated', true);
    add_option('dem_wc_payments_methods', array(
        'esp' => true,
        'ch' => true,
        'chvac' => true,
        'vir' => true,
        'cb' => true,
        'credit' => true
    ));
}

register_activation_hook(__FILE__,'dem_activate_plugin');

function dem_deactivate_plugin(){
    delete_transient('dem_payments_activated');
}

register_deactivation_hook(__FILE__, 'dem_deactivate_plugin');

// Exécution de l'extension
// Création de l'onglet Set Paiements
function dem_create_menu() {
    add_menu_page('Set Payments', 'Set Payments', 'edit_posts', 'set_payments', '', '');
}

add_action('admin_menu','dem_create_menu');

// Création de la page
