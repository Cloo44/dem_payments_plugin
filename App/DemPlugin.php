<?php

// création d'une classe Plugin
 /** 
 * This file is for handling : activation, execution, deactivation of the plugin
 * Its features will be developped in other files (MVC architecture)
 * */

namespace App;

class DemPlugin {
    public function __construct(string $file) {
        register_activation_hook($file, [$this,'dem_activate_plugin']);
    }

    public function dem_activate_plugin(){
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

    public function dem_deactivate_plugin(){
        delete_transient('dem_payments_activated');
    }

    // fonction de redirection
        public static function render(string $name) {

            $file = PLUG_DIR . "View/$name.php";

            ob_start();

            include_once($file);

            echo ob_get_clean();
    }
}