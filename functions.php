<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    register_sidebar( array(
        'name' => ('Who Are We Widget'),
        'id' => 'whoarewe-widget',
        'description' => 'Widget on front page (left).',
        'before_widget' => '<div class="widget-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));
    register_sidebar( array(
        'name' => ('What We Do Widget'),
        'id' => 'whatwedo-widget',
        'description' => 'Widget on front page (middle).',
        'before_widget' => '<div class="widget-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));
    register_sidebar( array(
        'name' => ('How We Do It Widget'),
        'id' => 'howwedo-widget',
        'description' => 'Widget on front page (right).',
        'before_widget' => '<div class="widget-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));
    register_sidebar( array(
        'name' => ('Footer Left'),
        'id' => 'footer-left',
        'description' => 'Widget for left part of footer',
        'before_widget' => '<div class="widget-sidebar widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));
    register_sidebar( array(
        'name' => ('Footer Middle'),
        'id' => 'footer-middle',
        'description' => 'Widget for middle part of footer',
        'before_widget' => '<div class="widget-sidebar widget-footer widget-middle">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));
    register_sidebar( array(
        'name' => ('Footer Right'),
        'id' => 'footer-right',
        'description' => 'Widget for right part of footer',
        'before_widget' => '<div class="widget-sidebar widget-footer widget-middle widget-right">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));
    register_sidebar( array(
        'name' => ('Pricing Left'),
        'id' => 'pricing-left',
        'description' => 'Widget for left part of pricing',
        'before_widget' => '<div class="widget-sidebar widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));
    register_sidebar( array(
        'name' => ('Pricing Middle'),
        'id' => 'pricing-middle',
        'description' => 'Widget for middle part of pricing',
        'before_widget' => '<div class="widget-sidebar widget-footer widget-middle">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));
    register_sidebar( array(
        'name' => ('Pricing Right'),
        'id' => 'pricing-right',
        'description' => 'Widget for right part of pricing',
        'before_widget' => '<div class="widget-sidebar widget-footer widget-middle widget-right">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));
    }

add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */

add_theme_support('menus');

/*--- Enable Post Thumbnails ---*/

add_theme_support( 'post-thumbnails' ); ?>
