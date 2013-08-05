<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
	
	register_sidebar(Array(
	'name' => 'Bottom Bar',
	'before_widget' => '<div class="widget_list_unit">',
	'after_widget' => '</div><!-- widget_list_unit -->',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));
}

?>