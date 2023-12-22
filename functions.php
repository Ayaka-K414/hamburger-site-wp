<?php

function custom_theme_support(){
    // html5対応化
    add_theme_support ( 'html5', array (
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));

    // タイトルタグを生成、管理画面の「設定▶︎一般▶︎サイトのタイトル」から情報を取得する
    add_theme_support( 'title-tag' );

    // 投稿編集画面にアイキャッチ画像の機能を追加する
    add_theme_support( 'post-thumbnails' );

    // 管理画面にメニュー機能を表示させる
    // add_theme_support( 'menus' );

    // 管理画面にメニューの箱を登録する
    register_nav_menus( array(
        'sidebarmenu' => 'サイドバーメニュー',
        'footermenu' => 'フッターメニュー',
    ));
}
add_action( 'after_setup_theme', 'custom_theme_support' );


// スタイルシートとスクリプトを読み込む
function add_style_and_script() {
    wp_enqueue_style ( 'ress', get_theme_file_uri( '/asset/css/ress.css' ) );
    wp_enqueue_style ( 'style', get_theme_file_uri( '/asset/css/style.css' ) );
    wp_enqueue_style ( 'roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap', array() );
    wp_enqueue_style ( 'mplus1p', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700;900&display=swap', array() );
    wp_enqueue_script ( 'font_awesome', 'https://kit.fontawesome.com/4c57c614d1.js', array(), '', true );
    wp_enqueue_script ( 'main_script', get_theme_file_uri( '/js/main.js' ), array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'add_style_and_script' );


// headにリンクを読み込む
function add_links() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}
add_action('wp_head','add_links');