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
        <div class="c-text--bold">
            <p>検索条件に該当しませんでした。検索し直すか、メニュー一覧からお選びください。</p>
        </div>
<?php endif; ?>
