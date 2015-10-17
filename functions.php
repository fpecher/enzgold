<?php
function grid_style() {
	wp_register_style('grid-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css');
    wp_enqueue_style( 'grid-style');
}
add_action('wp_print_styles', 'grid_style');

function main_style() {
	wp_register_style('main-style', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style( 'main-style');

}
add_action('wp_print_styles', 'main_style');

function FontAwesome() {
	wp_register_style('FontAwesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
    wp_enqueue_style( 'FontAwesome');
}
add_action('wp_print_styles', 'FontAwesome');

function jquery() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("http://code.jquery.com/jquery-latest.min.js"), true);
	wp_enqueue_script( 'jquery' );
} 
add_action( 'wp_enqueue_scripts', 'jquery' );

function maps(){
	wp_register_script('maps', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', true);
	wp_enqueue_script('maps');
}
add_action('wp_enqueue_scripts', 'maps');

function modernizr(){
	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', false);
	wp_enqueue_script('modernizr');
}
add_action('wp_enqueue_scripts', 'modernizr');

function reveal(){
	wp_register_script('reveal', get_template_directory_uri() . '/js/scrollReveal.min.js', false);
	wp_enqueue_script('reveal');
}
add_action('wp_enqueue_scripts', 'reveal');

function scrollto(){
	wp_register_script('scrollto', 'http://cdn.jsdelivr.net/jquery.scrollto/2.1.2/jquery.scrollTo.min.js', false);
	wp_enqueue_script('scrollto');
}
add_action('wp_enqueue_scripts', 'scrollto');

function main() {
	wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', false);  
	wp_enqueue_script( 'main' );
} 
add_action( 'wp_enqueue_scripts', 'main' );

//MENÜS
if ( function_exists('register_nav_menus') ) {
    register_nav_menus(array(
        'main' => __( 'Main Menue' ),
        'mobile' => __( 'Mobile & Subpage Menue' ),
        'footer' => __( 'Footer Menu' )
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


add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

//Thumbnails
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 9999, 350 ); // default Post Thumbnail dimensions   
}
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'cat-thumb', 9999, 217); //(cropped)
}

?>