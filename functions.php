<?php

// Load Stylesheets
function loadStyleSheets() {
        wp_enqueue_style('fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array(), '4.6.3');
        wp_enqueue_style('fontawesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css', array(), '5.10.0');
        wp_enqueue_style('fonts', 'https://fonts.gstatic.com', array(), 1, "all");

        wp_register_style("bootstrap", get_template_directory_uri() . "/css/bootstrap.min.css", array(), false, "all");
        wp_enqueue_style('bootstrap');

        wp_enqueue_style('style', get_stylesheet_uri());


}
add_action('wp_enqueue_scripts', 'loadStyleSheets');


// Load JavaScript
function load_js() {
        wp_enqueue_script("jquery");

        wp_register_script("bootstrap", get_template_directory_uri() . "/js/bootstrap.min.js", "jquery", false, true);
        wp_enqueue_script("bootstrap");

}
add_action('wp_enqueue_scripts', 'load_js');


// Load Options
add_theme_support("menus");


// Menus
register_nav_menus(
        array(
                'top-menu' => "Top Menu Location",
                'mobile-menu' => 'Mobile Menu Location'
        )
);


// Options Page 
if ( function_exists('acf_add_options_page') ) {
        acf_add_options_page(
                array(
                        "page_title" => "Contact Us",
                        "menu_title" => "Contact Us",
                        "menu_slug" => "contact-us",
                        "capability" => "edit_posts", // Editor/Administrator can access this
                        "icon_url" => "dashicons-location"
                )
        );
}
 

// WooCommerce
function elfort_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'elfort_add_woocommerce_support');


// Campaign Block
function register_acf_block_types() {
        acf_register_block_type(array(
                'name' => 'campaign',
                'title' => __('Campaign'),
                'description' => __('A Custom Campaign block by Eliza.'), 
                'render_template' => 'template-parts/blocks/campaign.php',
                'category' => 'formatting',
                'icon' => 'admin-comments',
                'keywords' => array('campaign', 'quote'),
                'enqueue_style' => get_stylesheet_directory_uri() . '/template-parts/blocks/campaign.css'
        ));
// Information Block
                acf_register_block_type(array(
                'name' => 'infobox',
                'title' => __('Infobox'),
                'description' => __('A Custom Information Box block by Eliza.'), 
                'render_template' => 'template-parts/blocks/infobox.php',
                'category' => 'formatting',
                'icon' => 'book',
                'keywords' => array('infobox', 'quote'),
                'enqueue_style' => get_stylesheet_directory_uri() . '/template-parts/blocks/infobox.css'
        ));
}

        if (function_exists('acf_register_block_type')) {
        add_action('acf/init', 'register_acf_block_types');
}

