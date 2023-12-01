/*
Template Name: アーカイブサーチページ
*/
<?php get_header(); ?>
<body>
<!-- PC2カラム設定のflex親要素 -->
    <div class="c-flex--parent-pc">

<!-- フッター以外のコンテンツ全体を内包するdiv PC版でflexした時の左側、幅調整-->
        <div class="c-flex--child-main">

<!-- ヘッダー -->
            <header class="l-header p-header">
                <h1 class="p-header__title c-title--logo"><a href="front-page.html">Hamburger</a></h1>
                <button class="p-header__menu c-menu">Menu</button>
                <form class="p-form" action="./archive_search.html" method="post">
                    <div class="p-form__input">
                        <input class="p-form__input-child c-input" name="search" autocomplete="on">
                    </div>
                        <button class="p-form__button c-button" name="submit">検索</button>
                </form>
            </header>

<!-- メインコンテンツ -->
            <main class="l-main">

<!-- メインビジュアル -->
                <div class="p-main-visual--archive">
                    <div class="p-main-visual--archive__flex">
                        <h2 class="p-main-visual__first-title c-title--first-archive-main-visual">Search:</h2>
                        <h3 class="p-main-visual__second-title c-title--second-archive-main-visual">チーズバーガー</h3>
                    </div>
                </div>

<!-- アーティクル -->
                <article class="p-article">
                    <section class="p-introduction">
                        <h2 class="p-introduction__title c-title--introduction">小見出しが入ります</h2>
                        <p class="p-introduction__text c-text--introduction">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </section>

<!-- メニューカード -->
                    <ul class="p-menu-cards">
                        <li class="p-menu-cards__list">
                            <figure class="p-menu-cards__fig">
                                <img class="p-menu-cards__image c-image" src="../img/archive-menu.jpg" alt="チーズバーガーメニューの写真">
                                <figcaption class="p-menu-cards__summary">
                                    <h3 class="p-menu-cards__first-title c-title--first-title">見出しが入ります</h3>
                                    <h4 class="p-menu-cards__second-title c-title--second-title">小見出しが入ります</h4>
                                    <p class="p-menu-cards__text c-text--summary">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    <div class="p-menu-cards__button c-button--link">
                                        <a href="">詳しく見る</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="p-menu-cards__list">
                            <figure class="p-menu-cards__fig">
                                <img class="p-menu-cards__image c-image" src="../img/archive-menu.jpg" alt="ダブルチーズバーガーメニューの写真">
                                <figcaption class="p-menu-cards__summary">
                                    <h3 class="p-menu-cards__first-title c-title--first-title">見出しが入ります</h3>
                                    <h4 class="p-menu-cards__second-title c-title--second-title">小見出しが入ります</h4>
                                    <p class="p-menu-cards__text c-text--summary">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    <div class="p-menu-cards__button c-button--link">    
                                        <a href="">詳しく見る</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="p-menu-cards__list">
                            <figure class="p-menu-cards__fig">
                                <img class="p-menu-cards__image c-image" src="../img/archive-menu.jpg" alt="スペシャルチーズバーガーメニューの写真">
                                <figcaption class="p-menu-cards__summary">
                                    <h3 class="p-menu-cards__first-title c-title--first-title">見出しが入ります</h3>
                                    <h4 class="p-menu-cards__second-title c-title--second-title">小見出しが入ります</h4>
                                    <p class="p-menu-cards__text c-text--summary">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    <div class="p-menu-cards__button c-button--link">
                                        <a href="">詳しく見る</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="p-menu-cards__list">
                            <figure class="p-menu-cards__fig">
                                <img class="p-menu-cards__image c-image" src="../img/archive-menu.jpg" alt="スペシャルチーズバーガーメニューの写真">
                                <figcaption class="p-menu-cards__summary">
                                    <h3 class="p-menu-cards__first-title c-title--first-title">見出しが入ります</h3>
                                    <h4 class="p-menu-cards__second-title c-title--second-title">小見出しが入ります</h4>
                                    <p class="p-menu-cards__text c-text--summary">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    <div class="p-menu-cards__button c-button--link">
                                        <a href="">詳しく見る</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="p-menu-cards__list">
                            <figure class="p-menu-cards__fig">
                                <img class="p-menu-cards__image c-image" src="../img/archive-menu.jpg" alt="スペシャルチーズバーガーメニューの写真">
                                <figcaption class="p-menu-cards__summary">
                                    <h3 class="p-menu-cards__first-title c-title--first-title">見出しが入ります</h3>
                                    <h4 class="p-menu-cards__second-title c-title--second-title">小見出しが入ります</h4>
                                    <p class="p-menu-cards__text c-text--summary">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    <div class="p-menu-cards__button c-button--link">
                                        <a href="">詳しく見る</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>

<!-- ページネーション -->
                    <ul class="p-pagination">
                        <span class="p-pagination__notsp c-pagination--corrent">page 1/10</span>
                        <div class="p-pagination__sp-flex">
                            <li class="p-pagination__all c-pagination"><a href=""><span></span></a></li>
                            <li class="p-pagination__sp c-pagination--forward"><a href=""><span>前へ</span></a></li>
                        </div>
                        <li class="p-pagination__notsp c-pagination--page"><a href=""><span>1</span></a></li>
                        <li class="p-pagination__notsp c-pagination--page"><a href=""><span>2</span></a></li>
                        <li class="p-pagination__notsp c-pagination--page"><a href=""><span>3</span></a></li>
                        <li class="p-pagination__notsp c-pagination--page"><a href=""><span>4</span></a></li>
                        <li class="p-pagination__notsp c-pagination--page"><a href=""><span>5</span></a></li>
                        <li class="p-pagination__notsp c-pagination--page"><a href=""><span>6</span></a></li>
                        <li class="p-pagination__notsp c-pagination--page"><a href=""><span>7</span></a></li>
                        <li class="p-pagination__notsp c-pagination--page"><a href=""><span>8</span></a></li>
                        <li class="p-pagination__notsp c-pagination--page"><a href=""><span>9</span></a></li>
                        <div class="p-pagination__sp-flex">
                            <li class="p-pagination__sp c-pagination--next"><a href=""><span>次へ</span></a></li>
                            <li class="p-pagination__all c-pagination--right"><a href=""><span></span></a></li>
                        </div>
                    </ul>
                </article>
            </main>
        </div>
<?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>