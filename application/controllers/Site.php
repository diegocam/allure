<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->home();
    }

    public function home() {
        $d["head_data"]['links'][] = $this->script_tag("assets/plugins/idangerous/idangerousidangerous.swiper-2.1.min.js");
        $d["body_data"] = "bod";
        $d["footer_data"] = "foot";
        $this->load->view('layout', $d);
    }
}
