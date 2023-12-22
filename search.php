<?php get_header(); ?>
<!-- メインコンテンツ -->
            <main class="l-main">

<!-- メインビジュアル -->
                <div class="p-main-visual--archive">
                    <div class="p-main-visual--archive__flex">
                        <h2 class="p-main-visual__first-title c-title--first-archive-main-visual">Search:</h2>
                        <h3 class="p-main-visual__second-title c-title--second-archive-main-visual"><?php echo get_search_query(); ?></h3>
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

<!-- ページネーション -->
                    <ul class="sp-pagenation">
                        <li>
                            <?php if (get_previous_posts_link()):?>
                            <?php previous_posts_link('&laquo;前へ'); ?>
                            <?php endif; ?>
                        </li>
                        <li>
                            <?php if (get_next_posts_link()):?>
                            <?php next_posts_link('次へ&raquo;'); ?>
                            <?php endif; ?>
                        </li>
                    </ul>

                    <?php if (function_exists('wp_pagenavi')) {
                        wp_pagenavi();
                    } ?>

                </article>
            </main>
        </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>