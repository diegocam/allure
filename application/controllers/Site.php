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
        $d["head_data"]['links'] = array(
            link_tag("assets/css/content/home.css"),
            link_tag("assets/plugins/swiper-master/dist/css/swiper.min.css"),
            $this->script_tag("assets/plugins/swiper-master/dist/js/swiper.min.js")
        );
        $d["body_view"] = "content/home";
        $d["footer_data"] = "foot";
        $this->load->view('layout', $d);
    }

    public function about() {
        $d["head_data"]['links'] = array(
            link_tag("assets/css/content/about.css"),
            link_tag("assets/plugins/swiper-master/dist/css/swiper.min.css"),
            $this->script_tag("assets/plugins/swiper-master/dist/js/swiper.min.js")
        );
        $d["body_view"] = "content/about";
        $d["footer_data"] = "foot";
        $this->load->view('layout', $d);
    }

}

