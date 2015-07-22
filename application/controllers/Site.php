<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    public function index() {
        $this->home();
    }

    public function home() {
        $layout_data["head_data"] = "head";
        $layout_data["body_data"] = "bod";
        $layout_data["footer_data"] = "foot";
        $this->load->view('layout', $layout_data);
    }
}
