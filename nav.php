
<div class="row">
    <div class="col-md-2">
        <?php if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                    }
                    ?>
    </div>
    <div class="col-md-8 nav-menus">
        <?php wp_nav_menu(
            array(
            'theme_location' => 'primary-menu',
            'menu_class' => 'nav'
            )
            ); 
            ?>
    </div>
    <div class="col-md-2"></div>

</div>