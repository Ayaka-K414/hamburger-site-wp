<?php

function custom_theme_support (){
    add_theme_support ( 'html5', array (
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));

    add_theme_support( 'title-tag' );
}


function add_links () {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}
add_action('wp_head','add_links');



function add_style_and_script () {
    wp_enqueue_style ( 'ress', get_theme_file_uri( '/asset/css/ress.css' ) );
    wp_enqueue_style ( 'style', get_theme_file_uri( '/asset/css/style.css' ) );
    wp_enqueue_style ( 'roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap', array() );
    wp_enqueue_style ( 'mplus1p', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700;900&display=swap', array() );
    wp_enqueue_script ( 'font_awesome', 'https://kit.fontawesome.com/4c57c614d1.js', array(), '', true );
    wp_enqueue_script ( 'main_script', get_theme_file_uri( '/js/main.js' ), array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'add_style_and_script' );