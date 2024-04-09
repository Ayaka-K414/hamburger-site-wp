<footer class="l-footer p-footer">
    <?php wp_nav_menu( array( 
        'theme_location' => 'footermenu' //register_nav_menusで登録したlocationを呼び出す
    ));
    ?>
    <small class="p-footer__copy">Copyright: RaiseTech</small>
</footer>
<?php wp_footer(); ?>
</body>
</html>