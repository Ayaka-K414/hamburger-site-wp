<?php get_header(); ?>
<!-- メインコンテンツ -->
            <main class="l-main">

<!-- メインビジュアル -->
                <div class="p-main-visual--archive">
                    <div class="p-main-visual--archive__flex">
                        <h2 class="p-main-visual__first-title c-title--first-archive-main-visual">Menu:</h2>
                        <h3 class="p-main-visual__second-title c-title--second-archive-main-visual"><?php single_cat_title(); ?></h3>
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
                        <?php get_template_part( 'card' ); ?>
                    </ul>

<!-- ページネーション -->
                    <!-- <ul class="p-pagination">
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
                    </ul> -->
                </article>
            </main>
        </div>
<?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>