<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Slick's Auto Body</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href=" <?php  bloginfo('stylesheet_url');?>" />
</head>
<body>
    <!-- Add Menu Here -->
    <div class="row">
        <div class="three columns logo">
            <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" width="20%"/>
        </div>
        <div class="nine columns">
            <?php wp_nav_menu(array(
                'menu' => 'Menu',
                'sort_column' => 'menu_order',
                'container_class' => 'slicks-menu-header'
            ));?>
        </div>
    </div>
    <div class="container">
        <header class="row">
            <div class="twelve columns oldtowncar">
                <h1>
                    <a href="<?php bloginfo('url')?>"><?php bloginfo('name');?></a>
                </h1>
                <div class="promobtn">
                    <h4><a href="<?php echo get_permalink(5); ?>">Promos</a></h4>
                </div>
            </div>
        </header>

<!-- end header -->
