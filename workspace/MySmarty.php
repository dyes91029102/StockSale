<?php

require 'smarty/smarty/libs/Smarty.class.php';

class MySmarty extends Smarty {

    public static function initSmarty() {
        $Smarty = new Smarty();
        $Smarty->template_dir = '../smarty/templates/';
        $Smarty->compile_dir = '../smarty/templates_c/';
        $Smarty->config_dir = '../smarty/configs/';
        return $Smarty;
    }

}
