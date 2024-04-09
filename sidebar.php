<!-- メニューサイドバー PC版でflexした時の右側、幅調整-->
    <div class="c-flex--child-sidebar">
        <div class="c-menubg"></div>
        <aside class="p-sidebar">
            <button class="p-sidebar__menu c-menu--close"></button>
            <h2 class="p-sidebar__menu-pc c-menu--pc">Menu</h2>
            <?php wp_nav_menu( array( 
                'theme_location' => 'sidebarmenu' 
            ));
            ?>
        </aside>
    </div>
</div>