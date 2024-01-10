<?php get_header(); ?>
<!-- メインコンテンツ -->
            <main class="l-main">
<!-- メインビジュアル -->
                <div class="p-main-visual--shop">
                    <h1 class="p-main-visual__title c-title--main-visual-shop"><?php the_title(); ?></h1>
                </div>
<!-- アーティクル -->
                <article class="p-article--single">
                    <h1 class="c-title--introduction">404 Page Not Found</h1>
                    <p class="c-text--introduction u-mgb30">お探しのページは見つかりませんでした。</p>
                    <a class="c-button--link-404" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページへ戻る</a>
                </article>
            </main>
        </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>