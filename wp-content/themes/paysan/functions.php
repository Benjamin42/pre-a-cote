<?php
    //add_theme_support( 'menus' );

    add_action( 'widgets_init', 'my_register_sidebars' );
    function my_register_sidebars() {
        /* Register the 'primary' sidebar. */
        register_sidebar(
            array(
                'id'            => 'primary',
                'name'          => __( 'Primary Sidebar' ),
                'description'   => __( 'A short description of the sidebar of me.' ),
            )
        );
        /* Repeat register_sidebar() code for additional sidebars. */
    }
?>
