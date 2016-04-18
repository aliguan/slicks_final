<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Web Interactvitiy and Engagement</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href=" <?php  bloginfo('stylesheet_url');?>" />
</head>
<body>
    <!-- Add Menu Here -->
    <div class="row">
        <div class="three columns logo">
            <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" width="50%"/>
        </div>
        <div class="twelve columns">
            <?php wp_nav_menu(array(
                'menu' => 'Menu',
                'sort_column' => 'menu_order',
                'container_class' => 'blank-menu-header'
            ));?>
        </div>
    </div>
    <div class="container">
        <header class="row">
            <div class="nine columns">
                <h1><a href="<?php bloginfo('url')?>"><?php bloginfo('name');?></a>
                </h1>
                <h2><?php bloginfo('description');?></h2>
            </div>
            <div class="three columns">
                 <?php get_search_form(); ?>
            </div>
        </header>

<!-- end header -->
