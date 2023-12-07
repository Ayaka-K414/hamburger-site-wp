<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RaiseTech最終課題のハンバーガーサイト">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- PC2カラム設定のflex親要素 -->
    <div class="c-flex--parent-pc">

<!-- フッター以外のコンテンツ全体を内包するdiv PC版でflexした時の左側、幅調整-->
        <div class="c-flex--child-main">

<!-- ヘッダー -->
            <header class="l-header p-header">
                <h1 class="p-header__title c-title--logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Hamburger</a></h1>
                <button class="p-header__menu c-menu">Menu</button>
                <?php get_search_form(); ?>
            </header>