<?php

defined( 'ABSPATH' ) or die();

class Boilerplate_Shortcode_Date {

    public function __construct() {
        $this->add_hooks();
    }

    public function add_hooks() {
        error_log( print_r(12345 , true ) );
    
        add_action( 'init', [$this, 'add_shortcode'] );
    }

    public function add_shortcode() {
        add_shortcode( 'boilerplate-date', [$this,'date_function']);
    }

    public function date_function($atts) {
        error_log( print_r($atts , true ) );
        $datetime = new DateTime();
        return $datetime->format($atts['format']);  //j, n, Y        
    }


}

new Boilerplate_Shortcode_Date();

