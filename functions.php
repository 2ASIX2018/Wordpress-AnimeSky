<?php
function AnimeSky_setup() {

register_nav_menus(array(
	'header-menu' => 'Header Menu',
	'footer-menu' => 'Footer Menu',
	));
}

add_action( 'after_setup_theme', 'AnimeSky_setup' ); 




function add_AnimeSky_widget_Support() {
    register_sidebar( array(
                    'name'          => 'Sidebar',
                    'id'            => 'sidebar',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>',
    ) );
}

add_action( 'widgets_init', 'add_AnimeSky_widget_Support' );

?>


