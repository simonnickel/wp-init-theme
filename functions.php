<?php

if (!isset($content_width)) {
    $content_width = 900;
}

if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    /*
	 * Enable support for Post Formats.
     * 'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery', 'status', 'chat'
	 */
	add_theme_support( 'post-formats', array(
		'quote'
	) );

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar')) {
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => 'primary-sidebar',
        'description' => 'Description for this widget-area...',
        'id' => 'primary-sidebar',
        'before_widget' => '<article id="%1$s" class="%2$s">',
        'after_widget' => '</article>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    // Define Footer Widget Area
    register_sidebar(array(
        'name' => 'footer-sidebar',
        'description' => 'Description for this widget-area...',
        'id' => 'footer-sidebar',
        'before_widget' => '<article id="%1$s" class="%2$s">',
        'after_widget' => '</article>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

?>