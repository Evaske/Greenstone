<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});

// Remove META Boxes from certain templates
add_action( 'do_meta_boxes', function() {
  if(get_page_template_slug() === 'views/template-about.blade.php') {
    remove_meta_box( 'postcustom', 'page', 'normal' );
    remove_meta_box( 'revisionsdiv', 'page', 'normal' );
    remove_meta_box( 'postimagediv', 'page', 'normal' );

  }
  if(get_page_template_slug() === 'views/template-why.blade.php') {
    remove_meta_box( 'postcustom', 'page', 'normal' );
    remove_meta_box( 'revisionsdiv', 'page', 'normal' );

  }
});
