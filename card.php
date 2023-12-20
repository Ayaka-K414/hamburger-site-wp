<!-- WP-PageNaviの設定 -->
<?php
    $paged = get_query_var('paged')? get_query_var('paged') : 1;
    $pagenavi = new WP_Query( array(
                'post_type' => 'post',
                'paged' => $paged,
                'post_status' => 'publish',
                'posts_per_page' => 10,
            ));
?>

<!-- ループ処理 -->
<?php if ( $pagenavi ->have_posts() ) : ?> 

<?php while ( $pagenavi -> have_posts() ) : $pagenavi -> the_post(); ?>
    <li class="p-menu-cards__list">
        <figure class="p-menu-cards__fig">
            <?php the_post_thumbnail(); ?>
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

<?php if (function_exists('wp_pagenavi')) {
      wp_pagenavi(array('query' => $pagenavi));} ?>

<?php endif; ?>

<?php wp_reset_postdata(); ?>