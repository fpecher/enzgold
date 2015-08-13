<?php
function main_style() {
	wp_register_style('main-style', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style( 'main-style');

}
add_action('wp_print_styles', 'main_style');

function owl_style() {
	wp_register_style('owl-style', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style( 'owl-style');

}
add_action('wp_print_styles', 'owl_style');

function grid_style() {
	wp_register_style('grid-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css');
    wp_enqueue_style( 'grid-style');
}
add_action('wp_print_styles', 'grid_style');

// function FontAwesome() {
// 	wp_register_style('FontAwesome', 'http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');
//     wp_enqueue_style( 'FontAwesome');
// }
// add_action('wp_print_styles', 'FontAwesome');

function jquery() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("http://code.jquery.com/jquery-latest.min.js"), false, '');
	wp_enqueue_script( 'jquery' );
} 
add_action( 'wp_enqueue_scripts', 'jquery' );

function owl() {
	wp_register_script( 'owl', get_template_directory_uri() . '/js/assets/owl.carousel.min.js', false);  
	wp_enqueue_script( 'owl' );
} 
add_action( 'wp_enqueue_scripts', 'owl' );

function main() {
	wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', false);  
	wp_enqueue_script( 'main' );
} 
add_action( 'wp_enqueue_scripts', 'main' );


//MENÜS
if ( function_exists('register_nav_menus') ) {
    register_nav_menus(array(
        'main' => __( 'Main Menue' ),
        'meta' => __( 'Footer Menue' )
    ));
}
//Widgetarea
function sidebar_widgets_init() {

	register_sidebar( array(
		'name' => 'Sidebar Widget 1',
		'id' => 'widget-1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );
	register_sidebar( array(
		'name' => 'Sidebar Widget 3',
		'id' => 'widget-3',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'name' => 'Footer Widget',
		'id' => 'widget-footer',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h1>',
		'after_title' => '</h1>',
	) );
}
add_action( 'widgets_init', 'sidebar_widgets_init' );

//Adminbar ausblenden
show_admin_bar( false );

//Excerpt
function new_excerpt_length($length) {
	return 40;
}
add_filter('excerpt_length', 'new_excerpt_length');
function new_excerpt_more($more) {
 return '... <a class="readmore" href="' . get_permalink($post->ID) . '">weiterlesen</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//Thumbnails
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 9999, 350 ); // default Post Thumbnail dimensions   
}
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'cat-thumb', 9999, 217); //(cropped)
}

?>