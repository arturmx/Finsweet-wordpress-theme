<?php
add_filter('use_block_editor_for_post', '__return_false');

wp_enqueue_style( 'style', get_stylesheet_uri()); 
wp_enqueue_script( 'slick', get_template_directory_uri() . '/slick/slick.min.js', array('jquery'),'1.0.0', true);
wp_enqueue_script( 'slider', get_template_directory_uri() . '/scripts/slider.js', array('jquery'),'1.0.0', true);


function use_jquery_from_google () {
	if (is_admin()) {
		return;
	}

	global $wp_scripts;
	if (isset($wp_scripts->registered['jquery']->ver)) {
		$ver = $wp_scripts->registered['jquery']->ver;
                $ver = str_replace("-wp", "", $ver);
	} else {
		$ver = '1.12.4';
	}

	wp_deregister_script('jquery');
	wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/$ver/jquery.min.js", false, $ver);
}

add_action('init', 'use_jquery_from_google');

function pagination_bar( $custom_query ) {

    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer
  
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
  
        echo '<div class="pagination">';
        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text' => '&lt Prev',
            'next_text' => 'Next &gt',
                      'mid_size' => 1
        ));
        echo '</div>';
    }
  }
?>
