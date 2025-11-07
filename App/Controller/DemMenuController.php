<?php

namespace App\Controller;

use App\DemPlugin;

class DemMenuController {
    public function __construct() {
        $this->init_hooks();
    }

    //initialisation du plugin
    public function init_hooks(): void{
        add_action('admin_menu', [$this, 'dem_create_menu']);
    }

// Création de l'onglet Set Paiements
    public function dem_create_menu() {
        add_menu_page('Set Payments', 'Set Payments', 'manage_options', 'set_payments', [$this, 'toSetPayments'], 'dashicons-bank',40);
    }


// Création de la page
    public function toSetPayments() {
        DemPlugin::render('setPayments');
    }
}