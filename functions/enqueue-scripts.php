<?php
$version = '1.0A';  
  
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
        
    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/scripts/scripts.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts/js'), true );
   
    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/styles/style.css', array(), filemtime(get_template_directory() . '/assets/styles/scss'), 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
    
    /** CUSTOM STYLES AND JAVASCRIPTS **/

    $themedir = get_template_directory_uri();
    
    // Hamburger Menu Icon
    wp_enqueue_style('hamburgers-css', $themedir . '/assets/styles/hamburgers.min.css', array(), $version, 'screen');   

    wp_enqueue_script( 'clipboardjs', $themedir . '/assets/scripts/clipboard.min.js', array(), $version, true );

    wp_enqueue_script( 'custom-js', $themedir . '/assets/scripts/custom.js', array('clipboardjs'), $version, true );
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);