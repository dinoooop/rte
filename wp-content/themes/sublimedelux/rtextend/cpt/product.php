<?php


add_action('init', 'rtd_add_product_post_type', 0);

function rtd_add_product_post_type() {

    $labels = array(
        'name' => _x('Products', 'Post Type General Name', 'rtextend'),
        'singular_name' => _x('Product', 'Post Type Singular Name', 'rtextend'),
        'menu_name' => __('Products', 'rtextend'),
        'parent_item_colon' => __('Parent Product', 'rtextend'),
        'all_items' => __('All Products', 'rtextend'),
        'view_item' => __('View Product', 'rtextend'),
        'add_new_item' => __('Add New Product', 'rtextend'),
        'add_new' => __('Add New', 'rtextend'),
        'edit_item' => __('Edit Product', 'rtextend'),
        'update_item' => __('Update Product', 'rtextend'),
        'search_items' => __('Search Product', 'rtextend'),
        'not_found' => __('Not Found', 'rtextend'),
        'not_found_in_trash' => __('Not found in Trash', 'rtextend'),
    );

    $args = array(
        'label' => __('products', 'rtextend'),
        'description' => __('Product in RTE', 'rtextend'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'taxonomies' => array('pdtcat'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    register_post_type('product', $args);
}

/**
 * 
 * Define a category for product
 */
add_action('init', 'rtd_product_taxonomy');

function rtd_product_taxonomy() {

    $labels = array(
        'name' => _x('Product Categories', 'taxonomy general name'),
        'singular_name' => _x('Product Category', 'taxonomy singular name'),
        'search_items' => __('Search Category'),
        'all_items' => __('All Categories'),
        'parent_item' => __('Parent Category'),
        'parent_item_colon' => __('Parent Category:'),
        'edit_item' => __('Edit Category'),
        'update_item' => __('Update Category'),
        'add_new_item' => __('Add New Category'),
        'new_item_name' => __('New Category Name'),
        'menu_name' => __('Product Categories'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'pdtcat'),
    );

    register_taxonomy('pdtcat', array('product'), $args);
}
