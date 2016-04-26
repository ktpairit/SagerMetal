<?php
/*-- Enable Widgets-- */

function blank_widgets_init() {
        register_sidebar( array(
        'name' => 'Phone Number Sidebar',
        'id' => 'phone-number-sidebar',
        'description' => 'Widget for top header with phone number',
        'before_widget' => '<div class="widget-sidebar widget-frontpage">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
        register_sidebar( array(
        'name' => 'Main Summary Sidebar',
        'id' => 'main-sidebar-sidebar',
        'description' => 'Widget for main summary on front page',
        'before_widget' => '<div class="widget-sidebar widget-frontpage">',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
        register_sidebar( array(
        'name' => 'Left Sager Solution',
        'id' => 'left-sager-sidebar',
        'description' => 'Widget for front page left sidebar for Sager Metal Solution',
        'before_widget' => '<div class="widget-sidebar widget-frontpage">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
        register_sidebar( array(
        'name' => 'Middle Sager Solution',
        'id' => 'middle-sager-sidebar',
        'description' => 'Widget for front page middle sidebar for Sager Metal Solution',
        'before_widget' => '<div class="widget-sidebar widget-frontpage">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
        register_sidebar( array(
        'name' => 'Right Sager Solution',
        'id' => 'right-sager-sidebar',
        'description' => 'Widget for front page right sidebar for Sager Metal Solution',
        'before_widget' => '<div class="widget-sidebar widget-frontpage">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
        register_sidebar( array(
        'name' => 'Sager World',
        'id' => 'sager-world',
        'description' => 'Widget for front page to describe where Sager products are used around the world',
        'before_widget' => '<div class="widget-sidebar widget-frontpage">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
        register_sidebar( array(
        'name' => 'Sager World Image',
        'id' => 'sager-world-image',
        'description' => 'Widget for front page to show photo of world where Sager products are used',
        'before_widget' => '<div class="widget-sidebar widget-frontpage">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
        register_sidebar( array(
        'name' => 'Conveyor Solutions',
        'id' => 'conveyor-systems-sidebar',
        'description' => 'Widget for Conveyor systems page for Sager Metal products',
        'before_widget' => '<div class="widget-sidebar widget-frontpage">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
        register_sidebar( array(
        'name' => 'Metal Fabrication',
        'id' => 'metal-fabrication-sidebar',
        'description' => 'Widget for metal fabrication page for Sager Metal products',
        'before_widget' => '<div class="widget-sidebar widget-frontpage">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
        register_sidebar( array(
        'name' => 'Laser Cutting',
        'id' => 'laser-cutting-sidebar',
        'description' => 'Widget for laser cutting page for Sager Metal product',
        'before_widget' => '<div class="widget-sidebar widget-frontpage">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
        register_sidebar( array(
        'name' => 'Contact Form',
        'id' => 'contact-form-sidebar',
        'description' => 'Widget to create a contact form for Sager Metal product',
        'before_widget' => '<div class="widget-sidebar widget-frontpage">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
        register_sidebar( array(
        'name' => 'Footer Left',
        'id' => 'footer-left',
        'description' => 'Widget for our left side of our footer',
        'before_widget' => '<div class="widget-sidebar widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ));
        register_sidebar( array(
        'name' => 'Footer Middle Left',
        'id' => 'footer-middle-left',
        'description' => 'Widget for our middle but left side of our footer',
        'before_widget' => '<div class="widget-sidebar widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ));
        register_sidebar( array(
        'name' => 'Footer Middle Right',
        'id' => 'footer-middle-right',
        'description' => 'Widget for our middle but right side of our footer',
        'before_widget' => '<div class="widget-sidebar widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ));
        register_sidebar( array(
        'name' => 'Footer Right',
        'id' => 'footer-right',
        'description' => 'Widget for our right side of our footer',
        'before_widget' => '<div class="widget-sidebar widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ));
        register_sidebar( array(
        'name' => 'Footer Bottom',
        'id' => 'footer-bottom',
        'description' => 'Widget for under the footer for copyright statement',
        'before_widget' => '<div class="widget-sidebar widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h6>',
        'after_title' => '</h6>'
    ));
        register_sidebar( array(
        'name' => 'Archives Sidebar',
        'id' => 'archives-page',
        'description' => 'Widget for Front page sidebar',
        'before_widget' => '<div class="widget-sidebar widget-frontpage widget-archives">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
        register_sidebar( array(
        'name' => 'Pages Widget',
        'id' => 'pages-widget',
        'description' => 'Widget for our sidebar on pages',
        'before_widget' => '<div class="widget-sidebar widget-pages">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
        register_sidebar( array(
        'name' => 'Singles Left Widget',
        'id' => 'single-left-widget',
        'description' => 'Widget for our left sidebar on single posts',
        'before_widget' => '<div class="widget-sidebar widget-pages widget-singles">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
        register_sidebar( array(
        'name' => 'Singles Right Widget',
        'id' => 'single-right-widget',
        'description' => 'Widget for our right sidebar on single posts',
        'before_widget' => '<div class="widget-sidebar widget-pages widget-singles">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

/*-- Enable Widgets-- */
add_action('widgets_init', 'blank_widgets_init');

/*-- Enable Menu --*/
add_theme_support('menus');

/*-- Enable Header Image --*/
add_theme_support('custom-header', array(
    'width' => 1200,
    'flex-width' => true,
    'height' => 400,
    'flex-height' => true,
    'uploads' => true,
    'header-text' => true,
    ));

/*-- Enable Post Thumbnails --*/
add_theme_support('post-thumbnails');


/*-- Enqueing files --*/
function enqueue_unslider() {
    wp_enqueue_script( //function to enqueue script
        'unslider', //name of our script (id)
        get_template_directory_uri() . '/js/unslider.js', //file loc
        array('jquery'), //dependencies
        '', //version - left blank
        true //load in footer
    );
}
add_action('wp_enqueue_scripts', 'enqueue_unslider');

/*
function enqueue_randomcss() {
    wp_enqueue_script( //function to enqueue script
        'random-css', //name of our script (id)
        get_template_directory_uri() . '/css/random.css' //location of the file
    );
}
add_action('wp_enqueue_scripts', enqueue_css);
*/

wp_deregister_script('jquery');
wp_enqueue_script('jquery', 'http://code.jquery.com/jquery-latest.min.js','','',true);
?>