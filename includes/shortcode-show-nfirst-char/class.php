<?php

defined( 'ABSPATH' ) or die();

class Boilerplate_Shortcode_Show_Nfirst_Char {

    public function __construct() {
        $this->add_hooks();
    }

    public function add_hooks() {
        error_log( print_r(12345 , true ) );
    
        add_action( 'init', [$this, 'add_shortcode'] );
    }

    public function add_shortcode() {

        add_shortcode( 'boilerplate-nfirst-char', [$this,'first_char_function']);
    }

    public function first_char_function($atts) {
        error_log( print_r($atts , true ) );
        
        return substr($atts['input-text'], $atts['start-char'], $atts['nfirst-char']);    

    }




}

new Boilerplate_Shortcode_Show_Nfirst_Char();

