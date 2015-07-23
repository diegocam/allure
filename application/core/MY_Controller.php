<?php

/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 7/23/2015
 * Time: 7:36 AM
 */
class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function script_tag($src) {
        $script = '<script src="' . base_url() . $src . '"></script>';
        return $script;
    }
}