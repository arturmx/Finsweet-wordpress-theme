<?php
add_filter('use_block_editor_for_post', '__return_false');

wp_enqueue_style( 'style', get_stylesheet_uri()); 
wp_enqueue_script( 'slick', get_template_directory_uri() . '/slick/slick.min.js', array('jquery'));
wp_enqueue_script( 'slider', get_template_directory_uri() . '/scripts/slider.js', array('jquery'));
?>