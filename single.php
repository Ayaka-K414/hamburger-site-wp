<?php get_header(); ?>
<!-- メインコンテンツ -->
            <main class="l-main">
<!-- メインビジュアル -->
                <div class="p-main-visual--single">
                    <h1 class="p-main-visual__title c-title--main-visual-single"><?php the_title(); ?></h1>
                </div>
<!-- アーティクル -->
                <article class="p-article--single">
                    <div class="wp-block">
                        <?php the_content(); ?>
                    </div>
                </article>
            </main>
        </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>