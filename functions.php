<?php

function add_links () {
    wp_enqueue_style ( 'ress', get_template_directory_uri().'/../asset/css/ress.css' );
    wp_enqueue_style ( 'main-style', get_template_directory_uri().'/../asset/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'add_links' );