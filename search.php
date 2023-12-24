<?php get_header(); ?>
<!-- メインコンテンツ -->
            <main class="l-main">

<!-- メインビジュアル -->
                <div class="p-main-visual--archive">
                    <div class="p-main-visual--archive__flex">
                        <h2 class="p-main-visual__first-title c-title--first-archive-main-visual">Search:</h2>
                        <h3 class="p-main-visual__second-title c-title--second-archive-main-visual"><?php the_search_query(); ?></h3>
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
                    <?php if ( empty( get_search_query() ) ) :?>
                        <p>検索条件が入力されていません。</p>
                    <?php else: ?>
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post();?>
                            <li class="p-menu-cards__list">
                                <figure class="p-menu-cards__fig">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_theme_file_uri('/img/noimage.png'); ?>" alt="NoImage">
                                    <?php endif; ?>
                                    <figcaption class="p-menu-cards__summary">
                                        <h3 class="p-menu-cards__first-title c-title--first-title"><?php the_title(); ?></h3>
                                        <h4 class="p-menu-cards__second-title c-title--second-title">小見出しが入ります</h4>
                                        <?php the_excerpt(); ?>
                                        <div class="p-menu-cards__button c-button--link">
                                            <a href="<?php the_permalink(); ?>">詳しく見る</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                        <?php endwhile; ?>
                        <?php else: ?>
                            <p>検索条件に該当する記事はありません。</p>
                        <?php endif; ?>
                    <?php endif; ?>
                    </ul>

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