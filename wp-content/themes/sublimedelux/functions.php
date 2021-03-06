<?php


define('SDT_THEME_PATH', get_template_directory());
define('SDT_THEME_URL', get_template_directory_uri());

require_once(SDT_THEME_PATH . '/rtextend/cpt/product.php');

add_action( 'wp_enqueue_scripts', 'sdt_replace_core_jquery_version' );

function sdt_replace_core_jquery_version() {
    wp_deregister_script( 'jquery-core' );
    wp_enqueue_script('jquery-core', SDT_THEME_URL . '/js/jquery-3.2.1.min.js', array(), '3.2.1', true);
    // wp_deregister_script( 'jquery-migrate' );
    // wp_register_script( 'jquery-migrate', "https://code.jquery.com/jquery-migrate-3.0.0.min.js", array(), '3.0.0' );
}

add_action('wp_enqueue_scripts', 'sdt_theme_scripts', 20);

function sdt_theme_scripts() {
	wp_enqueue_style('sdt-bootstrap-style', SDT_THEME_URL . '/styles/bootstrap4/bootstrap.min.css');
	wp_enqueue_style('sdt-font-awesome-style', SDT_THEME_URL . '/plugins/font-awesome-4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('sdt-carousel-style', SDT_THEME_URL . '/plugins/OwlCarousel2-2.2.1/owl.carousel.css');
	wp_enqueue_style('sdt-carousel-default-style', SDT_THEME_URL . '/plugins/OwlCarousel2-2.2.1/owl.theme.default.css');
	wp_enqueue_style('sdt-carousel-animate-style', SDT_THEME_URL . '/plugins/OwlCarousel2-2.2.1/animate.css');
	// Load our main stylesheet.
	wp_enqueue_style( 'sublimedelux-style', get_stylesheet_uri() );
	if(sdt_is_page("Products")){
        wp_enqueue_style('sdt-product-style', SDT_THEME_URL . '/styles/product.css');
    }
    if(sdt_is_page("Contact")){
		wp_enqueue_style('sdt-contact-style', SDT_THEME_URL . '/styles/contact.css');
        wp_enqueue_style('sdt-contact-responsive-style', SDT_THEME_URL . '/styles/contact_responsive.css');
        wp_enqueue_script('sdt-contact-script', SDT_THEME_URL . '/js/contact.js', array('jquery'), null, true);
        wp_enqueue_script('google-map', 'https://maps.googleapis.com/maps/api/js?sensor=false', array(), '1.0.0', true);
	}
	wp_enqueue_style('sdt-responsive-style', SDT_THEME_URL . '/styles/responsive.css');
	wp_enqueue_style('sdt-dev-custom-style', SDT_THEME_URL . '/styles/dev-custom.css');

	// scripts
	
	wp_enqueue_script('sdt-popper-script', SDT_THEME_URL . '/styles/bootstrap4/popper.js', array('jquery'), null, true);
	wp_enqueue_script('sdt-bootstrap-script', SDT_THEME_URL . '/styles/bootstrap4/bootstrap.min.js', array('jquery'), null, true);
	wp_enqueue_script('sdt-TweenMax-script', SDT_THEME_URL . '/plugins/greensock/TweenMax.min.js', array('jquery'), null, true);
	wp_enqueue_script('sdt-TimelineMax-script', SDT_THEME_URL . '/plugins/greensock/TimelineMax.min.js', array('jquery'), null, true);
	wp_enqueue_script('sdt-ScrollMagic-script', SDT_THEME_URL . '/plugins/scrollmagic/ScrollMagic.min.js', array('jquery'), null, true);
	wp_enqueue_script('sdt-animation-gsap-script', SDT_THEME_URL . '/plugins/greensock/animation.gsap.min.js', array('jquery'), null, true);
	wp_enqueue_script('sdt-ScrollToPlugin-script', SDT_THEME_URL . '/plugins/greensock/ScrollToPlugin.min.js', array('jquery'), null, true);
	wp_enqueue_script('sdt-carousel-script', SDT_THEME_URL . '/plugins/OwlCarousel2-2.2.1/owl.carousel.js', array('jquery'), null, true);
	wp_enqueue_script('sdt-isotope-pkgd-script', SDT_THEME_URL . '/plugins/Isotope/isotope.pkgd.min.js', array('jquery'), null, true);
	wp_enqueue_script('sdt-easing-script', SDT_THEME_URL . '/plugins/easing/easing.js', array('jquery'), null, true);
	wp_enqueue_script('sdt-parallax-script', SDT_THEME_URL . '/plugins/parallax-js-master/parallax.min.js', array('jquery'), null, true);
	wp_enqueue_script('sdt-custom-script', SDT_THEME_URL . '/js/custom.js', array('jquery'), null, true);


}

function sdt_show_theme_image($image){
	echo SDT_THEME_URL . '/images/' . $image;
}

add_action( 'after_setup_theme', 'sdt_after_setup_theme' );

function sdt_after_setup_theme() {
	add_theme_support('post-thumbnails');
}


function get_customposts($display_count, $post_type) {
    $page = get_query_var('paged') ? get_query_var('paged') : 1;
    $offset = ( $page - 1 ) * $display_count;

    $args = array(
        'post_type' => $post_type,
        'posts_per_page' => $display_count,
        'page' => $page,
        'offset' => $offset
    );

    $the_query = new WP_Query($args);
    return $the_query;
}

function sdt_get_post_thumbnail($post_id, $size = 'medium'){
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), $size );
	return isset($thumb['0'])? $thumb['0'] : '#';
}

function sdt_is_page($title){
	return get_the_title() == $title;
}

function get_all_category(){
	$categories = get_terms('product_category');
	return $categories;
}

function execute_test_page( $atts ) {
	get_all_category();
}
add_shortcode( 'test_page', 'execute_test_page' );


function sdt_get_custom_posts($post_arg) {

    $post_arg_default = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'taxonomy' => '',
        'terms' => '',
    );

    extract(shortcode_atts($post_arg_default, $post_arg));

    $page = get_query_var('paged') ? get_query_var('paged') : 1;
    $offset = ( $page - 1 ) * $posts_per_page;

    if ($taxonomy == '' && $terms == '') {
        $tax_query = array();
    } else {
        $tax_query = array(
            array(
                'taxonomy' => $taxonomy,
                'field' => 'term_id',
                'terms' => $terms
            ),
        );
    }


    $args = array(
        'post_type' => $post_type,
        'posts_per_page' => $posts_per_page,
        'page' => $page,
        'offset' => $offset,
        'tax_query' => $tax_query
    );

    $the_query = new WP_Query($args);

    return $the_query;
}
